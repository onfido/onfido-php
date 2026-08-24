<?php

namespace Onfido\Test\Resource;

use Onfido\Model\ApplicantBuilder;
use Onfido\Model\ApplicantConsentBuilder;
use Onfido\Model\ApplicantConsentName;
use Onfido\Model\BiometricToken;
use Onfido\Model\BiometricTokenResponse;
use Onfido\Model\BiometricTokensResponse;
use Onfido\Model\BiometricTokenUpdater;
use Onfido\Model\UpdatedBiometricTokenResponse;
use Onfido\Model\WorkflowRunBuilder;
use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

class BiometricTokensTest extends OnfidoTestCase
{
    private const BIOMETRIC_WORKFLOW_ID = 'b79dcf69-41a0-412d-b803-d1a618730f72';
    private const APPROVED_STATUS = 'approved';

    private $applicantId;
    private $biometricCustomerUserId;
    private $biometricTokensResponse;
    private $biometricTokenId;

    public function setUp(): void
    {
        $this->applicantId = $this->createBiometricApplicant()->getId();
        $this->biometricCustomerUserId = sprintf('test-user-id-%s', bin2hex(random_bytes(16)));
        $livePhoto = $this->uploadLivePhoto($this->applicantId);

        $workflowRun = self::$onfido->createWorkflowRun(
            new WorkflowRunBuilder([
                'applicant_id' => $this->applicantId,
                'workflow_id' => self::BIOMETRIC_WORKFLOW_ID,
                'customer_user_id' => $this->biometricCustomerUserId,
                'custom_data' => [
                    'media_ids' => [
                        [
                            'id' => (string) $livePhoto->getId(),
                        ]
                    ]
                ]
            ])
        );

        $this->assertSame($this->biometricCustomerUserId, $workflowRun->getCustomerUserId());

        $this->biometricTokensResponse = $this->repeatRequestUntil(
            [self::$onfido, 'listBiometricTokens'],
            [$this->biometricCustomerUserId],
            function (BiometricTokensResponse $response): bool {
                return count($response->getBiometricTokens()) > 0;
            },
            'Biometric tokens were not created in time',
            10,
            3
        );

        $biometricToken = $this->biometricTokensResponse->getBiometricTokens()[0];
        $this->assertNotNull($biometricToken->getUuid());
        $this->biometricTokenId = $biometricToken->getUuid();
    }

    public function testListBiometricTokens(): void
    {
        $this->assertInstanceOf(BiometricTokensResponse::class, $this->biometricTokensResponse);

        $biometricTokens = $this->biometricTokensResponse->getBiometricTokens();
        $this->assertGreaterThan(0, count($biometricTokens));
        $this->assertInstanceOf(BiometricToken::class, $biometricTokens[0]);
        $this->assertNotNull($biometricTokens[0]->getUuid());
        $this->assertNotNull($biometricTokens[0]->getData()->getStatus());
    }

    public function testFindBiometricToken(): void
    {
        $biometricTokenResponse = self::$onfido->findBiometricToken(
            $this->biometricCustomerUserId,
            $this->biometricTokenId
        );

        $this->assertInstanceOf(BiometricTokenResponse::class, $biometricTokenResponse);
        $this->assertSame(
            $this->biometricTokenId,
            $biometricTokenResponse->getBiometricToken()->getUuid()
        );
        $this->assertNotNull($biometricTokenResponse->getBiometricToken()->getData()->getStatus());
    }

    public function testUpdateBiometricTokenStatus(): void
    {
        $updatedBiometricToken = self::$onfido->updateBiometricToken(
            $this->biometricCustomerUserId,
            $this->biometricTokenId,
            new BiometricTokenUpdater([
                'status' => self::APPROVED_STATUS
            ])
        );

        $this->assertInstanceOf(UpdatedBiometricTokenResponse::class, $updatedBiometricToken);
        $this->assertSame(
            $this->biometricTokenId,
            $updatedBiometricToken->getBiometricToken()->getUuid()
        );
        $this->assertSame(
            self::APPROVED_STATUS,
            $updatedBiometricToken->getBiometricToken()->getData()->getStatus()
        );
    }

    public function testInvalidateBiometricToken(): void
    {
        $response = self::$onfido->invalidateBiometricTokenWithHttpInfo(
            $this->biometricCustomerUserId,
            $this->biometricTokenId
        );

        $this->assertSame(200, $response[1]);
    }

    public function testInvalidateBiometricTokens(): void
    {
        $response = self::$onfido->invalidateBiometricTokensWithHttpInfo(
            $this->biometricCustomerUserId
        );

        $this->assertSame(200, $response[1]);
    }

    private function createBiometricApplicant(): \Onfido\Model\Applicant
    {
        $uniqueSuffix = bin2hex(random_bytes(4));

        return self::$onfido->createApplicant(
            new ApplicantBuilder([
                'first_name' => sprintf('First%s', $uniqueSuffix),
                'last_name' => sprintf('Last%s', $uniqueSuffix),
                'email' => sprintf('first.last.%s@example.com', $uniqueSuffix),
                'consents' => [
                    new ApplicantConsentBuilder([
                        'name' => ApplicantConsentName::PRIVACY_NOTICES_READ,
                        'granted' => true
                    ])
                ]
            ])
        );
    }
}

?>
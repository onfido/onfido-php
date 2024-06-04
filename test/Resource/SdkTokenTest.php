<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\SdkTokenBuilder as SdkTokenBuilder;


class SdkTokenTest extends OnfidoTestCase
{
    private $applicantId;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
    }

    public function testGenerateSdkToken(): void
    {
        $token = self::$onfido->generateSdkToken(
          new SdkTokenBuilder(['applicant_id' => $this->applicantId])
        )->getToken();

        $this->assertGreaterThan(0, strlen($token));
    }
}

?>
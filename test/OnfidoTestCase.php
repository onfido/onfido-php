<?php

namespace Onfido\Test;

use PHPUnit\Framework\TestCase;

use DateTime as DateTime;
use Onfido as Onfido;

abstract class OnfidoTestCase extends TestCase
{
    protected static $onfido;
    protected static $sampleapplicant_id;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
        self::$onfido = new Onfido\Api\DefaultApi(
            new \GuzzleHttp\Client([
                'timeout'  => 30,
                'connect_timeout' => 30,
                'read_timeout' => 30
            ]),
            Onfido\Configuration::getDefaultConfiguration()
                ->setApiToken(getenv('ONFIDO_API_TOKEN'))
                ->setRegion(Onfido\Region::EU)
        );

        self::$sampleapplicant_id = getenv('ONFIDO_SAMPLE_APPLICANT_ID');
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
        self::cleanUpApplicants();
        self::cleanUpWebhooks();
    }

    protected function createApplicant(): Onfido\Model\Applicant
    {
        return self::$onfido->createApplicant(
            new Onfido\Model\ApplicantBuilder(
                [
                    'first_name' => 'Test',
                    'last_name' => 'Applicant',
                    'dob' => new DateTime('1980-01-22'),
                    'location' => new Onfido\Model\Location([
                        'ip_address' => '127.0.0.1',
                        'country_of_residence' => Onfido\Model\CountryCodes::DEU
                    ]),
                    'address' => new Onfido\Model\Address([
                        'building_number' => '100',
                        'street' => 'Main Street',
                        'town' => 'London',
                        'postcode' => 'SW4 6EH',
                        'country' => Onfido\Model\CountryCodes::GBR,
                        'line1' => 'My wonderful address'
                    ]),
                    'email' => 'first.last@gmail.com',
                    'phone_number' => '351911111111',
                    'consents' => [
                        new Onfido\Model\ApplicantConsentBuilder([
                            'name' => Onfido\Model\ApplicantConsentName::PRIVACY_NOTICES_READ,
                            'granted' => true
                        ])
                    ]
                ]
            ),
        );
    }

    protected static function cleanUpApplicants(): void
    {
        if ( strlen(self::$sampleapplicant_id) != 36 )
            return;

        $applicants = self::$onfido->listApplicants(1, 100, false)->getApplicants();

        foreach($applicants as $applicant)
        {
            if ( $applicant->getId() != self::$sampleapplicant_id)
            {
                try {
                    self::$onfido->deleteApplicant($applicant->getId());
                }
                catch (\Onfido\ApiException $ex) {
                    // Ignore errors during clean-up
                }
            }
        }
    }

    protected static function cleanUpWebhooks(): void
    {
        $webhooks = self::$onfido->listWebhooks()->getWebhooks();

        foreach($webhooks as $webhook)
        {
            try {
                self::$onfido->deleteWebhook($webhook->getId());
            }
            catch (\Onfido\ApiException) {
                // Ignore errors
            }
        }
    }

    protected function uploadDocument(string $applicantId): Onfido\Model\Document
    {
        return self::$onfido->uploadDocument(
            Onfido\Model\DocumentTypes::PASSPORT,
            $applicantId,
            new \SplFileObject('test/media/sample_driving_licence.png')
        );
    }

    protected function uploadLivePhoto(string $applicantId): Onfido\Model\LivePhoto
    {
        return self::$onfido->uploadLivePhoto(
            $applicantId,
            new \SplFileObject('test/media/sample_photo.png')
        );
    }

    protected function createCheck(
        Onfido\Model\CheckBuilder $checkBuilder = null,
        string $applicantId = null,
        string $documentId = null,
        array $reportNames = null
    ): Onfido\Model\Check
    {
        if($checkBuilder != null) {
            return self::$onfido->createCheck($checkBuilder);
        }

        return self::$onfido->createCheck(
            new Onfido\Model\CheckBuilder([
                'applicant_id' => $applicantId,
                'document_ids' => [$documentId],
                'report_names' => $reportNames
            ]
        ));
    }

    protected function createWorkflowRun(
        Onfido\Model\WorkflowRunBuilder $workflowRunBuilder = null,
        string $applicantId = null,
        string $workflowId = null
    ): Onfido\Model\WorkflowRun
    {
        if($workflowRunBuilder != null) {
            return self::$onfido->createWorkflowRun($workflowRunBuilder);
        }

        return self::$onfido->createWorkflowRun(
            new Onfido\Model\WorkflowRunBuilder([
                'applicant_id' => $applicantId,
                'workflow_id' => $workflowId
            ])
        );
    }

    protected function getTaskIdByPartialId($tasks, string $partialId): string {
        foreach ($tasks as $task) {
            if (strpos($task->getId(), $partialId) !== false) {
                return $task->getId();
            }
        }
    }

    protected function repeatRequestUntilStatusChanges(
        callable $function,
        array $params,
        string $status,
        $maxRetries = 15,
        $sleepTime = 1
    )
    {
        $instance = call_user_func_array($function, $params);
        $iteration = 0;

        while($instance->getStatus() !== $status) {
            if($iteration > $maxRetries) {
                $this->fail('Status did not change in time');
            }

            $iteration += 1;
            sleep($sleepTime);

            $instance = call_user_func_array($function, $params);
        }
        return $instance;
    }

    protected function repeatRequestUntilTaskOutputChanges(
        callable $function,
        array $params,
        $maxRetries = 15,
        $sleepTime = 1
    )
    {
        $instance = call_user_func_array($function, $params);
        $iteration = 0;

        while($instance["output"] == NULL) {
            if($iteration > $maxRetries) {
                $this->fail('Output did not change in time');
            }

            $iteration += 1;
            sleep($sleepTime);

            $instance = call_user_func_array($function, $params);
        }
        return $instance;
    }

    protected function repeatRequestUntilHttpCodeChanges(
        callable $function,
        array $params,
        $maxRetries = 15,
        $sleepTime = 1
    )
    {
        $instance = null;
        $iteration = 0;
        while($iteration <= $maxRetries) {
            try {
                $instance = call_user_func_array($function, $params);
                break;
            } catch (Onfido\ApiException) {
                sleep($sleepTime);
                $iteration += 1;
            }
        }
        return $instance;
    }
}

?>

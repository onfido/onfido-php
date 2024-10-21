<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WorkflowRun as WorkflowRun;
use Onfido\Model\WorkflowRunStatus as WorkflowRunStatus;
use Onfido\Model\CompleteTaskBuilder as CompleteTaskBuilder;

class WorkflowRunOutputsTest extends OnfidoTestCase
{
    private $applicantId;
    private $profileData;
    private $documentId;
    private $livePhotoId;
    private $findWorkflowRunFn;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->profileData = [
          'country_residence' => 'GBR',
          'first_name' => 'First',
          'last_name' => 'Last',
          'dob' => '2000-01-01',
          'email' => 'first.last@gmail.com',
          'phone_number' => '+351911111111',
          'nationality' => 'GBR',
          'phone_number_consent_granted' => true,
          'address' => [
              'country' => 'GBR',
              'line1' => '123rd Street',
              'line2' => '2nd Floor',
              'line3' => '23',
              'town' => 'London',
              'postcode' => 'S2 2DF',
          ],
        ];

        $this->documentId = $this->uploadDocument($this->applicantId)->getId();
        $this->livePhotoId = $this->uploadLivePhoto($this->applicantId)->getId();
        $this->findWorkflowRunFn = function($workflowRunId) {
            return self::$onfido->findWorkflowRun($workflowRunId);
        };
    }

    public function testProfileDataCaptureAsOutput(): void
    {
        $workflowId = 'd27e510b-27a8-44c3-a3cc-bf4c0648a4ba';
        $workflowRunId = $this->createWorkflowRun(null, $this->applicantId, $workflowId)->getId();

        $tasks = self::$onfido->listTasks($workflowRunId);
        $profileDataTaskId = $this->getTaskIdByPartialId($tasks, 'profile');
        $completeTaskBuilder = new CompleteTaskBuilder(['data' => $this->profileData]);

        self::$onfido->completeTask($workflowRunId, $profileDataTaskId, $completeTaskBuilder);
        $workflowRunOutputs = $this->repeatRequestUntilStatusChanges(
            $this->findWorkflowRunFn,
            [$workflowRunId],
            WorkflowRunStatus::APPROVED
        )->getOutput();

        // Can't compare output with profileData directly due to issues with types,
        // so converting the output into array and comparing key by key value
        // (without the address which also causes issues and is compared separately)
        $keysExceptAddress = array_filter(array_keys($this->profileData),
            function($key) {
                return $key !== 'address';
            }
        );

        foreach($keysExceptAddress as $key) {
            $this->assertEquals(
                $this->profileData[$key],
                ((array) $workflowRunOutputs['profile_capture_data'])[$key]
            );
        }

        $this->assertEquals(
            $this->profileData['address'],
            (array) ((array) $workflowRunOutputs['profile_capture_data'])['address']
        );
    }

    public function testDocumentAndFacialSimilarityReportAsOutput()
    {
        $workflowId = '5025d9fd-7842-4805-bce1-a7bfd7131b4e';
        $workflowRunId = $this->createWorkflowRun(null, $this->applicantId, $workflowId)->getId();

        $tasks = self::$onfido->listTasks($workflowRunId);
        $profileDataTaskId = $this->getTaskIdByPartialId($tasks, 'profile');
        self::$onfido->completeTask(
            $workflowRunId,
            $profileDataTaskId,
            new CompleteTaskBuilder(['data' => [
                'first_name' => 'First',
                'last_name' => 'Last'
            ]])
        );

        $tasks = self::$onfido->listTasks($workflowRunId);
        $documentCaptureTaskId = $this->getTaskIdByPartialId($tasks, 'document');
        self::$onfido->completeTask(
            $workflowRunId,
            $documentCaptureTaskId,
            new CompleteTaskBuilder(['data' => [[
                'id' => $this->documentId
            ]]])
        );

        $tasks = self::$onfido->listTasks($workflowRunId);
        $documentCaptureTaskId = $this->getTaskIdByPartialId($tasks, 'face_photo');
        self::$onfido->completeTask(
            $workflowRunId,
            $documentCaptureTaskId,
            new CompleteTaskBuilder(['data' => [[
                'id' => $this->livePhotoId
            ]]])
        );

        $workflowRunOutputs = $this->repeatRequestUntilStatusChanges(
            $this->findWorkflowRunFn,
            [$workflowRunId],
            WorkflowRunStatus::APPROVED
        )->getOutput();

        $documentReportOutput = (array) $workflowRunOutputs['doc'];
        $facialSimilarityReportOutput = (array) $workflowRunOutputs['selfie'];

        $this->assertNotNull($documentReportOutput['breakdown']);
        $this->assertNotNull($documentReportOutput['properties']);
        $this->assertNotNull($documentReportOutput['repeat_attempts']);
        $this->assertNotNull($documentReportOutput['result']);
        $this->assertNotNull($documentReportOutput['status']);
        $this->assertNotNull($documentReportOutput['sub_result']);
        $this->assertNotNull($documentReportOutput['uuid']);

        $this->assertNotNull($facialSimilarityReportOutput['breakdown']);
        $this->assertNotNull($facialSimilarityReportOutput['properties']);
        $this->assertNotNull($facialSimilarityReportOutput['result']);
        $this->assertNotNull($facialSimilarityReportOutput['status']);
        $this->assertNotNull($facialSimilarityReportOutput['uuid']);
    }
}

?>
<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WorkflowRun as WorkflowRun;
use Onfido\Model\WorkflowRunStatus as WorkflowRunStatus;
use Onfido\Model\WorkflowRunBuilder as WorkflowRunBuilder;

class WorkflowRunsTest extends OnfidoTestCase
{
    private $applicantId;
    private $workflowId;
    private $workflowRun;

    public function setUp(): void
    {
        $this->applicantId = $this->createApplicant()->getId();
        $this->workflowId = 'e8c921eb-0495-44fe-b655-bcdcaffdafe5';
        $this->workflowRun = $this->createWorkflowRun(null, $this->applicantId, $this->workflowId);
    }

    public function testCreateWorkflowRun(): void
    {
        $this->assertSame($this->workflowId, $this->workflowRun->getWorkflowId());
        $this->assertSame(WorkflowRunStatus::AWAITING_INPUT, $this->workflowRun->getStatus());
    }

    public function testCreateWorkflowRunWithCustomInputs(): void
    {
        $workflowId = '45092b29-f220-479e-aa6f-a6f989baac4c';
        $workflowRunBuilder = new WorkflowRunBuilder([
          'applicant_id' => $this->applicantId,
          'workflow_id' => $workflowId,
          'custom_data' => [
            'age' => 18,
            'is_employed' => false
          ]
        ]);

        $workflowRun = $this->createWorkflowRun($workflowRunBuilder);

        $this->assertSame($workflowId, $workflowRun->getWorkflowId());
        $this->assertSame(WorkflowRunStatus::APPROVED, $workflowRun->getStatus());
    }

    public function testListWorkflowRuns(): void
    {
        $listOfWorkflowRuns = self::$onfido->listWorkflowRuns();
        $this->assertGreaterThan(0, sizeOf($listOfWorkflowRuns));
    }

    public function testFindWorkflowRun(): void
    {
        $getWorkflowRun = self::$onfido->findWorkflowRun($this->workflowRun->getId());
        $this->assertSame($this->workflowRun->getId(), $getWorkflowRun->getId());
    }

    public function testDownloadEvidenceFile(): void
    {
        $getEvidenceFileFn = function($workflowRunId) {
          return self::$onfido->downloadSignedEvidenceFile($workflowRunId);
        };

        $file = $this->repeatRequestUntilHttpCodeChanges(
          $getEvidenceFileFn,
          [$this->workflowRun->getId()],
          15,
          2
        );

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testGenerateTimelineFile(): void
    {
        $workflowId = '221f9d24-cf72-4762-ac4a-01bf3ccc09dd';
        $workflowRunId = $this->createWorkflowRun(null, $this->applicantId, $workflowId)->getId();
        $findWorkflowRunFn = function($workflowRunId) {
          return self::$onfido->findWorkflowRun($workflowRunId);
        };

        $this->repeatRequestUntilStatusChanges(
          $findWorkflowRunFn,
          [$workflowRunId],
          WorkflowRunStatus::APPROVED
        )->getOutput();

        $workflowTimelineFileData = self::$onfido->createTimelineFile($workflowRunId);

        $this->assertNotNull($workflowTimelineFileData->getWorkflowTimelineFileId());
        $this->assertNotNull($workflowTimelineFileData->getHref());
    }

    public function testDownloadTimelineFile(): void
    {
        $workflowId = '221f9d24-cf72-4762-ac4a-01bf3ccc09dd';
        $workflowRunId = $this->createWorkflowRun(null, $this->applicantId, $workflowId)->getId();
        $findWorkflowRunFn = function($workflowRunId) {
          return self::$onfido->findWorkflowRun($workflowRunId);
        };
        $getTimelineFileFn = function($workflowRunId, $timelineFileId) {
          return self::$onfido->findTimelineFile($workflowRunId, $timelineFileId);
        };


        $this->repeatRequestUntilStatusChanges(
          $findWorkflowRunFn,
          [$workflowRunId],
          WorkflowRunStatus::APPROVED
        )->getOutput();

        $workflowTimelineFileId = self::$onfido->createTimelineFile($workflowRunId)
          ->getWorkflowTimelineFileId();

        $file = $this->repeatRequestUntilHttpCodeChanges(
          $getTimelineFileFn,
          [$workflowRunId, $workflowTimelineFileId]
        );

        $this->assertGreaterThan(0, $file->getSize());
    }

    public function testDownloadEvidenceFolder(): void
    {
        $workflowId = '221f9d24-cf72-4762-ac4a-01bf3ccc09dd';
        $workflowRunId = $this->createWorkflowRun(null, $this->applicantId, $workflowId)->getId();
        $findWorkflowRunFn = function($workflowRunId) {
          return self::$onfido->findWorkflowRun($workflowRunId);
        };
        $this->repeatRequestUntilStatusChanges(
          $findWorkflowRunFn,
          [$workflowRunId],
          WorkflowRunStatus::APPROVED
        )->getOutput();

        $getEvidenceFolderFn = function($workflowRunId) {
          return self::$onfido->downloadEvidenceFolder($workflowRunId);
        };

        $file = $this->repeatRequestUntilHttpCodeChanges(
          $getEvidenceFolderFn,
          [$workflowRunId],
          15,
          2
        );

        $this->assertGreaterThan(0, $file->getSize());
    }
}

?>
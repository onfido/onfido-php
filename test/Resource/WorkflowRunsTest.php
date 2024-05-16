<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WorkflowRun as WorkflowRun;
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
      $this->assertSame(WorkflowRun::STATUS_AWAITING_INPUT, $this->workflowRun->getStatus());
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
      $this->assertSame(WorkflowRun::STATUS_APPROVED, $workflowRun->getStatus());
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
        $file = self::$onfido->downloadSignedEvidenceFile($this->workflowRun->getId());
        $this->assertGreaterThan(0, $file->getSize());
    }
}

?>
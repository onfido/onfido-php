<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WorkflowRunBuilder as WorkflowRunBuilder;

class AdvancedElectronicSignatureTest extends OnfidoTestCase
{
    public function testDownloadAesDocument(): void
    {
        $applicantId = $this->createApplicant()->getId();

        $workflowRunBuilder = new WorkflowRunBuilder([
          'applicant_id' => $applicantId,
          'workflow_id' => '9554c27e-9886-4052-992d-816467d97d24',
          'custom_data' => [
            'doc_result' => 'clear',
            'face_result' => 'clear',
            'transaction_id' => '995bf84c-d708-4977-8b88-d4b66bebdaf6',
          ]
        ]);
        $workflowRun = $this->createWorkflowRun($workflowRunBuilder);

        $task = self::$onfido->listTasks($workflowRun["id"])[1];
        $workflowRunId = $workflowRun["id"];
        $taskId = $task->getId();

        $findTaskFn = function($workflowRunId, $taskId) {
          return self::$onfido->findTask($workflowRunId, $taskId);
        };

        $output = $this->repeatRequestUntilTaskOutputChanges(
          $findTaskFn,
          [$workflowRunId, $taskId],
          10,
          3,
        )["output"];

        $signedDocumentId = $output["properties"]->{'signed_documents'}[0]->{"id"};
        $transactionReceiptId = $output["properties"]->{'receipt_document'}->{"id"};

        $signedDocument = self::$onfido->downloadAesDocument($workflowRun->getId(), $signedDocumentId);
        $this->assertGreaterThan(0, $signedDocument->getSize());

        $transactionReceipt = self::$onfido->downloadAesDocument($workflowRun->getId(), $transactionReceiptId);
        $this->assertGreaterThan(0, $transactionReceipt->getSize());
    }
}

?>

<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\WorkflowRunBuilder as WorkflowRunBuilder;

class QualifiedElectronicSignatureTest extends OnfidoTestCase
{
		public function testDownloadQesDocument(): void
    {
        $applicantId = $this->createApplicant()->getId();

        $workflowRunBuilder = new WorkflowRunBuilder([
          'applicant_id' => $applicantId,
          'workflow_id' => '8b74614f-9e7f-42fd-852a-5f2bcc852587',
          'custom_data' => [
            'country_of_operation' => 'GBR',
            'document_date_of_expiry' => '2022-01-01',
            'document_issuing_country' => 'FRA',
            'document_issuing_date' => '2022-01-01',
            'document_number' => 'Example string',
            'document_to_sign_url' => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
            'document_type' => 'driving_licence',
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

				$fileId = $output["properties"]->{'signed_documents'}[0]->{"id"};

        $file = self::$onfido->downloadQesDocument($workflowRun->getId(), $fileId);
        $this->assertGreaterThan(0, $file->getSize());
    }
}

?>
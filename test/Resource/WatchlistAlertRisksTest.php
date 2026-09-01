<?php

namespace Onfido\Test\Resource;

use DateTime as DateTime;
use Onfido\Model\Address as Address;
use Onfido\Model\ApplicantBuilder as ApplicantBuilder;
use Onfido\Model\WatchlistMeshAlertRisk as WatchlistMeshAlertRisk;
use Onfido\Model\WorkflowRunBuilder as WorkflowRunBuilder;
use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

class WatchlistAlertRisksTest extends OnfidoTestCase
{
    public function testListWatchlistMeshAlertRisks(): void
    {
        $applicant = self::$onfido->createApplicant(
            new ApplicantBuilder([
                'first_name' => 'Donald',
                'last_name' => 'Consider',
                'dob' => new DateTime('1990-01-01'),
                'address' => new Address([
                    'country' => 'PRT',
                    'town' => 'Town',
                    'street' => 'Street',
                    'building_number' => '12',
                    'postcode' => '12345'
                ])
            ])
        );
        $workflowRun = $this->createWorkflowRun(
            new WorkflowRunBuilder([
                'applicant_id' => $applicant->getId(),
                'workflow_id' => '18effbfe-73c3-4680-ae43-e1c474767ff4',
                'custom_data' => [
                    'national_id' => [
                        'type' => 'passport',
                        'value' => 'P1234567'
                    ],
                    'nationality' => 'PRT'
                ]
            ])
        );
        $tasks = self::$onfido->listTasks($workflowRun->getId());
        $task = null;

        foreach ($tasks as $workflowTask) {
            if ($workflowTask->getTaskDefId() === 'query_watchlists_complyadvantage_mesh') {
                $task = $workflowTask;
                break;
            }
        }

        $this->assertNotNull($task);

        $findTaskFn = function($workflowRunId, $taskId) {
            return self::$onfido->findTask($workflowRunId, $taskId);
        };
        $watchlistTask = $this->repeatRequestUntilTaskOutputChanges(
            $findTaskFn,
            [$workflowRun->getId(), $task->getId()],
            30,
            2
        );
        $alertIdentifier = $watchlistTask->getOutput()['properties']->alert_identifier;

        $this->assertNotNull($alertIdentifier);

        $risks = self::$onfido->listWatchlistMeshAlertRisks($alertIdentifier, 1, 1);

        $this->assertGreaterThan(0, count($risks));
        $this->assertLessThanOrEqual(1, count($risks));
        $this->assertInstanceOf(WatchlistMeshAlertRisk::class, $risks[0]);
        $this->assertNotNull($risks[0]->getIdentifier());
        $this->assertNotNull($risks[0]->getDecision());
        $this->assertNotNull($risks[0]->getDetail());
    }
}

?>

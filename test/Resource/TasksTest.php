<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\Model\CompleteTaskBuilder as CompleteTaskBuilder;


class TasksTest extends OnfidoTestCase
{
    private $workflowRunId;

    public function setUp(): void
    {
        $applicantId = $this->createApplicant()->getId();
        $workflowId = 'e8c921eb-0495-44fe-b655-bcdcaffdafe5';
        $this->workflowRunId = $this->createWorkflowRun(null, $applicantId, $workflowId)->getId();
    }

    public function testListTasks(): void
    {
        $listOfTasks = self::$onfido->listTasks($this->workflowRunId);
        $this->assertGreaterThan(0, sizeOf($listOfTasks));
    }

    public function testFindTask(): void
    {
        $task = self::$onfido->listTasks($this->workflowRunId)[0];
        $getTask = self::$onfido->findTask($this->workflowRunId, $task->getId());

        $this->assertSame($task->getId(), $getTask->getId());
        $this->assertSame($task->getTaskDefId(), $getTask->getTaskDefId());
    }

    public function testCompleteTask(): void
    {
        $tasks = self::$onfido->listTasks($this->workflowRunId);
        $profileDataTaskId = $this->getTaskIdByPartialId($tasks, 'profile');

        $completeTaskBuilder = new CompleteTaskBuilder(['data' => [
            'first_name' => 'Jane',
            'last_name' => 'Doe'
        ]]);

        self::$onfido->completeTask($this->workflowRunId, $profileDataTaskId, $completeTaskBuilder);
        $taskOutputs = self::$onfido->findTask($this->workflowRunId, $profileDataTaskId)
            ->getOutput();
        
        $this->assertSame('Jane', $taskOutputs['first_name']);
        $this->assertSame('Doe', $taskOutputs['last_name']);
    }
}

?>

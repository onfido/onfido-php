<?php

namespace Onfido\Test;

use PHPUnit\Framework\TestCase;

use Onfido as Onfido;

class StudioWebhookEventVerifierTest extends TestCase
{
    private static $rawEvent = "{\"payload\":{\"resource_type\":\"workflow_task\",\"action\":\"workflow_task.started\",\"object\":{\"id\":\"profile_1eb92\",\"task_spec_id\":\"profile_1eb92\",\"task_def_id\":\"profile_data\",\"workflow_run_id\":\"bc77c6e5-753a-4580-96a6-aaed3e5a8d19\",\"status\":\"started\",\"started_at_iso8601\":\"2024-07-10T12:49:09Z\",\"href\":\"https://api.eu.onfido.com/v3.6/workflow_runs/bc77c6e5-753a-4580-96a6-aaed3e5a8d19/tasks/profile_1eb92\"},\"resource\":{\"created_at\":\"2024-07-10T12:49:09Z\",\"id\":\"profile_1eb92\",\"workflow_run_id\":\"bc77c6e5-753a-4580-96a6-aaed3e5a8d19\",\"updated_at\":\"2024-07-10T12:49:09Z\",\"input\":{},\"task_def_version\":null,\"task_def_id\":\"profile_data\",\"output\":null}}}";
    private static $webhookToken = "YKOC6mkBxi6yK2zlUIrLMvsJMFEZObP5";

    private static $webhookEventVerifier;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
        self::$webhookEventVerifier = new Onfido\WebhookEventVerifier(self::$webhookToken);
    }

    public function testValidSignature(): void
    {
        $signature = "c95a5b785484f6fa1bc25f381b5595d66bf85cb442eefb06aa007802ee6a4dfa";

        $event = self::$webhookEventVerifier->readPayload(self::$rawEvent, $signature);
        $payload = $event->getPayload();
        $object = $payload->getObject();

        $this->assertSame(Onfido\Model\WebhookEventType::WORKFLOW_TASK_STARTED, $payload->getAction());
        $this->assertSame(Onfido\Model\WebhookEventResourceType::WORKFLOW_TASK, $payload->getResourceType());
        $this->assertSame('profile_1eb92', $object->getId());
        $this->assertSame('https://api.eu.onfido.com/v3.6/workflow_runs/bc77c6e5-753a-4580-96a6-aaed3e5a8d19/tasks/profile_1eb92', $object->getHref());
        $this->assertSame(Onfido\Model\WebhookEventObjectStatus::STARTED, $object->getStatus());
        $this->assertSame('2024-07-10T12:49:09+00:00', $object->getStartedAtIso8601()->format('c'));

        $resource = $payload->getResource();
        $this->assertSame('2024-07-10T12:49:09+00:00', $resource->getCreatedAt()->format('c'));
        $this->assertSame('profile_1eb92', $resource->getId());
        $this->assertSame([], $resource->getInput());
        $this->assertSame(null, $resource->getOutput());
        $this->assertSame('profile_data', $resource->getTaskDefId());
        $this->assertSame(null, $resource->getTaskDefVersion());
        $this->assertSame('2024-07-10T12:49:09+00:00', $resource->getUpdatedAt()->format('c'));
        $this->assertSame('bc77c6e5-753a-4580-96a6-aaed3e5a8d19', $resource->getWorkflowRunId());
    }

    public function testInvalidSignature()
    {
        $signature = "c95a5b785484f6fa1bc25f381b5595d66bf85cb442eefb06aa007802ee6a4dfb";

        $this->expectException(Onfido\OnfidoInvalidSignatureError::class);
        $event = self::$webhookEventVerifier->readPayload(self::$rawEvent, $signature);
    }

    public function testWebhookVerificationWithObjectInOuput(): void
    {
        $signature = "e3e5565647f5ccf07b2fd8ac22eab94a0a0619413d981fb768295c820523f7d7";

        $rawEventFromFile = file_get_contents('test/media/studio_webhook_event_with_object_in_output.json');
        $event = self::$webhookEventVerifier->readPayload($rawEventFromFile, $signature);

        $this->assertNotNull($event->getPayload()->getResource()->getOutput()['properties']);
    }


    public function testWebhookVerificationWithListInOuput(): void
    {
        $signature = "f3a5170acfcecf8c1bf6d9cb9995c0d9dec941af83056a721530f8de7af2c293";

        $rawEventFromFile = file_get_contents('test/media/studio_webhook_event_with_list_in_output.json');
        $event = self::$webhookEventVerifier->readPayload($rawEventFromFile, $signature);

        $this->assertNotNull($event->getPayload()->getResource()->getOutput()[0]);
    }

}

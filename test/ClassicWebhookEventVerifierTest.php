<?php

namespace Onfido\Test;

use PHPUnit\Framework\TestCase;

use Onfido as Onfido;

class ClassicWebhookEventVerifierTest extends TestCase
{
    private static $rawEvent = "{\"payload\":{\"resource_type\":\"check\",\"action\":\"check.completed\",\"object\":{\"id\":\"f2302f45-227d-413d-ad61-09ec077a086a\",\"status\":\"complete\",\"completed_at_iso8601\":\"2024-04-04T09:21:21Z\",\"href\":\"https://api.onfido.com/v3.6/checks/f2302f45-227d-413d-ad61-09ec077a086a\"}}}";
    private static $webhookToken = "wU99mE6jJ7nXOLFwZ0tJymM1lpI15pZh";

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
        $signature = "77ebc3e418f26be6eebb47f7ebe551321de26734fc273961e075fc9ab163d9c7";

        $event = self::$webhookEventVerifier->readPayload(self::$rawEvent, $signature);
        $payload = $event->getPayload();
        $object = $payload->getObject();

        $this->assertSame(Onfido\Model\WebhookEventType::CHECK_COMPLETED, $payload->getAction());
        $this->assertSame(Onfido\Model\WebhookEventResourceType::CHECK, $payload->getResourceType());
        $this->assertSame('f2302f45-227d-413d-ad61-09ec077a086a', $object->getId());
        $this->assertSame('https://api.onfido.com/v3.6/checks/f2302f45-227d-413d-ad61-09ec077a086a', $object->getHref());
        $this->assertSame(Onfido\Model\WebhookEventObjectStatus::COMPLETE, $object->getStatus());
        $this->assertSame('2024-04-04T09:21:21+00:00', $object->getCompletedAtIso8601()->format('c'));
    }

    public function testInvalidSignature()
    {
        $signature = "77ebc3e418f26be6eebb47f7ebe551321de26734fc273961e075fc9ab163d9c8";

        $this->expectException(Onfido\OnfidoInvalidSignatureError::class);
        $event = self::$webhookEventVerifier->readPayload(self::$rawEvent, $signature);
    }
}

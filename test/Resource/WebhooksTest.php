<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;
use Onfido\ApiException as ApiException;
use Onfido\Model\WebhookBuilder as WebhookBuilder;
use Onfido\Model\WebhookUpdater as WebhookUpdater;

class WebhooksTest extends OnfidoTestCase
{
    private $webhook;
    private $webhookId;

    public function setUp(): void
    {
        $webhookBuilder = new WebhookBuilder([
            'url' => 'https://example.com',
            'events' => ['check.completed', 'report.completed']
        ]);

        $this->webhook = self::$onfido->createWebhook($webhookBuilder);
        $this->webhookId = $this->webhook->getId();
    }

    public function testCreateWebhook(): void
    {
        $this->assertNotNull($this->webhookId);
        $this->assertSame('https://example.com', $this->webhook->getUrl());
        $this->assertSame(
            ['check.completed', 'report.completed'], 
            $this->webhook->getEvents()
        );
    }

    public function testUpdateWebhook(): void
    {
        $webhookUpdater = new WebhookUpdater([
            'url' => 'https://example.co.uk',
            'events' => ['check.completed']
        ]);
        $updatedWebhook = self::$onfido->updateWebhook(
            $this->webhookId, $webhookUpdater
        );

        $this->assertSame($this->webhookId, $updatedWebhook->getId());
        $this->assertSame('https://example.co.uk', $updatedWebhook->getUrl());
        $this->assertSame(['check.completed'], $updatedWebhook->getEvents());
    }

    public function testListWebhooks(): void
    {
        $listOfWebhooks = self::$onfido->listWebhooks()->getWebhooks();
        $this->assertGreaterThan(0, sizeOf($listOfWebhooks));
    }

    public function testFindWebhook(): void
    {
        $getWebhook = self::$onfido->findWebhook($this->webhookId);
        $this->assertSame($this->webhookId, $getWebhook->getId());
    }

    public function testDeleteWebhook(): void
    {
        self::$onfido->deleteWebhook($this->webhookId);

        $this->expectException(ApiException::class);
        self::$onfido->findWebhook($this->webhookId);
    }
}

?>
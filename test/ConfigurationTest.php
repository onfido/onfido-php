<?php

namespace Onfido\Test;

use PHPUnit\Framework\TestCase;

use DateTime as DateTime;
use Onfido as Onfido;

class ConfigurationTest extends TestCase
{
    private $configuration;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->configuration = new Onfido\Configuration();
    }

    public function testAuthorizationHeader()
    {
        $this->configuration->setApiToken('api_token');

        $this->assertSame('Token token=api_token', $this->configuration->getApiKey('Authorization'));
    }

    public function testUserAgent()
    {
        $this->assertMatchesRegularExpression('/^onfido-php\/\d+\.\d+\.\d+$/', $this->configuration->getUserAgent());
    }

    public function testEuRegion()
    {
        $this->configuration->setRegion(Onfido\Region::EU);

        $this->assertSame('https://api.eu.onfido.com/v3.6', $this->configuration->getHost());
    }

    public function testUsRegion()
    {
        $this->configuration->setRegion(Onfido\Region::US);

        $this->assertSame('https://api.us.onfido.com/v3.6', $this->configuration->getHost());
    }

    public function testCaRegion()
    {
        $this->configuration->setRegion(Onfido\Region::CA);

        $this->assertSame('https://api.ca.onfido.com/v3.6', $this->configuration->getHost());
    }

    public function testDefaultRegion()
    {
        $this->assertSame('https://api.eu.onfido.com/v3.6', $this->configuration->getHost());
    }
}

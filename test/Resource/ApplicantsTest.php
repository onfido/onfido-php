<?php

namespace Onfido\Test\Resource;

use Onfido\Test\OnfidoTestCase as OnfidoTestCase;

use Onfido as Onfido;

/**
 * ApplicantBuilderTest Class Doc Comment
 *
 * @category    Class
 * @description ApplicantBuilder
 * @package     Onfido
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ApplicantTest extends OnfidoTestCase
{
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Test "create_applicant" operation
     */
    public function testCreateApplicant()
    {
        $applicant = $this->createApplicant();

        $this->assertSame('Test', $applicant->getFirstName());
        $this->assertSame('Applicant', $applicant->getLastName());
        $this->assertSame('1980-01-22', $applicant->getDob()->format('Y-m-d'));
        $this->assertSame('127.0.0.1', $applicant->getLocation()->getIpAddress());
        $this->assertSame('DEU', $applicant->getLocation()->getCountryOfResidence());

        $address = $applicant->getAddress();

        $this->assertSame('100', $address->getBuildingNumber());
        $this->assertSame('Main Street', $address->getStreet());
        $this->assertSame('London', $address->getTown());
        $this->assertSame('SW4 6EH', $address->getPostCode());
        $this->assertSame(Onfido\Model\CountryCodes::GBR, $address->getCountry());
        $this->assertSame('My wonderful address', $address->getLine1());
    }
}

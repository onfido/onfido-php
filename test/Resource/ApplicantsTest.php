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
class ApplicantsTest extends OnfidoTestCase
{
    private $applicant;
    private $applicantId;
    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->applicant = $this->createApplicant();
        $this->applicantId = $this->applicant->getId();
    }

    /**
     * Test "create_applicant" operation
     */
    public function testCreateApplicant()
    {
        $this->assertSame('Test', $this->applicant->getFirstName());
        $this->assertSame('Applicant', $this->applicant->getLastName());
        $this->assertSame('1980-01-22', $this->applicant->getDob()->format('Y-m-d'));
        $this->assertSame('127.0.0.1', $this->applicant->getLocation()->getIpAddress());
        $this->assertSame('DEU', $this->applicant->getLocation()->getCountryOfResidence());

        $address = $this->applicant->getAddress();

        $this->assertSame('100', $address->getBuildingNumber());
        $this->assertSame('Main Street', $address->getStreet());
        $this->assertSame('London', $address->getTown());
        $this->assertSame('SW4 6EH', $address->getPostCode());
        $this->assertSame(Onfido\Model\CountryCodes::GBR, $address->getCountry());
        $this->assertSame('My wonderful address', $address->getLine1());
    }

    public function testListApplicants()
    {
        $listOfApplicants = self::$onfido->listApplicants()->getApplicants();
        $this->assertGreaterThan(0, sizeOf($listOfApplicants));
    }

    public function testFindApplicant()
    {
        $getApplicant = self::$onfido->findApplicant($this->applicantId);

        $this->assertSame($this->applicantId, $getApplicant->getId());
    }

    public function testUpdateApplicant()
    {
        $updatedApplicantData = new Onfido\Model\ApplicantUpdater([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
        ]);
        $updatedApplicant = self::$onfido->updateApplicant($this->applicantId, $updatedApplicantData);
        $this->assertSame('Jane', $updatedApplicant->getFirstName());
        $this->assertSame('Doe', $updatedApplicant->getLastName());
    }

    public function testFindApplicantConsents()
    {
        $expectedConsents = [
            new Onfido\Model\ApplicantConsentBuilder([
                'name' => Onfido\Model\ApplicantConsentName::PHONE_NUMBER_VERIFICATION,
                'granted' => true
            ]),
            new Onfido\Model\ApplicantConsentBuilder([
                'name' => Onfido\Model\ApplicantConsentName::PRIVACY_NOTICES_READ,
                'granted' => true
            ]),
            new Onfido\Model\ApplicantConsentBuilder([
                'name' => Onfido\Model\ApplicantConsentName::SSN_VERIFICATION,
                'granted' => true
            ])
        ];

        $updatedApplicantData = new Onfido\Model\ApplicantUpdater([
            'consents' => $expectedConsents
        ]);

        self::$onfido->updateApplicant($this->applicantId, $updatedApplicantData);

        $actualConsents = self::$onfido->findApplicantConsents($this->applicantId);

        for ($i = 0; $i < count($expectedConsents); $i++) {
            $this->assertEquals($expectedConsents[$i]->getName(), $actualConsents[$i]->getName());
            $this->assertEquals($expectedConsents[$i]->getGranted(), $actualConsents[$i]->getGranted());
        }
    }

    public function testDeleteApplicant()
    {
        self::$onfido->deleteApplicant($this->applicantId);

        $this->expectException(Onfido\ApiException::class);
        self::$onfido->findApplicant($this->applicantId);
    }

    public function testRestoreDeleteApplicant()
    {
        self::$onfido->deleteApplicant($this->applicantId);
        self::$onfido->restoreApplicant($this->applicantId);
        $getApplicant = self::$onfido->findApplicant($this->applicantId);

        $this->assertSame($this->applicantId, $getApplicant->getId());
    }
}

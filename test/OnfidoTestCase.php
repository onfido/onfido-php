<?php

namespace Onfido\Test;

use PHPUnit\Framework\TestCase;

use DateTime as DateTime;
use Onfido as Onfido;

abstract class OnfidoTestCase extends TestCase
{
    protected static $onfido;
    protected static $sampleapplicant_id;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
        self::$onfido = new Onfido\Api\DefaultApi(
            new \GuzzleHttp\Client([
                'timeout'  => 30,
                'connect_timeout' => 30,
                'read_timeout' => 30
            ]),
            Onfido\Configuration::getDefaultConfiguration()
                ->setApiToken(getenv('ONFIDO_API_TOKEN'))
                ->setRegion(Onfido\Region::EU)
        );

        self::$sampleapplicant_id = getenv('ONFIDO_SAMPLE_APPLICANT_ID');
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
        self::cleanUpApplicants();
    }

    protected function createApplicant(): Onfido\Model\Applicant
    {
        return self::$onfido->createApplicant(
            new Onfido\Model\ApplicantBuilder(
                [
                    'first_name' => 'Test',
                    'last_name' => 'Applicant',
                    'dob' => new DateTime("1980-01-22"),
                    'location' => new Onfido\Model\Location([
                        'ip_address' => '127.0.0.1',
                        'country_of_residence' => Onfido\Model\CountryCodes::DEU
                    ]),
                    'address' => new Onfido\Model\Address([
                        'building_number' => '100',
                        'street' => 'Main Street',
                        'town' => 'London',
                        'postcode' => 'SW4 6EH',
                        'country' => Onfido\Model\CountryCodes::GBR,
                        'line1' => 'My wonderful address'])
                    ])
                );
    }

    protected static function cleanUpApplicants(): void
    {
        if ( strlen(self::$sampleapplicant_id) != 36 )
            return;

        $applicants = self::$onfido->listApplicants()->getApplicants();

        foreach($applicants as $applicant)
        {
            if ( $applicant->getId() != self::$sampleapplicant_id)
            {
                try {
                    self::$onfido->deleteApplicant($applicant->getId());
                }
                catch (\Onfido\ApiException $ex) {
                    // Only ignore "Applicants with checks in progress cannot be deleted." error
                    if( ! str_contains($ex->getResponseBody(), 'deletion_incomplete_checks') )
                    {
                        throw $ex;
                    }
                }
            }
        }
    }
}

?>
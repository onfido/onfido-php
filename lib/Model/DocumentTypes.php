<?php
/**
 * DocumentTypes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API v3.6
 *
 * The Onfido API (v3.6)
 *
 * The version of the OpenAPI document: v3.6
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;
use \Onfido\ObjectSerializer;

/**
 * DocumentTypes Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentTypes
{
    /**
     * Possible values of this enum
     */
    public const PASSPORT = 'passport';

    public const DRIVING_LICENCE = 'driving_licence';

    public const NATIONAL_IDENTITY_CARD = 'national_identity_card';

    public const RESIDENCE_PERMIT = 'residence_permit';

    public const PASSPORT_CARD = 'passport_card';

    public const TAX_ID = 'tax_id';

    public const VISA = 'visa';

    public const VOTER_ID = 'voter_id';

    public const RESIDENCE_STATUS_DOCUMENT = 'residence_status_document';

    public const POSTAL_IDENTITY_CARD = 'postal_identity_card';

    public const SOCIAL_SECURITY_CARD = 'social_security_card';

    public const WORK_PERMIT = 'work_permit';

    public const ASYLUM_REGISTRATION_CARD = 'asylum_registration_card';

    public const NATIONAL_HEALTH_INSURANCE_CARD = 'national_health_insurance_card';

    public const MUNICIPALITY_IDENTITY_CARD = 'municipality_identity_card';

    public const PRIVATE_OPERATORS_CARD = 'private_operators_card';

    public const PROOF_OF_CITIZENSHIP = 'proof_of_citizenship';

    public const SERVICE_ID_CARD = 'service_id_card';

    public const IMMIGRATION_STATUS_DOCUMENT = 'immigration_status_document';

    public const INDIGENOUS_CARD = 'indigenous_card';

    public const VEHICLE_REGISTRATION_CARD = 'vehicle_registration_card';

    public const CERTIFICATE_OF_NATURALISATION = 'certificate_of_naturalisation';

    public const PROFESSIONAL_QUALIFICATION_CARD = 'professional_qualification_card';

    public const CONSULAR_ID = 'consular_id';

    public const INTERNATIONAL_DRIVING_LICENCE = 'international_driving_licence';

    public const HOME_OFFICE_LETTER = 'home_office_letter';

    public const BIRTH_CERTIFICATE = 'birth_certificate';

    public const VEHICLE_REGISTRATION_CERTIFICATE = 'vehicle_registration_certificate';

    public const FORM_FOR_AFFIXING_THE_VISA = 'form_for_affixing_the_visa';

    public const IDENTIFICATION_NUMBER_DOCUMENT = 'identification_number_document';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PASSPORT,
            self::DRIVING_LICENCE,
            self::NATIONAL_IDENTITY_CARD,
            self::RESIDENCE_PERMIT,
            self::PASSPORT_CARD,
            self::TAX_ID,
            self::VISA,
            self::VOTER_ID,
            self::RESIDENCE_STATUS_DOCUMENT,
            self::POSTAL_IDENTITY_CARD,
            self::SOCIAL_SECURITY_CARD,
            self::WORK_PERMIT,
            self::ASYLUM_REGISTRATION_CARD,
            self::NATIONAL_HEALTH_INSURANCE_CARD,
            self::MUNICIPALITY_IDENTITY_CARD,
            self::PRIVATE_OPERATORS_CARD,
            self::PROOF_OF_CITIZENSHIP,
            self::SERVICE_ID_CARD,
            self::IMMIGRATION_STATUS_DOCUMENT,
            self::INDIGENOUS_CARD,
            self::VEHICLE_REGISTRATION_CARD,
            self::CERTIFICATE_OF_NATURALISATION,
            self::PROFESSIONAL_QUALIFICATION_CARD,
            self::CONSULAR_ID,
            self::INTERNATIONAL_DRIVING_LICENCE,
            self::HOME_OFFICE_LETTER,
            self::BIRTH_CERTIFICATE,
            self::VEHICLE_REGISTRATION_CERTIFICATE,
            self::FORM_FOR_AFFIXING_THE_VISA,
            self::IDENTIFICATION_NUMBER_DOCUMENT,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}



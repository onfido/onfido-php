<?php
/**
 * ApplicantConsentName
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
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;
use \Onfido\ObjectSerializer;

/**
 * ApplicantConsentName Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicantConsentName
{
    /**
     * Possible values of this enum
     */
    public const PRIVACY_NOTICES_READ = 'privacy_notices_read';

    public const SSN_VERIFICATION = 'ssn_verification';

    public const PHONE_NUMBER_VERIFICATION = 'phone_number_verification';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRIVACY_NOTICES_READ,
            self::SSN_VERIFICATION,
            self::PHONE_NUMBER_VERIFICATION,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}



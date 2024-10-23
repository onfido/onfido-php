<?php
/**
 * ReportName
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
 * ReportName Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportName
{
    /**
     * Possible values of this enum
     */
    public const DOCUMENT = 'document';

    public const DOCUMENT_VIDEO = 'document_video';

    public const DOCUMENT_VIDEO_WITH_ADDRESS_INFORMATION = 'document_video_with_address_information';

    public const DOCUMENT_WITH_ADDRESS_INFORMATION = 'document_with_address_information';

    public const DOCUMENT_WITH_DRIVING_LICENCE_INFORMATION = 'document_with_driving_licence_information';

    public const DOCUMENT_WITH_DRIVER_VERIFICATION = 'document_with_driver_verification';

    public const FACIAL_SIMILARITY_PHOTO = 'facial_similarity_photo';

    public const FACIAL_SIMILARITY_PHOTO_FULLY_AUTO = 'facial_similarity_photo_fully_auto';

    public const FACIAL_SIMILARITY_VIDEO = 'facial_similarity_video';

    public const FACIAL_SIMILARITY_MOTION = 'facial_similarity_motion';

    public const KNOWN_FACES = 'known_faces';

    public const IDENTITY_ENHANCED = 'identity_enhanced';

    public const WATCHLIST_AML = 'watchlist_aml';

    public const WATCHLIST_ENHANCED = 'watchlist_enhanced';

    public const WATCHLIST_STANDARD = 'watchlist_standard';

    public const WATCHLIST_PEPS_ONLY = 'watchlist_peps_only';

    public const WATCHLIST_SANCTIONS_ONLY = 'watchlist_sanctions_only';

    public const PROOF_OF_ADDRESS = 'proof_of_address';

    public const US_DRIVING_LICENCE = 'us_driving_licence';

    public const DEVICE_INTELLIGENCE = 'device_intelligence';

    public const INDIA_PAN = 'india_pan';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOCUMENT,
            self::DOCUMENT_VIDEO,
            self::DOCUMENT_VIDEO_WITH_ADDRESS_INFORMATION,
            self::DOCUMENT_WITH_ADDRESS_INFORMATION,
            self::DOCUMENT_WITH_DRIVING_LICENCE_INFORMATION,
            self::DOCUMENT_WITH_DRIVER_VERIFICATION,
            self::FACIAL_SIMILARITY_PHOTO,
            self::FACIAL_SIMILARITY_PHOTO_FULLY_AUTO,
            self::FACIAL_SIMILARITY_VIDEO,
            self::FACIAL_SIMILARITY_MOTION,
            self::KNOWN_FACES,
            self::IDENTITY_ENHANCED,
            self::WATCHLIST_AML,
            self::WATCHLIST_ENHANCED,
            self::WATCHLIST_STANDARD,
            self::WATCHLIST_PEPS_ONLY,
            self::WATCHLIST_SANCTIONS_ONLY,
            self::PROOF_OF_ADDRESS,
            self::US_DRIVING_LICENCE,
            self::DEVICE_INTELLIGENCE,
            self::INDIA_PAN,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}



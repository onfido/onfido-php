<?php
/**
 * WebhookEventResourceType
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
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;
use \Onfido\ObjectSerializer;

/**
 * WebhookEventResourceType Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookEventResourceType
{
    /**
     * Possible values of this enum
     */
    public const CHECK = 'check';

    public const REPORT = 'report';

    public const AUDIT_LOG = 'audit_log';

    public const WORKFLOW_RUN = 'workflow_run';

    public const WORKFLOW_TASK = 'workflow_task';

    public const WATCHLIST_MONITOR = 'watchlist_monitor';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHECK,
            self::REPORT,
            self::AUDIT_LOG,
            self::WORKFLOW_RUN,
            self::WORKFLOW_TASK,
            self::WATCHLIST_MONITOR,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}


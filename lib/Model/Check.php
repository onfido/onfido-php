<?php
/**
 * Check
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

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * Check Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Check implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'check';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'webhook_ids' => 'string[]',
        'applicant_id' => 'string',
        'applicant_provides_data' => 'bool',
        'tags' => 'string[]',
        'redirect_uri' => 'string',
        'privacy_notices_read_consent_given' => 'bool',
        'id' => 'string',
        'created_at' => '\DateTime',
        'href' => 'string',
        'status' => '\Onfido\Model\CheckStatus',
        'result' => 'string',
        'form_uri' => 'string',
        'results_uri' => 'string',
        'report_ids' => 'string[]',
        'sandbox' => 'bool',
        'paused' => 'bool',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'webhook_ids' => null,
        'applicant_id' => 'uuid',
        'applicant_provides_data' => null,
        'tags' => null,
        'redirect_uri' => null,
        'privacy_notices_read_consent_given' => null,
        'id' => 'uuid',
        'created_at' => 'date-time',
        'href' => null,
        'status' => null,
        'result' => null,
        'form_uri' => null,
        'results_uri' => null,
        'report_ids' => 'uuid',
        'sandbox' => null,
        'paused' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'webhook_ids' => false,
        'applicant_id' => false,
        'applicant_provides_data' => false,
        'tags' => false,
        'redirect_uri' => false,
        'privacy_notices_read_consent_given' => false,
        'id' => false,
        'created_at' => false,
        'href' => false,
        'status' => false,
        'result' => false,
        'form_uri' => false,
        'results_uri' => false,
        'report_ids' => false,
        'sandbox' => false,
        'paused' => false,
        'version' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'webhook_ids' => 'webhook_ids',
        'applicant_id' => 'applicant_id',
        'applicant_provides_data' => 'applicant_provides_data',
        'tags' => 'tags',
        'redirect_uri' => 'redirect_uri',
        'privacy_notices_read_consent_given' => 'privacy_notices_read_consent_given',
        'id' => 'id',
        'created_at' => 'created_at',
        'href' => 'href',
        'status' => 'status',
        'result' => 'result',
        'form_uri' => 'form_uri',
        'results_uri' => 'results_uri',
        'report_ids' => 'report_ids',
        'sandbox' => 'sandbox',
        'paused' => 'paused',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhook_ids' => 'setWebhookIds',
        'applicant_id' => 'setApplicantId',
        'applicant_provides_data' => 'setApplicantProvidesData',
        'tags' => 'setTags',
        'redirect_uri' => 'setRedirectUri',
        'privacy_notices_read_consent_given' => 'setPrivacyNoticesReadConsentGiven',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'href' => 'setHref',
        'status' => 'setStatus',
        'result' => 'setResult',
        'form_uri' => 'setFormUri',
        'results_uri' => 'setResultsUri',
        'report_ids' => 'setReportIds',
        'sandbox' => 'setSandbox',
        'paused' => 'setPaused',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhook_ids' => 'getWebhookIds',
        'applicant_id' => 'getApplicantId',
        'applicant_provides_data' => 'getApplicantProvidesData',
        'tags' => 'getTags',
        'redirect_uri' => 'getRedirectUri',
        'privacy_notices_read_consent_given' => 'getPrivacyNoticesReadConsentGiven',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'href' => 'getHref',
        'status' => 'getStatus',
        'result' => 'getResult',
        'form_uri' => 'getFormUri',
        'results_uri' => 'getResultsUri',
        'report_ids' => 'getReportIds',
        'sandbox' => 'getSandbox',
        'paused' => 'getPaused',
        'version' => 'getVersion'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const RESULT_CLEAR = 'clear';
    public const RESULT_CONSIDER = 'consider';
    public const RESULT_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_CLEAR,
            self::RESULT_CONSIDER,
            self::RESULT_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('webhook_ids', $data ?? [], null);
        $this->setIfExists('applicant_id', $data ?? [], null);
        $this->setIfExists('applicant_provides_data', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('redirect_uri', $data ?? [], null);
        $this->setIfExists('privacy_notices_read_consent_given', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('href', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('form_uri', $data ?? [], null);
        $this->setIfExists('results_uri', $data ?? [], null);
        $this->setIfExists('report_ids', $data ?? [], null);
        $this->setIfExists('sandbox', $data ?? [], null);
        $this->setIfExists('paused', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['applicant_id'] === null) {
            $invalidProperties[] = "'applicant_id' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result', must be one of '%s'",
                $this->container['result'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets webhook_ids
     *
     * @return string[]|null
     */
    public function getWebhookIds()
    {
        return $this->container['webhook_ids'];
    }

    /**
     * Sets webhook_ids
     *
     * @param string[]|null $webhook_ids An array of webhook ids describing which webhooks to trigger for this check.
     *
     * @return self
     */
    public function setWebhookIds($webhook_ids)
    {
        if (is_null($webhook_ids)) {
            throw new \InvalidArgumentException('non-nullable webhook_ids cannot be null');
        }
        $this->container['webhook_ids'] = $webhook_ids;

        return $this;
    }

    /**
     * Gets applicant_id
     *
     * @return string
     */
    public function getApplicantId()
    {
        return $this->container['applicant_id'];
    }

    /**
     * Sets applicant_id
     *
     * @param string $applicant_id The ID of the applicant to do the check on.
     *
     * @return self
     */
    public function setApplicantId($applicant_id)
    {
        if (is_null($applicant_id)) {
            throw new \InvalidArgumentException('non-nullable applicant_id cannot be null');
        }
        $this->container['applicant_id'] = $applicant_id;

        return $this;
    }

    /**
     * Gets applicant_provides_data
     *
     * @return bool|null
     */
    public function getApplicantProvidesData()
    {
        return $this->container['applicant_provides_data'];
    }

    /**
     * Sets applicant_provides_data
     *
     * @param bool|null $applicant_provides_data Send an applicant form to applicant to complete to proceed with check. Defaults to false.
     *
     * @return self
     */
    public function setApplicantProvidesData($applicant_provides_data)
    {
        if (is_null($applicant_provides_data)) {
            throw new \InvalidArgumentException('non-nullable applicant_provides_data cannot be null');
        }
        $this->container['applicant_provides_data'] = $applicant_provides_data;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Array of tags being assigned to this check.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri For checks where `applicant_provides_data` is `true`, redirect to this URI when the applicant has submitted their data.
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        if (is_null($redirect_uri)) {
            throw new \InvalidArgumentException('non-nullable redirect_uri cannot be null');
        }
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets privacy_notices_read_consent_given
     *
     * @return bool|null
     */
    public function getPrivacyNoticesReadConsentGiven()
    {
        return $this->container['privacy_notices_read_consent_given'];
    }

    /**
     * Sets privacy_notices_read_consent_given
     *
     * @param bool|null $privacy_notices_read_consent_given privacy_notices_read_consent_given
     *
     * @return self
     */
    public function setPrivacyNoticesReadConsentGiven($privacy_notices_read_consent_given)
    {
        if (is_null($privacy_notices_read_consent_given)) {
            throw new \InvalidArgumentException('non-nullable privacy_notices_read_consent_given cannot be null');
        }
        $this->container['privacy_notices_read_consent_given'] = $privacy_notices_read_consent_given;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier for the check.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this check was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The uri of this resource.
     *
     * @return self
     */
    public function setHref($href)
    {
        if (is_null($href)) {
            throw new \InvalidArgumentException('non-nullable href cannot be null');
        }
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Onfido\Model\CheckStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Onfido\Model\CheckStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result The overall result of the check, based on the results of the constituent reports.
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result', must be one of '%s'",
                    $result,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets form_uri
     *
     * @return string|null
     */
    public function getFormUri()
    {
        return $this->container['form_uri'];
    }

    /**
     * Sets form_uri
     *
     * @param string|null $form_uri A link to the applicant form, if `applicant_provides_data` is `true`.
     *
     * @return self
     */
    public function setFormUri($form_uri)
    {
        if (is_null($form_uri)) {
            throw new \InvalidArgumentException('non-nullable form_uri cannot be null');
        }
        $this->container['form_uri'] = $form_uri;

        return $this;
    }

    /**
     * Gets results_uri
     *
     * @return string|null
     */
    public function getResultsUri()
    {
        return $this->container['results_uri'];
    }

    /**
     * Sets results_uri
     *
     * @param string|null $results_uri A link to the corresponding results page on the Onfido dashboard.
     *
     * @return self
     */
    public function setResultsUri($results_uri)
    {
        if (is_null($results_uri)) {
            throw new \InvalidArgumentException('non-nullable results_uri cannot be null');
        }
        $this->container['results_uri'] = $results_uri;

        return $this;
    }

    /**
     * Gets report_ids
     *
     * @return string[]|null
     */
    public function getReportIds()
    {
        return $this->container['report_ids'];
    }

    /**
     * Sets report_ids
     *
     * @param string[]|null $report_ids An array of report ids.
     *
     * @return self
     */
    public function setReportIds($report_ids)
    {
        if (is_null($report_ids)) {
            throw new \InvalidArgumentException('non-nullable report_ids cannot be null');
        }
        $this->container['report_ids'] = $report_ids;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool|null
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool|null $sandbox Indicates whether the object was created in the sandbox or not.
     *
     * @return self
     */
    public function setSandbox($sandbox)
    {
        if (is_null($sandbox)) {
            throw new \InvalidArgumentException('non-nullable sandbox cannot be null');
        }
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool|null $paused paused
     *
     * @return self
     */
    public function setPaused($paused)
    {
        if (is_null($paused)) {
            throw new \InvalidArgumentException('non-nullable paused cannot be null');
        }
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

}



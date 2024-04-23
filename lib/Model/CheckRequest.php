<?php
/**
 * CheckRequest
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
 * The Onfido API
 *
 * The version of the OpenAPI document: 3.6.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
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
 * CheckRequest Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'check_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_names' => '\Onfido\Model\ReportName[]',
        'document_ids' => 'string[]',
        'applicant_provides_data' => 'bool',
        'asynchronous' => 'bool',
        'suppress_form_emails' => 'bool',
        'sub_result' => 'string',
        'consider' => '\Onfido\Model\ReportName[]',
        'us_driving_licence' => '\Onfido\Model\UsDrivingLicenceBuilder'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_names' => null,
        'document_ids' => 'uuid',
        'applicant_provides_data' => null,
        'asynchronous' => null,
        'suppress_form_emails' => null,
        'sub_result' => null,
        'consider' => null,
        'us_driving_licence' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'report_names' => false,
        'document_ids' => false,
        'applicant_provides_data' => false,
        'asynchronous' => false,
        'suppress_form_emails' => false,
        'sub_result' => false,
        'consider' => false,
        'us_driving_licence' => false
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
        'report_names' => 'report_names',
        'document_ids' => 'document_ids',
        'applicant_provides_data' => 'applicant_provides_data',
        'asynchronous' => 'asynchronous',
        'suppress_form_emails' => 'suppress_form_emails',
        'sub_result' => 'sub_result',
        'consider' => 'consider',
        'us_driving_licence' => 'us_driving_licence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_names' => 'setReportNames',
        'document_ids' => 'setDocumentIds',
        'applicant_provides_data' => 'setApplicantProvidesData',
        'asynchronous' => 'setAsynchronous',
        'suppress_form_emails' => 'setSuppressFormEmails',
        'sub_result' => 'setSubResult',
        'consider' => 'setConsider',
        'us_driving_licence' => 'setUsDrivingLicence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_names' => 'getReportNames',
        'document_ids' => 'getDocumentIds',
        'applicant_provides_data' => 'getApplicantProvidesData',
        'asynchronous' => 'getAsynchronous',
        'suppress_form_emails' => 'getSuppressFormEmails',
        'sub_result' => 'getSubResult',
        'consider' => 'getConsider',
        'us_driving_licence' => 'getUsDrivingLicence'
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
        $this->setIfExists('report_names', $data ?? [], null);
        $this->setIfExists('document_ids', $data ?? [], null);
        $this->setIfExists('applicant_provides_data', $data ?? [], false);
        $this->setIfExists('asynchronous', $data ?? [], true);
        $this->setIfExists('suppress_form_emails', $data ?? [], null);
        $this->setIfExists('sub_result', $data ?? [], null);
        $this->setIfExists('consider', $data ?? [], null);
        $this->setIfExists('us_driving_licence', $data ?? [], null);
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

        if ($this->container['report_names'] === null) {
            $invalidProperties[] = "'report_names' can't be null";
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
     * Gets report_names
     *
     * @return \Onfido\Model\ReportName[]
     */
    public function getReportNames()
    {
        return $this->container['report_names'];
    }

    /**
     * Sets report_names
     *
     * @param \Onfido\Model\ReportName[] $report_names An array of report names (strings).
     *
     * @return self
     */
    public function setReportNames($report_names)
    {
        if (is_null($report_names)) {
            throw new \InvalidArgumentException('non-nullable report_names cannot be null');
        }
        $this->container['report_names'] = $report_names;

        return $this;
    }

    /**
     * Gets document_ids
     *
     * @return string[]|null
     */
    public function getDocumentIds()
    {
        return $this->container['document_ids'];
    }

    /**
     * Sets document_ids
     *
     * @param string[]|null $document_ids Optional. An array of document ids, for use with Document reports only. If omitted, the Document report will use the most recently uploaded document by default.
     *
     * @return self
     */
    public function setDocumentIds($document_ids)
    {
        if (is_null($document_ids)) {
            throw new \InvalidArgumentException('non-nullable document_ids cannot be null');
        }
        $this->container['document_ids'] = $document_ids;

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
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous Defaults to `true`. If set to `false`, you will only receive a response when all reports in your check have completed.
     *
     * @return self
     */
    public function setAsynchronous($asynchronous)
    {
        if (is_null($asynchronous)) {
            throw new \InvalidArgumentException('non-nullable asynchronous cannot be null');
        }
        $this->container['asynchronous'] = $asynchronous;

        return $this;
    }

    /**
     * Gets suppress_form_emails
     *
     * @return bool|null
     */
    public function getSuppressFormEmails()
    {
        return $this->container['suppress_form_emails'];
    }

    /**
     * Sets suppress_form_emails
     *
     * @param bool|null $suppress_form_emails For checks where `applicant_provides_data` is `true`, applicant form will not be automatically sent if `suppress_form_emails` is set to `true`. You can manually send the form at any time after the check has been created, using the link found in the form_uri attribute of the check object. Write-only. Defaults to false.
     *
     * @return self
     */
    public function setSuppressFormEmails($suppress_form_emails)
    {
        if (is_null($suppress_form_emails)) {
            throw new \InvalidArgumentException('non-nullable suppress_form_emails cannot be null');
        }
        $this->container['suppress_form_emails'] = $suppress_form_emails;

        return $this;
    }

    /**
     * Gets sub_result
     *
     * @return string|null
     */
    public function getSubResult()
    {
        return $this->container['sub_result'];
    }

    /**
     * Sets sub_result
     *
     * @param string|null $sub_result Triggers responses for particular sub-results for sandbox Document reports.
     *
     * @return self
     */
    public function setSubResult($sub_result)
    {
        if (is_null($sub_result)) {
            throw new \InvalidArgumentException('non-nullable sub_result cannot be null');
        }
        $this->container['sub_result'] = $sub_result;

        return $this;
    }

    /**
     * Gets consider
     *
     * @return \Onfido\Model\ReportName[]|null
     */
    public function getConsider()
    {
        return $this->container['consider'];
    }

    /**
     * Sets consider
     *
     * @param \Onfido\Model\ReportName[]|null $consider Array of names of particular reports to return consider as their results. This is a feature available in sandbox testing
     *
     * @return self
     */
    public function setConsider($consider)
    {
        if (is_null($consider)) {
            throw new \InvalidArgumentException('non-nullable consider cannot be null');
        }
        $this->container['consider'] = $consider;

        return $this;
    }

    /**
     * Gets us_driving_licence
     *
     * @return \Onfido\Model\UsDrivingLicenceBuilder|null
     */
    public function getUsDrivingLicence()
    {
        return $this->container['us_driving_licence'];
    }

    /**
     * Sets us_driving_licence
     *
     * @param \Onfido\Model\UsDrivingLicenceBuilder|null $us_driving_licence us_driving_licence
     *
     * @return self
     */
    public function setUsDrivingLicence($us_driving_licence)
    {
        if (is_null($us_driving_licence)) {
            throw new \InvalidArgumentException('non-nullable us_driving_licence cannot be null');
        }
        $this->container['us_driving_licence'] = $us_driving_licence;

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



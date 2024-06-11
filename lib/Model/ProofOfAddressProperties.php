<?php
/**
 * ProofOfAddressProperties
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
 * ProofOfAddressProperties Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProofOfAddressProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'proof_of_address_properties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'document_type' => 'string',
        'first_names' => 'string',
        'last_names' => 'string',
        'issue_date' => '\DateTime',
        'issuer' => 'string',
        'summary_period_start' => '\DateTime',
        'summary_period_end' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'document_type' => null,
        'first_names' => null,
        'last_names' => null,
        'issue_date' => 'date',
        'issuer' => null,
        'summary_period_start' => 'date',
        'summary_period_end' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'document_type' => false,
        'first_names' => false,
        'last_names' => false,
        'issue_date' => false,
        'issuer' => false,
        'summary_period_start' => false,
        'summary_period_end' => false
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
        'address' => 'address',
        'document_type' => 'document_type',
        'first_names' => 'first_names',
        'last_names' => 'last_names',
        'issue_date' => 'issue_date',
        'issuer' => 'issuer',
        'summary_period_start' => 'summary_period_start',
        'summary_period_end' => 'summary_period_end'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'document_type' => 'setDocumentType',
        'first_names' => 'setFirstNames',
        'last_names' => 'setLastNames',
        'issue_date' => 'setIssueDate',
        'issuer' => 'setIssuer',
        'summary_period_start' => 'setSummaryPeriodStart',
        'summary_period_end' => 'setSummaryPeriodEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'document_type' => 'getDocumentType',
        'first_names' => 'getFirstNames',
        'last_names' => 'getLastNames',
        'issue_date' => 'getIssueDate',
        'issuer' => 'getIssuer',
        'summary_period_start' => 'getSummaryPeriodStart',
        'summary_period_end' => 'getSummaryPeriodEnd'
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

    public const DOCUMENT_TYPE_BANK_BUILDING_SOCIETY_STATEMENT = 'bank_building_society_statement';
    public const DOCUMENT_TYPE_UTILITY_BILL = 'utility_bill';
    public const DOCUMENT_TYPE_COUNCIL_TAX = 'council_tax';
    public const DOCUMENT_TYPE_BENEFIT_LETTERS = 'benefit_letters';
    public const DOCUMENT_TYPE_MORTGAGE_STATEMENT = 'mortgage_statement';
    public const DOCUMENT_TYPE_MOBILE_PHONE_BILL = 'mobile_phone_bill';
    public const DOCUMENT_TYPE_GENERAL_LETTER = 'general_letter';
    public const DOCUMENT_TYPE_INSURANCE_STATEMENT = 'insurance_statement';
    public const DOCUMENT_TYPE_PENSION_PROPERTY_STATEMENT_LETTER = 'pension_property_statement_letter';
    public const DOCUMENT_TYPE_IDENTITY_DOCUMENT_WITH_ADDRESS = 'identity_document_with_address';
    public const DOCUMENT_TYPE_EXCHANGE_HOUSE_STATEMENT = 'exchange_house_statement';
    public const DOCUMENT_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_BANK_BUILDING_SOCIETY_STATEMENT,
            self::DOCUMENT_TYPE_UTILITY_BILL,
            self::DOCUMENT_TYPE_COUNCIL_TAX,
            self::DOCUMENT_TYPE_BENEFIT_LETTERS,
            self::DOCUMENT_TYPE_MORTGAGE_STATEMENT,
            self::DOCUMENT_TYPE_MOBILE_PHONE_BILL,
            self::DOCUMENT_TYPE_GENERAL_LETTER,
            self::DOCUMENT_TYPE_INSURANCE_STATEMENT,
            self::DOCUMENT_TYPE_PENSION_PROPERTY_STATEMENT_LETTER,
            self::DOCUMENT_TYPE_IDENTITY_DOCUMENT_WITH_ADDRESS,
            self::DOCUMENT_TYPE_EXCHANGE_HOUSE_STATEMENT,
            self::DOCUMENT_TYPE_UNKNOWN_DEFAULT_OPEN_API,
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('first_names', $data ?? [], null);
        $this->setIfExists('last_names', $data ?? [], null);
        $this->setIfExists('issue_date', $data ?? [], null);
        $this->setIfExists('issuer', $data ?? [], null);
        $this->setIfExists('summary_period_start', $data ?? [], null);
        $this->setIfExists('summary_period_end', $data ?? [], null);
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

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'document_type', must be one of '%s'",
                $this->container['document_type'],
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address This property provides the address on the document.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string|null $document_type This property provides the document type according to the set of supported documents.
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_type', must be one of '%s'",
                    $document_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets first_names
     *
     * @return string|null
     */
    public function getFirstNames()
    {
        return $this->container['first_names'];
    }

    /**
     * Sets first_names
     *
     * @param string|null $first_names This property provides the first names on the document, including any initials and middle names.
     *
     * @return self
     */
    public function setFirstNames($first_names)
    {
        if (is_null($first_names)) {
            throw new \InvalidArgumentException('non-nullable first_names cannot be null');
        }
        $this->container['first_names'] = $first_names;

        return $this;
    }

    /**
     * Gets last_names
     *
     * @return string|null
     */
    public function getLastNames()
    {
        return $this->container['last_names'];
    }

    /**
     * Sets last_names
     *
     * @param string|null $last_names This property provided the last names on the document.
     *
     * @return self
     */
    public function setLastNames($last_names)
    {
        if (is_null($last_names)) {
            throw new \InvalidArgumentException('non-nullable last_names cannot be null');
        }
        $this->container['last_names'] = $last_names;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime|null $issue_date This property provides the issue date of the document.
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        if (is_null($issue_date)) {
            throw new \InvalidArgumentException('non-nullable issue_date cannot be null');
        }
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string|null
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string|null $issuer This property provides the document issuer (e.g. HSBC, British Gas).
     *
     * @return self
     */
    public function setIssuer($issuer)
    {
        if (is_null($issuer)) {
            throw new \InvalidArgumentException('non-nullable issuer cannot be null');
        }
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets summary_period_start
     *
     * @return \DateTime|null
     */
    public function getSummaryPeriodStart()
    {
        return $this->container['summary_period_start'];
    }

    /**
     * Sets summary_period_start
     *
     * @param \DateTime|null $summary_period_start This property provides the summary period start date.
     *
     * @return self
     */
    public function setSummaryPeriodStart($summary_period_start)
    {
        if (is_null($summary_period_start)) {
            throw new \InvalidArgumentException('non-nullable summary_period_start cannot be null');
        }
        $this->container['summary_period_start'] = $summary_period_start;

        return $this;
    }

    /**
     * Gets summary_period_end
     *
     * @return \DateTime|null
     */
    public function getSummaryPeriodEnd()
    {
        return $this->container['summary_period_end'];
    }

    /**
     * Sets summary_period_end
     *
     * @param \DateTime|null $summary_period_end This property provides the summary period end date.
     *
     * @return self
     */
    public function setSummaryPeriodEnd($summary_period_end)
    {
        if (is_null($summary_period_end)) {
            throw new \InvalidArgumentException('non-nullable summary_period_end cannot be null');
        }
        $this->container['summary_period_end'] = $summary_period_end;

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



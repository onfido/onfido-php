<?php
/**
 * DocumentPropertiesBarcodeInner
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

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * DocumentPropertiesBarcodeInner Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentPropertiesBarcodeInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'document_properties_barcode_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'document_type' => 'string',
        'date_of_expiry' => '\DateTime',
        'date_of_birth' => '\DateTime',
        'issuing_date' => '\DateTime',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'address_line_3' => 'string',
        'address_line_4' => 'string',
        'address_line_5' => 'string',
        'issuing_state' => 'string',
        'class' => 'string',
        'gender' => 'string',
        'issuing_country' => 'string',
        'document_number' => 'string',
        'real_id_classification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'document_type' => null,
        'date_of_expiry' => 'date',
        'date_of_birth' => 'date',
        'issuing_date' => 'date',
        'address_line_1' => null,
        'address_line_2' => null,
        'address_line_3' => null,
        'address_line_4' => null,
        'address_line_5' => null,
        'issuing_state' => null,
        'class' => null,
        'gender' => null,
        'issuing_country' => null,
        'document_number' => null,
        'real_id_classification' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'middle_name' => false,
        'last_name' => false,
        'document_type' => false,
        'date_of_expiry' => false,
        'date_of_birth' => false,
        'issuing_date' => false,
        'address_line_1' => false,
        'address_line_2' => false,
        'address_line_3' => false,
        'address_line_4' => false,
        'address_line_5' => false,
        'issuing_state' => false,
        'class' => false,
        'gender' => false,
        'issuing_country' => false,
        'document_number' => false,
        'real_id_classification' => false
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
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'document_type' => 'document_type',
        'date_of_expiry' => 'date_of_expiry',
        'date_of_birth' => 'date_of_birth',
        'issuing_date' => 'issuing_date',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'address_line_3' => 'address_line_3',
        'address_line_4' => 'address_line_4',
        'address_line_5' => 'address_line_5',
        'issuing_state' => 'issuing_state',
        'class' => 'class',
        'gender' => 'gender',
        'issuing_country' => 'issuing_country',
        'document_number' => 'document_number',
        'real_id_classification' => 'real_id_classification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'document_type' => 'setDocumentType',
        'date_of_expiry' => 'setDateOfExpiry',
        'date_of_birth' => 'setDateOfBirth',
        'issuing_date' => 'setIssuingDate',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_line_3' => 'setAddressLine3',
        'address_line_4' => 'setAddressLine4',
        'address_line_5' => 'setAddressLine5',
        'issuing_state' => 'setIssuingState',
        'class' => 'setClass',
        'gender' => 'setGender',
        'issuing_country' => 'setIssuingCountry',
        'document_number' => 'setDocumentNumber',
        'real_id_classification' => 'setRealIdClassification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'document_type' => 'getDocumentType',
        'date_of_expiry' => 'getDateOfExpiry',
        'date_of_birth' => 'getDateOfBirth',
        'issuing_date' => 'getIssuingDate',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_line_3' => 'getAddressLine3',
        'address_line_4' => 'getAddressLine4',
        'address_line_5' => 'getAddressLine5',
        'issuing_state' => 'getIssuingState',
        'class' => 'getClass',
        'gender' => 'getGender',
        'issuing_country' => 'getIssuingCountry',
        'document_number' => 'getDocumentNumber',
        'real_id_classification' => 'getRealIdClassification'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('date_of_expiry', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('issuing_date', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('address_line_3', $data ?? [], null);
        $this->setIfExists('address_line_4', $data ?? [], null);
        $this->setIfExists('address_line_5', $data ?? [], null);
        $this->setIfExists('issuing_state', $data ?? [], null);
        $this->setIfExists('class', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('issuing_country', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('real_id_classification', $data ?? [], null);
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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

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
     * @param string|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        if (is_null($document_type)) {
            throw new \InvalidArgumentException('non-nullable document_type cannot be null');
        }
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets date_of_expiry
     *
     * @return \DateTime|null
     */
    public function getDateOfExpiry()
    {
        return $this->container['date_of_expiry'];
    }

    /**
     * Sets date_of_expiry
     *
     * @param \DateTime|null $date_of_expiry date_of_expiry
     *
     * @return self
     */
    public function setDateOfExpiry($date_of_expiry)
    {
        if (is_null($date_of_expiry)) {
            throw new \InvalidArgumentException('non-nullable date_of_expiry cannot be null');
        }
        $this->container['date_of_expiry'] = $date_of_expiry;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets issuing_date
     *
     * @return \DateTime|null
     */
    public function getIssuingDate()
    {
        return $this->container['issuing_date'];
    }

    /**
     * Sets issuing_date
     *
     * @param \DateTime|null $issuing_date issuing_date
     *
     * @return self
     */
    public function setIssuingDate($issuing_date)
    {
        if (is_null($issuing_date)) {
            throw new \InvalidArgumentException('non-nullable issuing_date cannot be null');
        }
        $this->container['issuing_date'] = $issuing_date;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string|null $address_line_1 address_line_1
     *
     * @return self
     */
    public function setAddressLine1($address_line_1)
    {
        if (is_null($address_line_1)) {
            throw new \InvalidArgumentException('non-nullable address_line_1 cannot be null');
        }
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string|null $address_line_2 address_line_2
     *
     * @return self
     */
    public function setAddressLine2($address_line_2)
    {
        if (is_null($address_line_2)) {
            throw new \InvalidArgumentException('non-nullable address_line_2 cannot be null');
        }
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_line_3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['address_line_3'];
    }

    /**
     * Sets address_line_3
     *
     * @param string|null $address_line_3 address_line_3
     *
     * @return self
     */
    public function setAddressLine3($address_line_3)
    {
        if (is_null($address_line_3)) {
            throw new \InvalidArgumentException('non-nullable address_line_3 cannot be null');
        }
        $this->container['address_line_3'] = $address_line_3;

        return $this;
    }

    /**
     * Gets address_line_4
     *
     * @return string|null
     */
    public function getAddressLine4()
    {
        return $this->container['address_line_4'];
    }

    /**
     * Sets address_line_4
     *
     * @param string|null $address_line_4 address_line_4
     *
     * @return self
     */
    public function setAddressLine4($address_line_4)
    {
        if (is_null($address_line_4)) {
            throw new \InvalidArgumentException('non-nullable address_line_4 cannot be null');
        }
        $this->container['address_line_4'] = $address_line_4;

        return $this;
    }

    /**
     * Gets address_line_5
     *
     * @return string|null
     */
    public function getAddressLine5()
    {
        return $this->container['address_line_5'];
    }

    /**
     * Sets address_line_5
     *
     * @param string|null $address_line_5 address_line_5
     *
     * @return self
     */
    public function setAddressLine5($address_line_5)
    {
        if (is_null($address_line_5)) {
            throw new \InvalidArgumentException('non-nullable address_line_5 cannot be null');
        }
        $this->container['address_line_5'] = $address_line_5;

        return $this;
    }

    /**
     * Gets issuing_state
     *
     * @return string|null
     */
    public function getIssuingState()
    {
        return $this->container['issuing_state'];
    }

    /**
     * Sets issuing_state
     *
     * @param string|null $issuing_state issuing_state
     *
     * @return self
     */
    public function setIssuingState($issuing_state)
    {
        if (is_null($issuing_state)) {
            throw new \InvalidArgumentException('non-nullable issuing_state cannot be null');
        }
        $this->container['issuing_state'] = $issuing_state;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string|null $class class
     *
     * @return self
     */
    public function setClass($class)
    {
        if (is_null($class)) {
            throw new \InvalidArgumentException('non-nullable class cannot be null');
        }
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets issuing_country
     *
     * @return string|null
     */
    public function getIssuingCountry()
    {
        return $this->container['issuing_country'];
    }

    /**
     * Sets issuing_country
     *
     * @param string|null $issuing_country issuing_country
     *
     * @return self
     */
    public function setIssuingCountry($issuing_country)
    {
        if (is_null($issuing_country)) {
            throw new \InvalidArgumentException('non-nullable issuing_country cannot be null');
        }
        $this->container['issuing_country'] = $issuing_country;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets real_id_classification
     *
     * @return string|null
     */
    public function getRealIdClassification()
    {
        return $this->container['real_id_classification'];
    }

    /**
     * Sets real_id_classification
     *
     * @param string|null $real_id_classification real_id_classification
     *
     * @return self
     */
    public function setRealIdClassification($real_id_classification)
    {
        if (is_null($real_id_classification)) {
            throw new \InvalidArgumentException('non-nullable real_id_classification cannot be null');
        }
        $this->container['real_id_classification'] = $real_id_classification;

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



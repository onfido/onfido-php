<?php
/**
 * DocumentPropertiesNfc
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
 * Generator version: 7.5.0
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
 * DocumentPropertiesNfc Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentPropertiesNfc implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'document_properties_nfc';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_type' => 'string',
        'issuing_country' => 'string',
        'full_name' => 'string',
        'document_number' => 'string',
        'nationality' => 'string',
        'date_of_birth' => '\DateTime',
        'gender' => 'string',
        'date_of_expiry' => '\DateTime',
        'personal_number' => 'string',
        'place_of_birth' => 'string',
        'address' => 'string',
        'issuing_date' => '\DateTime',
        'issuing_authority' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_type' => null,
        'issuing_country' => null,
        'full_name' => null,
        'document_number' => null,
        'nationality' => null,
        'date_of_birth' => 'date',
        'gender' => null,
        'date_of_expiry' => 'date',
        'personal_number' => null,
        'place_of_birth' => null,
        'address' => null,
        'issuing_date' => 'date',
        'issuing_authority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'document_type' => false,
        'issuing_country' => false,
        'full_name' => false,
        'document_number' => false,
        'nationality' => false,
        'date_of_birth' => false,
        'gender' => false,
        'date_of_expiry' => false,
        'personal_number' => false,
        'place_of_birth' => false,
        'address' => false,
        'issuing_date' => false,
        'issuing_authority' => false
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
        'document_type' => 'document_type',
        'issuing_country' => 'issuing_country',
        'full_name' => 'full_name',
        'document_number' => 'document_number',
        'nationality' => 'nationality',
        'date_of_birth' => 'date_of_birth',
        'gender' => 'gender',
        'date_of_expiry' => 'date_of_expiry',
        'personal_number' => 'personal_number',
        'place_of_birth' => 'place_of_birth',
        'address' => 'address',
        'issuing_date' => 'issuing_date',
        'issuing_authority' => 'issuing_authority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type' => 'setDocumentType',
        'issuing_country' => 'setIssuingCountry',
        'full_name' => 'setFullName',
        'document_number' => 'setDocumentNumber',
        'nationality' => 'setNationality',
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'date_of_expiry' => 'setDateOfExpiry',
        'personal_number' => 'setPersonalNumber',
        'place_of_birth' => 'setPlaceOfBirth',
        'address' => 'setAddress',
        'issuing_date' => 'setIssuingDate',
        'issuing_authority' => 'setIssuingAuthority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type' => 'getDocumentType',
        'issuing_country' => 'getIssuingCountry',
        'full_name' => 'getFullName',
        'document_number' => 'getDocumentNumber',
        'nationality' => 'getNationality',
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'date_of_expiry' => 'getDateOfExpiry',
        'personal_number' => 'getPersonalNumber',
        'place_of_birth' => 'getPlaceOfBirth',
        'address' => 'getAddress',
        'issuing_date' => 'getIssuingDate',
        'issuing_authority' => 'getIssuingAuthority'
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
        $this->setIfExists('document_type', $data ?? [], null);
        $this->setIfExists('issuing_country', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('date_of_expiry', $data ?? [], null);
        $this->setIfExists('personal_number', $data ?? [], null);
        $this->setIfExists('place_of_birth', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('issuing_date', $data ?? [], null);
        $this->setIfExists('issuing_authority', $data ?? [], null);
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
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        if (is_null($full_name)) {
            throw new \InvalidArgumentException('non-nullable full_name cannot be null');
        }
        $this->container['full_name'] = $full_name;

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
     * Gets nationality
     *
     * @return string|null
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string|null $nationality nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        if (is_null($nationality)) {
            throw new \InvalidArgumentException('non-nullable nationality cannot be null');
        }
        $this->container['nationality'] = $nationality;

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
     * Gets personal_number
     *
     * @return string|null
     */
    public function getPersonalNumber()
    {
        return $this->container['personal_number'];
    }

    /**
     * Sets personal_number
     *
     * @param string|null $personal_number personal_number
     *
     * @return self
     */
    public function setPersonalNumber($personal_number)
    {
        if (is_null($personal_number)) {
            throw new \InvalidArgumentException('non-nullable personal_number cannot be null');
        }
        $this->container['personal_number'] = $personal_number;

        return $this;
    }

    /**
     * Gets place_of_birth
     *
     * @return string|null
     */
    public function getPlaceOfBirth()
    {
        return $this->container['place_of_birth'];
    }

    /**
     * Sets place_of_birth
     *
     * @param string|null $place_of_birth place_of_birth
     *
     * @return self
     */
    public function setPlaceOfBirth($place_of_birth)
    {
        if (is_null($place_of_birth)) {
            throw new \InvalidArgumentException('non-nullable place_of_birth cannot be null');
        }
        $this->container['place_of_birth'] = $place_of_birth;

        return $this;
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
     * @param string|null $address address
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
     * Gets issuing_authority
     *
     * @return string|null
     */
    public function getIssuingAuthority()
    {
        return $this->container['issuing_authority'];
    }

    /**
     * Sets issuing_authority
     *
     * @param string|null $issuing_authority issuing_authority
     *
     * @return self
     */
    public function setIssuingAuthority($issuing_authority)
    {
        if (is_null($issuing_authority)) {
            throw new \InvalidArgumentException('non-nullable issuing_authority cannot be null');
        }
        $this->container['issuing_authority'] = $issuing_authority;

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



<?php
/**
 * DocumentPropertiesExtractedData
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

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * DocumentPropertiesExtractedData Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentPropertiesExtractedData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'document_properties_extracted_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_number' => 'string',
        'date_of_birth' => '\DateTime',
        'date_of_expiry' => '\DateTime',
        'first_name' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'full_name' => 'string',
        'spouse_name' => 'string',
        'widow_name' => 'string',
        'alias_name' => 'string',
        'gender' => 'string',
        'mrz_line1' => 'string',
        'mrz_line2' => 'string',
        'mrz_line3' => 'string',
        'nationality' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'address_line_3' => 'string',
        'address_line_4' => 'string',
        'address_line_5' => 'string',
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
        'document_number' => null,
        'date_of_birth' => 'date',
        'date_of_expiry' => 'date',
        'first_name' => null,
        'last_name' => null,
        'middle_name' => null,
        'full_name' => null,
        'spouse_name' => null,
        'widow_name' => null,
        'alias_name' => null,
        'gender' => null,
        'mrz_line1' => null,
        'mrz_line2' => null,
        'mrz_line3' => null,
        'nationality' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'address_line_3' => null,
        'address_line_4' => null,
        'address_line_5' => null,
        'issuing_authority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'document_number' => false,
        'date_of_birth' => false,
        'date_of_expiry' => false,
        'first_name' => false,
        'last_name' => false,
        'middle_name' => false,
        'full_name' => false,
        'spouse_name' => false,
        'widow_name' => false,
        'alias_name' => false,
        'gender' => false,
        'mrz_line1' => false,
        'mrz_line2' => false,
        'mrz_line3' => false,
        'nationality' => false,
        'address_line_1' => false,
        'address_line_2' => false,
        'address_line_3' => false,
        'address_line_4' => false,
        'address_line_5' => false,
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
        'document_number' => 'document_number',
        'date_of_birth' => 'date_of_birth',
        'date_of_expiry' => 'date_of_expiry',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name',
        'full_name' => 'full_name',
        'spouse_name' => 'spouse_name',
        'widow_name' => 'widow_name',
        'alias_name' => 'alias_name',
        'gender' => 'gender',
        'mrz_line1' => 'mrz_line1',
        'mrz_line2' => 'mrz_line2',
        'mrz_line3' => 'mrz_line3',
        'nationality' => 'nationality',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'address_line_3' => 'address_line_3',
        'address_line_4' => 'address_line_4',
        'address_line_5' => 'address_line_5',
        'issuing_authority' => 'issuing_authority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_number' => 'setDocumentNumber',
        'date_of_birth' => 'setDateOfBirth',
        'date_of_expiry' => 'setDateOfExpiry',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'full_name' => 'setFullName',
        'spouse_name' => 'setSpouseName',
        'widow_name' => 'setWidowName',
        'alias_name' => 'setAliasName',
        'gender' => 'setGender',
        'mrz_line1' => 'setMrzLine1',
        'mrz_line2' => 'setMrzLine2',
        'mrz_line3' => 'setMrzLine3',
        'nationality' => 'setNationality',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_line_3' => 'setAddressLine3',
        'address_line_4' => 'setAddressLine4',
        'address_line_5' => 'setAddressLine5',
        'issuing_authority' => 'setIssuingAuthority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_number' => 'getDocumentNumber',
        'date_of_birth' => 'getDateOfBirth',
        'date_of_expiry' => 'getDateOfExpiry',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'full_name' => 'getFullName',
        'spouse_name' => 'getSpouseName',
        'widow_name' => 'getWidowName',
        'alias_name' => 'getAliasName',
        'gender' => 'getGender',
        'mrz_line1' => 'getMrzLine1',
        'mrz_line2' => 'getMrzLine2',
        'mrz_line3' => 'getMrzLine3',
        'nationality' => 'getNationality',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_line_3' => 'getAddressLine3',
        'address_line_4' => 'getAddressLine4',
        'address_line_5' => 'getAddressLine5',
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
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('date_of_expiry', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('spouse_name', $data ?? [], null);
        $this->setIfExists('widow_name', $data ?? [], null);
        $this->setIfExists('alias_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('mrz_line1', $data ?? [], null);
        $this->setIfExists('mrz_line2', $data ?? [], null);
        $this->setIfExists('mrz_line3', $data ?? [], null);
        $this->setIfExists('nationality', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('address_line_3', $data ?? [], null);
        $this->setIfExists('address_line_4', $data ?? [], null);
        $this->setIfExists('address_line_5', $data ?? [], null);
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
     * Gets spouse_name
     *
     * @return string|null
     */
    public function getSpouseName()
    {
        return $this->container['spouse_name'];
    }

    /**
     * Sets spouse_name
     *
     * @param string|null $spouse_name spouse_name
     *
     * @return self
     */
    public function setSpouseName($spouse_name)
    {
        if (is_null($spouse_name)) {
            throw new \InvalidArgumentException('non-nullable spouse_name cannot be null');
        }
        $this->container['spouse_name'] = $spouse_name;

        return $this;
    }

    /**
     * Gets widow_name
     *
     * @return string|null
     */
    public function getWidowName()
    {
        return $this->container['widow_name'];
    }

    /**
     * Sets widow_name
     *
     * @param string|null $widow_name widow_name
     *
     * @return self
     */
    public function setWidowName($widow_name)
    {
        if (is_null($widow_name)) {
            throw new \InvalidArgumentException('non-nullable widow_name cannot be null');
        }
        $this->container['widow_name'] = $widow_name;

        return $this;
    }

    /**
     * Gets alias_name
     *
     * @return string|null
     */
    public function getAliasName()
    {
        return $this->container['alias_name'];
    }

    /**
     * Sets alias_name
     *
     * @param string|null $alias_name alias_name
     *
     * @return self
     */
    public function setAliasName($alias_name)
    {
        if (is_null($alias_name)) {
            throw new \InvalidArgumentException('non-nullable alias_name cannot be null');
        }
        $this->container['alias_name'] = $alias_name;

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
     * Gets mrz_line1
     *
     * @return string|null
     */
    public function getMrzLine1()
    {
        return $this->container['mrz_line1'];
    }

    /**
     * Sets mrz_line1
     *
     * @param string|null $mrz_line1 mrz_line1
     *
     * @return self
     */
    public function setMrzLine1($mrz_line1)
    {
        if (is_null($mrz_line1)) {
            throw new \InvalidArgumentException('non-nullable mrz_line1 cannot be null');
        }
        $this->container['mrz_line1'] = $mrz_line1;

        return $this;
    }

    /**
     * Gets mrz_line2
     *
     * @return string|null
     */
    public function getMrzLine2()
    {
        return $this->container['mrz_line2'];
    }

    /**
     * Sets mrz_line2
     *
     * @param string|null $mrz_line2 mrz_line2
     *
     * @return self
     */
    public function setMrzLine2($mrz_line2)
    {
        if (is_null($mrz_line2)) {
            throw new \InvalidArgumentException('non-nullable mrz_line2 cannot be null');
        }
        $this->container['mrz_line2'] = $mrz_line2;

        return $this;
    }

    /**
     * Gets mrz_line3
     *
     * @return string|null
     */
    public function getMrzLine3()
    {
        return $this->container['mrz_line3'];
    }

    /**
     * Sets mrz_line3
     *
     * @param string|null $mrz_line3 mrz_line3
     *
     * @return self
     */
    public function setMrzLine3($mrz_line3)
    {
        if (is_null($mrz_line3)) {
            throw new \InvalidArgumentException('non-nullable mrz_line3 cannot be null');
        }
        $this->container['mrz_line3'] = $mrz_line3;

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



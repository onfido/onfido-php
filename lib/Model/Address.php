<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'flat_number' => 'string',
        'building_number' => 'string',
        'building_name' => 'string',
        'street' => 'string',
        'sub_street' => 'string',
        'town' => 'string',
        'postcode' => 'string',
        'country' => '\Onfido\Model\CountryCodes',
        'state' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'flat_number' => null,
        'building_number' => null,
        'building_name' => null,
        'street' => null,
        'sub_street' => null,
        'town' => null,
        'postcode' => null,
        'country' => null,
        'state' => null,
        'line1' => null,
        'line2' => null,
        'line3' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'flat_number' => false,
        'building_number' => false,
        'building_name' => false,
        'street' => false,
        'sub_street' => false,
        'town' => false,
        'postcode' => false,
        'country' => false,
        'state' => false,
        'line1' => true,
        'line2' => true,
        'line3' => true
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
        'flat_number' => 'flat_number',
        'building_number' => 'building_number',
        'building_name' => 'building_name',
        'street' => 'street',
        'sub_street' => 'sub_street',
        'town' => 'town',
        'postcode' => 'postcode',
        'country' => 'country',
        'state' => 'state',
        'line1' => 'line1',
        'line2' => 'line2',
        'line3' => 'line3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flat_number' => 'setFlatNumber',
        'building_number' => 'setBuildingNumber',
        'building_name' => 'setBuildingName',
        'street' => 'setStreet',
        'sub_street' => 'setSubStreet',
        'town' => 'setTown',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'state' => 'setState',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flat_number' => 'getFlatNumber',
        'building_number' => 'getBuildingNumber',
        'building_name' => 'getBuildingName',
        'street' => 'getStreet',
        'sub_street' => 'getSubStreet',
        'town' => 'getTown',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'state' => 'getState',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3'
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
        $this->setIfExists('flat_number', $data ?? [], null);
        $this->setIfExists('building_number', $data ?? [], null);
        $this->setIfExists('building_name', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('sub_street', $data ?? [], null);
        $this->setIfExists('town', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('line3', $data ?? [], null);
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

        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if (!is_null($this->container['line1']) && !preg_match("/^[^!$%^*=<>]*$/", $this->container['line1'])) {
            $invalidProperties[] = "invalid value for 'line1', must be conform to the pattern /^[^!$%^*=<>]*$/.";
        }

        if (!is_null($this->container['line2']) && !preg_match("/^[^!$%^*=<>]*$/", $this->container['line2'])) {
            $invalidProperties[] = "invalid value for 'line2', must be conform to the pattern /^[^!$%^*=<>]*$/.";
        }

        if (!is_null($this->container['line3']) && !preg_match("/^[^!$%^*=<>]*$/", $this->container['line3'])) {
            $invalidProperties[] = "invalid value for 'line3', must be conform to the pattern /^[^!$%^*=<>]*$/.";
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
     * Gets flat_number
     *
     * @return string|null
     */
    public function getFlatNumber()
    {
        return $this->container['flat_number'];
    }

    /**
     * Sets flat_number
     *
     * @param string|null $flat_number The flat number of this address
     *
     * @return self
     */
    public function setFlatNumber($flat_number)
    {
        if (is_null($flat_number)) {
            throw new \InvalidArgumentException('non-nullable flat_number cannot be null');
        }
        $this->container['flat_number'] = $flat_number;

        return $this;
    }

    /**
     * Gets building_number
     *
     * @return string|null
     */
    public function getBuildingNumber()
    {
        return $this->container['building_number'];
    }

    /**
     * Sets building_number
     *
     * @param string|null $building_number The building number of this address
     *
     * @return self
     */
    public function setBuildingNumber($building_number)
    {
        if (is_null($building_number)) {
            throw new \InvalidArgumentException('non-nullable building_number cannot be null');
        }
        $this->container['building_number'] = $building_number;

        return $this;
    }

    /**
     * Gets building_name
     *
     * @return string|null
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string|null $building_name The building name of this address
     *
     * @return self
     */
    public function setBuildingName($building_name)
    {
        if (is_null($building_name)) {
            throw new \InvalidArgumentException('non-nullable building_name cannot be null');
        }
        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street The street of the applicant's address
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets sub_street
     *
     * @return string|null
     */
    public function getSubStreet()
    {
        return $this->container['sub_street'];
    }

    /**
     * Sets sub_street
     *
     * @param string|null $sub_street The sub-street of the applicant's address
     *
     * @return self
     */
    public function setSubStreet($sub_street)
    {
        if (is_null($sub_street)) {
            throw new \InvalidArgumentException('non-nullable sub_street cannot be null');
        }
        $this->container['sub_street'] = $sub_street;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string|null
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string|null $town The town of the applicant's address
     *
     * @return self
     */
    public function setTown($town)
    {
        if (is_null($town)) {
            throw new \InvalidArgumentException('non-nullable town cannot be null');
        }
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode The postcode or ZIP of the applicant's address
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Onfido\Model\CountryCodes
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Onfido\Model\CountryCodes $country The 3 character ISO country code of this address. For example, GBR is the country code for the United Kingdom
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The address state. US states must use the USPS abbreviation (see also ISO 3166-2:US), for example AK, CA, or TX.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 Line 1 of the applicant's address
     *
     * @return self
     */
    public function setLine1($line1)
    {
        if (is_null($line1)) {
            array_push($this->openAPINullablesSetToNull, 'line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($line1) && (!preg_match("/^[^!$%^*=<>]*$/", ObjectSerializer::toString($line1)))) {
            throw new \InvalidArgumentException("invalid value for \$line1 when calling Address., must conform to the pattern /^[^!$%^*=<>]*$/.");
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Line 2 of the applicant's address
     *
     * @return self
     */
    public function setLine2($line2)
    {
        if (is_null($line2)) {
            array_push($this->openAPINullablesSetToNull, 'line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($line2) && (!preg_match("/^[^!$%^*=<>]*$/", ObjectSerializer::toString($line2)))) {
            throw new \InvalidArgumentException("invalid value for \$line2 when calling Address., must conform to the pattern /^[^!$%^*=<>]*$/.");
        }

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string|null
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string|null $line3 Line 3 of the applicant's address
     *
     * @return self
     */
    public function setLine3($line3)
    {
        if (is_null($line3)) {
            array_push($this->openAPINullablesSetToNull, 'line3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('line3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($line3) && (!preg_match("/^[^!$%^*=<>]*$/", ObjectSerializer::toString($line3)))) {
            throw new \InvalidArgumentException("invalid value for \$line3 when calling Address., must conform to the pattern /^[^!$%^*=<>]*$/.");
        }

        $this->container['line3'] = $line3;

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



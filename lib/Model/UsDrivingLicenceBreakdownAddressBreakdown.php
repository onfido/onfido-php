<?php
/**
 * UsDrivingLicenceBreakdownAddressBreakdown
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
 * UsDrivingLicenceBreakdownAddressBreakdown Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsDrivingLicenceBreakdownAddressBreakdown implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'us_driving_licence_breakdown_address_breakdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry',
        'line_1' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry',
        'line_2' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry',
        'state_code' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry',
        'zip4' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry',
        'zip5' => '\Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'line_1' => null,
        'line_2' => null,
        'state_code' => null,
        'zip4' => null,
        'zip5' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'city' => false,
        'line_1' => false,
        'line_2' => false,
        'state_code' => false,
        'zip4' => false,
        'zip5' => false
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
        'city' => 'city',
        'line_1' => 'line_1',
        'line_2' => 'line_2',
        'state_code' => 'state_code',
        'zip4' => 'zip4',
        'zip5' => 'zip5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'line_1' => 'setLine1',
        'line_2' => 'setLine2',
        'state_code' => 'setStateCode',
        'zip4' => 'setZip4',
        'zip5' => 'setZip5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'line_1' => 'getLine1',
        'line_2' => 'getLine2',
        'state_code' => 'getStateCode',
        'zip4' => 'getZip4',
        'zip5' => 'getZip5'
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
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('line_1', $data ?? [], null);
        $this->setIfExists('line_2', $data ?? [], null);
        $this->setIfExists('state_code', $data ?? [], null);
        $this->setIfExists('zip4', $data ?? [], null);
        $this->setIfExists('zip5', $data ?? [], null);
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
     * Gets city
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets line_1
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getLine1()
    {
        return $this->container['line_1'];
    }

    /**
     * Sets line_1
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $line_1 line_1
     *
     * @return self
     */
    public function setLine1($line_1)
    {
        if (is_null($line_1)) {
            throw new \InvalidArgumentException('non-nullable line_1 cannot be null');
        }
        $this->container['line_1'] = $line_1;

        return $this;
    }

    /**
     * Gets line_2
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getLine2()
    {
        return $this->container['line_2'];
    }

    /**
     * Sets line_2
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $line_2 line_2
     *
     * @return self
     */
    public function setLine2($line_2)
    {
        if (is_null($line_2)) {
            throw new \InvalidArgumentException('non-nullable line_2 cannot be null');
        }
        $this->container['line_2'] = $line_2;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $state_code state_code
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (is_null($state_code)) {
            throw new \InvalidArgumentException('non-nullable state_code cannot be null');
        }
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets zip4
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getZip4()
    {
        return $this->container['zip4'];
    }

    /**
     * Sets zip4
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $zip4 zip4
     *
     * @return self
     */
    public function setZip4($zip4)
    {
        if (is_null($zip4)) {
            throw new \InvalidArgumentException('non-nullable zip4 cannot be null');
        }
        $this->container['zip4'] = $zip4;

        return $this;
    }

    /**
     * Gets zip5
     *
     * @return \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null
     */
    public function getZip5()
    {
        return $this->container['zip5'];
    }

    /**
     * Sets zip5
     *
     * @param \Onfido\Model\DocumentBreakdownDataComparisonBreakdownIssuingCountry|null $zip5 zip5
     *
     * @return self
     */
    public function setZip5($zip5)
    {
        if (is_null($zip5)) {
            throw new \InvalidArgumentException('non-nullable zip5 cannot be null');
        }
        $this->container['zip5'] = $zip5;

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



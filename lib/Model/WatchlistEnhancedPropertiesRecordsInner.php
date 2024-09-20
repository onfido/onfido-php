<?php
/**
 * WatchlistEnhancedPropertiesRecordsInner
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
 * WatchlistEnhancedPropertiesRecordsInner Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WatchlistEnhancedPropertiesRecordsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'watchlist_enhanced_properties_records_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAddressInner[]',
        'alias' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAliasInner[]',
        'associate' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAssociateInner[]',
        'attribute' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAttributeInner[]',
        'date_of_birth' => 'string[]',
        'event' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerEventInner[]',
        'full_name' => 'string',
        'position' => 'string[]',
        'source' => '\Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerSourceInner[]'
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
        'alias' => null,
        'associate' => null,
        'attribute' => null,
        'date_of_birth' => null,
        'event' => null,
        'full_name' => null,
        'position' => null,
        'source' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'alias' => false,
        'associate' => false,
        'attribute' => false,
        'date_of_birth' => false,
        'event' => false,
        'full_name' => false,
        'position' => false,
        'source' => false
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
        'alias' => 'alias',
        'associate' => 'associate',
        'attribute' => 'attribute',
        'date_of_birth' => 'date_of_birth',
        'event' => 'event',
        'full_name' => 'full_name',
        'position' => 'position',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'alias' => 'setAlias',
        'associate' => 'setAssociate',
        'attribute' => 'setAttribute',
        'date_of_birth' => 'setDateOfBirth',
        'event' => 'setEvent',
        'full_name' => 'setFullName',
        'position' => 'setPosition',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'alias' => 'getAlias',
        'associate' => 'getAssociate',
        'attribute' => 'getAttribute',
        'date_of_birth' => 'getDateOfBirth',
        'event' => 'getEvent',
        'full_name' => 'getFullName',
        'position' => 'getPosition',
        'source' => 'getSource'
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('associate', $data ?? [], null);
        $this->setIfExists('attribute', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('full_name', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
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
     * Gets address
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAddressInner[]|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAddressInner[]|null $address All addresses on file.
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
     * Gets alias
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAliasInner[]|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAliasInner[]|null $alias Any names that the person is also known as.
     *
     * @return self
     */
    public function setAlias($alias)
    {
        if (is_null($alias)) {
            throw new \InvalidArgumentException('non-nullable alias cannot be null');
        }
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets associate
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAssociateInner[]|null
     */
    public function getAssociate()
    {
        return $this->container['associate'];
    }

    /**
     * Sets associate
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAssociateInner[]|null $associate Any linked persons, for example family relatives or business partners.
     *
     * @return self
     */
    public function setAssociate($associate)
    {
        if (is_null($associate)) {
            throw new \InvalidArgumentException('non-nullable associate cannot be null');
        }
        $this->container['associate'] = $associate;

        return $this;
    }

    /**
     * Gets attribute
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAttributeInner[]|null
     */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
     * Sets attribute
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerAttributeInner[]|null $attribute Information about the person, for example hair color or nationality.
     *
     * @return self
     */
    public function setAttribute($attribute)
    {
        if (is_null($attribute)) {
            throw new \InvalidArgumentException('non-nullable attribute cannot be null');
        }
        $this->container['attribute'] = $attribute;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string[]|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string[]|null $date_of_birth All the date of births on file.
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
     * Gets event
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerEventInner[]|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerEventInner[]|null $event Information about events that have occurred to the person, for example deportation or arrest.
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

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
     * @param string|null $full_name The name on file
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
     * Gets position
     *
     * @return string[]|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string[]|null $position The role, country and date of each position.
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerSourceInner[]|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Onfido\Model\WatchlistEnhancedPropertiesRecordsInnerSourceInner[]|null $source Details about where the information was obtained.
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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



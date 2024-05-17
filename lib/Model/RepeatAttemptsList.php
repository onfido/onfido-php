<?php
/**
 * RepeatAttemptsList
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
 * RepeatAttemptsList Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RepeatAttemptsList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'repeat_attempts_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_id' => 'string',
        'repeat_attempts' => '\Onfido\Model\RepeatAttemptsListRepeatAttemptsInner[]',
        'attempts_count' => 'int',
        'attempts_clear_rate' => 'float',
        'unique_mismatches_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_id' => 'uuid',
        'repeat_attempts' => null,
        'attempts_count' => null,
        'attempts_clear_rate' => 'float',
        'unique_mismatches_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'report_id' => false,
        'repeat_attempts' => false,
        'attempts_count' => false,
        'attempts_clear_rate' => false,
        'unique_mismatches_count' => false
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
        'report_id' => 'report_id',
        'repeat_attempts' => 'repeat_attempts',
        'attempts_count' => 'attempts_count',
        'attempts_clear_rate' => 'attempts_clear_rate',
        'unique_mismatches_count' => 'unique_mismatches_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_id' => 'setReportId',
        'repeat_attempts' => 'setRepeatAttempts',
        'attempts_count' => 'setAttemptsCount',
        'attempts_clear_rate' => 'setAttemptsClearRate',
        'unique_mismatches_count' => 'setUniqueMismatchesCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_id' => 'getReportId',
        'repeat_attempts' => 'getRepeatAttempts',
        'attempts_count' => 'getAttemptsCount',
        'attempts_clear_rate' => 'getAttemptsClearRate',
        'unique_mismatches_count' => 'getUniqueMismatchesCount'
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
        $this->setIfExists('report_id', $data ?? [], null);
        $this->setIfExists('repeat_attempts', $data ?? [], null);
        $this->setIfExists('attempts_count', $data ?? [], null);
        $this->setIfExists('attempts_clear_rate', $data ?? [], null);
        $this->setIfExists('unique_mismatches_count', $data ?? [], null);
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

        if ($this->container['repeat_attempts'] === null) {
            $invalidProperties[] = "'repeat_attempts' can't be null";
        }
        if (!is_null($this->container['attempts_clear_rate']) && ($this->container['attempts_clear_rate'] > 1)) {
            $invalidProperties[] = "invalid value for 'attempts_clear_rate', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['attempts_clear_rate']) && ($this->container['attempts_clear_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'attempts_clear_rate', must be bigger than or equal to 0.";
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
     * Gets report_id
     *
     * @return string|null
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param string|null $report_id The unique identifier of the completed Document report.
     *
     * @return self
     */
    public function setReportId($report_id)
    {
        if (is_null($report_id)) {
            throw new \InvalidArgumentException('non-nullable report_id cannot be null');
        }
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets repeat_attempts
     *
     * @return \Onfido\Model\RepeatAttemptsListRepeatAttemptsInner[]
     */
    public function getRepeatAttempts()
    {
        return $this->container['repeat_attempts'];
    }

    /**
     * Sets repeat_attempts
     *
     * @param \Onfido\Model\RepeatAttemptsListRepeatAttemptsInner[] $repeat_attempts An array of repeat attempt objects. If no repeat attempts were found, the array will be empty. The number of objects returned can increase over time if more matches are received.
     *
     * @return self
     */
    public function setRepeatAttempts($repeat_attempts)
    {
        if (is_null($repeat_attempts)) {
            throw new \InvalidArgumentException('non-nullable repeat_attempts cannot be null');
        }
        $this->container['repeat_attempts'] = $repeat_attempts;

        return $this;
    }

    /**
     * Gets attempts_count
     *
     * @return int|null
     */
    public function getAttemptsCount()
    {
        return $this->container['attempts_count'];
    }

    /**
     * Sets attempts_count
     *
     * @param int|null $attempts_count The total number of attempts using the same document, including the current report under assessment.
     *
     * @return self
     */
    public function setAttemptsCount($attempts_count)
    {
        if (is_null($attempts_count)) {
            throw new \InvalidArgumentException('non-nullable attempts_count cannot be null');
        }
        $this->container['attempts_count'] = $attempts_count;

        return $this;
    }

    /**
     * Gets attempts_clear_rate
     *
     * @return float|null
     */
    public function getAttemptsClearRate()
    {
        return $this->container['attempts_clear_rate'];
    }

    /**
     * Sets attempts_clear_rate
     *
     * @param float|null $attempts_clear_rate A number between 0 and 1 which indicates the proportion of attempts that have been cleared, including the current report under assessment.
     *
     * @return self
     */
    public function setAttemptsClearRate($attempts_clear_rate)
    {
        if (is_null($attempts_clear_rate)) {
            throw new \InvalidArgumentException('non-nullable attempts_clear_rate cannot be null');
        }

        if (($attempts_clear_rate > 1)) {
            throw new \InvalidArgumentException('invalid value for $attempts_clear_rate when calling RepeatAttemptsList., must be smaller than or equal to 1.');
        }
        if (($attempts_clear_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $attempts_clear_rate when calling RepeatAttemptsList., must be bigger than or equal to 0.');
        }

        $this->container['attempts_clear_rate'] = $attempts_clear_rate;

        return $this;
    }

    /**
     * Gets unique_mismatches_count
     *
     * @return int|null
     */
    public function getUniqueMismatchesCount()
    {
        return $this->container['unique_mismatches_count'];
    }

    /**
     * Sets unique_mismatches_count
     *
     * @param int|null $unique_mismatches_count The number of unique entries in the repeat_attempts field for which at least one of the fields is a mismatch.
     *
     * @return self
     */
    public function setUniqueMismatchesCount($unique_mismatches_count)
    {
        if (is_null($unique_mismatches_count)) {
            throw new \InvalidArgumentException('non-nullable unique_mismatches_count cannot be null');
        }
        $this->container['unique_mismatches_count'] = $unique_mismatches_count;

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



<?php
/**
 * FacialSimilarityPhotoBreakdown
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
 * FacialSimilarityPhotoBreakdown Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FacialSimilarityPhotoBreakdown implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'facial_similarity_photo_breakdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'face_comparison' => '\Onfido\Model\FacialSimilarityPhotoBreakdownFaceComparison',
        'image_integrity' => '\Onfido\Model\FacialSimilarityPhotoBreakdownImageIntegrity',
        'visual_authenticity' => '\Onfido\Model\FacialSimilarityPhotoBreakdownVisualAuthenticity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'face_comparison' => null,
        'image_integrity' => null,
        'visual_authenticity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'face_comparison' => false,
        'image_integrity' => false,
        'visual_authenticity' => false
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
        'face_comparison' => 'face_comparison',
        'image_integrity' => 'image_integrity',
        'visual_authenticity' => 'visual_authenticity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'face_comparison' => 'setFaceComparison',
        'image_integrity' => 'setImageIntegrity',
        'visual_authenticity' => 'setVisualAuthenticity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'face_comparison' => 'getFaceComparison',
        'image_integrity' => 'getImageIntegrity',
        'visual_authenticity' => 'getVisualAuthenticity'
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
        $this->setIfExists('face_comparison', $data ?? [], null);
        $this->setIfExists('image_integrity', $data ?? [], null);
        $this->setIfExists('visual_authenticity', $data ?? [], null);
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
     * Gets face_comparison
     *
     * @return \Onfido\Model\FacialSimilarityPhotoBreakdownFaceComparison|null
     */
    public function getFaceComparison()
    {
        return $this->container['face_comparison'];
    }

    /**
     * Sets face_comparison
     *
     * @param \Onfido\Model\FacialSimilarityPhotoBreakdownFaceComparison|null $face_comparison face_comparison
     *
     * @return self
     */
    public function setFaceComparison($face_comparison)
    {
        if (is_null($face_comparison)) {
            throw new \InvalidArgumentException('non-nullable face_comparison cannot be null');
        }
        $this->container['face_comparison'] = $face_comparison;

        return $this;
    }

    /**
     * Gets image_integrity
     *
     * @return \Onfido\Model\FacialSimilarityPhotoBreakdownImageIntegrity|null
     */
    public function getImageIntegrity()
    {
        return $this->container['image_integrity'];
    }

    /**
     * Sets image_integrity
     *
     * @param \Onfido\Model\FacialSimilarityPhotoBreakdownImageIntegrity|null $image_integrity image_integrity
     *
     * @return self
     */
    public function setImageIntegrity($image_integrity)
    {
        if (is_null($image_integrity)) {
            throw new \InvalidArgumentException('non-nullable image_integrity cannot be null');
        }
        $this->container['image_integrity'] = $image_integrity;

        return $this;
    }

    /**
     * Gets visual_authenticity
     *
     * @return \Onfido\Model\FacialSimilarityPhotoBreakdownVisualAuthenticity|null
     */
    public function getVisualAuthenticity()
    {
        return $this->container['visual_authenticity'];
    }

    /**
     * Sets visual_authenticity
     *
     * @param \Onfido\Model\FacialSimilarityPhotoBreakdownVisualAuthenticity|null $visual_authenticity visual_authenticity
     *
     * @return self
     */
    public function setVisualAuthenticity($visual_authenticity)
    {
        if (is_null($visual_authenticity)) {
            throw new \InvalidArgumentException('non-nullable visual_authenticity cannot be null');
        }
        $this->container['visual_authenticity'] = $visual_authenticity;

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



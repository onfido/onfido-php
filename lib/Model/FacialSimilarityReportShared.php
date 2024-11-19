<?php
/**
 * FacialSimilarityReportShared
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
 * FacialSimilarityReportShared Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FacialSimilarityReportShared implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'facial_similarity_report_shared';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'live_photos' => '\Onfido\Model\FacialSimilarityReportMedia[]',
        'live_videos' => '\Onfido\Model\FacialSimilarityReportMedia[]',
        'motion_captures' => '\Onfido\Model\FacialSimilarityReportMedia[]',
        'id_photos' => '\Onfido\Model\FacialSimilarityReportMedia[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'live_photos' => null,
        'live_videos' => null,
        'motion_captures' => null,
        'id_photos' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'live_photos' => false,
        'live_videos' => false,
        'motion_captures' => false,
        'id_photos' => false
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
        'live_photos' => 'live_photos',
        'live_videos' => 'live_videos',
        'motion_captures' => 'motion_captures',
        'id_photos' => 'id_photos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'live_photos' => 'setLivePhotos',
        'live_videos' => 'setLiveVideos',
        'motion_captures' => 'setMotionCaptures',
        'id_photos' => 'setIdPhotos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'live_photos' => 'getLivePhotos',
        'live_videos' => 'getLiveVideos',
        'motion_captures' => 'getMotionCaptures',
        'id_photos' => 'getIdPhotos'
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
        $this->setIfExists('live_photos', $data ?? [], null);
        $this->setIfExists('live_videos', $data ?? [], null);
        $this->setIfExists('motion_captures', $data ?? [], null);
        $this->setIfExists('id_photos', $data ?? [], null);
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
     * Gets live_photos
     *
     * @return \Onfido\Model\FacialSimilarityReportMedia[]|null
     */
    public function getLivePhotos()
    {
        return $this->container['live_photos'];
    }

    /**
     * Sets live_photos
     *
     * @param \Onfido\Model\FacialSimilarityReportMedia[]|null $live_photos Array of objects with live photo ids that were used in the Onfido engine.
     *
     * @return self
     */
    public function setLivePhotos($live_photos)
    {
        if (is_null($live_photos)) {
            throw new \InvalidArgumentException('non-nullable live_photos cannot be null');
        }
        $this->container['live_photos'] = $live_photos;

        return $this;
    }

    /**
     * Gets live_videos
     *
     * @return \Onfido\Model\FacialSimilarityReportMedia[]|null
     */
    public function getLiveVideos()
    {
        return $this->container['live_videos'];
    }

    /**
     * Sets live_videos
     *
     * @param \Onfido\Model\FacialSimilarityReportMedia[]|null $live_videos Array of objects with live video ids that were used in the Onfido engine.
     *
     * @return self
     */
    public function setLiveVideos($live_videos)
    {
        if (is_null($live_videos)) {
            throw new \InvalidArgumentException('non-nullable live_videos cannot be null');
        }
        $this->container['live_videos'] = $live_videos;

        return $this;
    }

    /**
     * Gets motion_captures
     *
     * @return \Onfido\Model\FacialSimilarityReportMedia[]|null
     */
    public function getMotionCaptures()
    {
        return $this->container['motion_captures'];
    }

    /**
     * Sets motion_captures
     *
     * @param \Onfido\Model\FacialSimilarityReportMedia[]|null $motion_captures Array of objects with motion capture ids that were used in the Onfido engine.
     *
     * @return self
     */
    public function setMotionCaptures($motion_captures)
    {
        if (is_null($motion_captures)) {
            throw new \InvalidArgumentException('non-nullable motion_captures cannot be null');
        }
        $this->container['motion_captures'] = $motion_captures;

        return $this;
    }

    /**
     * Gets id_photos
     *
     * @return \Onfido\Model\FacialSimilarityReportMedia[]|null
     */
    public function getIdPhotos()
    {
        return $this->container['id_photos'];
    }

    /**
     * Sets id_photos
     *
     * @param \Onfido\Model\FacialSimilarityReportMedia[]|null $id_photos Array of objects with id photo ids that were used in the Onfido engine.
     *
     * @return self
     */
    public function setIdPhotos($id_photos)
    {
        if (is_null($id_photos)) {
            throw new \InvalidArgumentException('non-nullable id_photos cannot be null');
        }
        $this->container['id_photos'] = $id_photos;

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



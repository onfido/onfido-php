<?php
/**
 * DocumentBreakdownVisualAuthenticityBreakdown
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
 * DocumentBreakdownVisualAuthenticityBreakdown Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentBreakdownVisualAuthenticityBreakdown implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'document_breakdown_visual_authenticity_breakdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fonts' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFonts',
        'picture_face_integrity' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownPictureFaceIntegrity',
        'template' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownTemplate',
        'security_features' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownSecurityFeatures',
        'original_document_present' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOriginalDocumentPresent',
        'digital_tampering' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownDigitalTampering',
        'other' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOther',
        'face_detection' => '\Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFaceDetection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fonts' => null,
        'picture_face_integrity' => null,
        'template' => null,
        'security_features' => null,
        'original_document_present' => null,
        'digital_tampering' => null,
        'other' => null,
        'face_detection' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fonts' => false,
        'picture_face_integrity' => false,
        'template' => false,
        'security_features' => false,
        'original_document_present' => false,
        'digital_tampering' => false,
        'other' => false,
        'face_detection' => false
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
        'fonts' => 'fonts',
        'picture_face_integrity' => 'picture_face_integrity',
        'template' => 'template',
        'security_features' => 'security_features',
        'original_document_present' => 'original_document_present',
        'digital_tampering' => 'digital_tampering',
        'other' => 'other',
        'face_detection' => 'face_detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fonts' => 'setFonts',
        'picture_face_integrity' => 'setPictureFaceIntegrity',
        'template' => 'setTemplate',
        'security_features' => 'setSecurityFeatures',
        'original_document_present' => 'setOriginalDocumentPresent',
        'digital_tampering' => 'setDigitalTampering',
        'other' => 'setOther',
        'face_detection' => 'setFaceDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fonts' => 'getFonts',
        'picture_face_integrity' => 'getPictureFaceIntegrity',
        'template' => 'getTemplate',
        'security_features' => 'getSecurityFeatures',
        'original_document_present' => 'getOriginalDocumentPresent',
        'digital_tampering' => 'getDigitalTampering',
        'other' => 'getOther',
        'face_detection' => 'getFaceDetection'
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
        $this->setIfExists('fonts', $data ?? [], null);
        $this->setIfExists('picture_face_integrity', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
        $this->setIfExists('security_features', $data ?? [], null);
        $this->setIfExists('original_document_present', $data ?? [], null);
        $this->setIfExists('digital_tampering', $data ?? [], null);
        $this->setIfExists('other', $data ?? [], null);
        $this->setIfExists('face_detection', $data ?? [], null);
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
     * Gets fonts
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFonts|null
     */
    public function getFonts()
    {
        return $this->container['fonts'];
    }

    /**
     * Sets fonts
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFonts|null $fonts fonts
     *
     * @return self
     */
    public function setFonts($fonts)
    {
        if (is_null($fonts)) {
            throw new \InvalidArgumentException('non-nullable fonts cannot be null');
        }
        $this->container['fonts'] = $fonts;

        return $this;
    }

    /**
     * Gets picture_face_integrity
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownPictureFaceIntegrity|null
     */
    public function getPictureFaceIntegrity()
    {
        return $this->container['picture_face_integrity'];
    }

    /**
     * Sets picture_face_integrity
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownPictureFaceIntegrity|null $picture_face_integrity picture_face_integrity
     *
     * @return self
     */
    public function setPictureFaceIntegrity($picture_face_integrity)
    {
        if (is_null($picture_face_integrity)) {
            throw new \InvalidArgumentException('non-nullable picture_face_integrity cannot be null');
        }
        $this->container['picture_face_integrity'] = $picture_face_integrity;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownTemplate|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownTemplate|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets security_features
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownSecurityFeatures|null
     */
    public function getSecurityFeatures()
    {
        return $this->container['security_features'];
    }

    /**
     * Sets security_features
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownSecurityFeatures|null $security_features security_features
     *
     * @return self
     */
    public function setSecurityFeatures($security_features)
    {
        if (is_null($security_features)) {
            throw new \InvalidArgumentException('non-nullable security_features cannot be null');
        }
        $this->container['security_features'] = $security_features;

        return $this;
    }

    /**
     * Gets original_document_present
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOriginalDocumentPresent|null
     */
    public function getOriginalDocumentPresent()
    {
        return $this->container['original_document_present'];
    }

    /**
     * Sets original_document_present
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOriginalDocumentPresent|null $original_document_present original_document_present
     *
     * @return self
     */
    public function setOriginalDocumentPresent($original_document_present)
    {
        if (is_null($original_document_present)) {
            throw new \InvalidArgumentException('non-nullable original_document_present cannot be null');
        }
        $this->container['original_document_present'] = $original_document_present;

        return $this;
    }

    /**
     * Gets digital_tampering
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownDigitalTampering|null
     */
    public function getDigitalTampering()
    {
        return $this->container['digital_tampering'];
    }

    /**
     * Sets digital_tampering
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownDigitalTampering|null $digital_tampering digital_tampering
     *
     * @return self
     */
    public function setDigitalTampering($digital_tampering)
    {
        if (is_null($digital_tampering)) {
            throw new \InvalidArgumentException('non-nullable digital_tampering cannot be null');
        }
        $this->container['digital_tampering'] = $digital_tampering;

        return $this;
    }

    /**
     * Gets other
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOther|null
     */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
     * Sets other
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownOther|null $other other
     *
     * @return self
     */
    public function setOther($other)
    {
        if (is_null($other)) {
            throw new \InvalidArgumentException('non-nullable other cannot be null');
        }
        $this->container['other'] = $other;

        return $this;
    }

    /**
     * Gets face_detection
     *
     * @return \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFaceDetection|null
     */
    public function getFaceDetection()
    {
        return $this->container['face_detection'];
    }

    /**
     * Sets face_detection
     *
     * @param \Onfido\Model\DocumentBreakdownVisualAuthenticityBreakdownFaceDetection|null $face_detection face_detection
     *
     * @return self
     */
    public function setFaceDetection($face_detection)
    {
        if (is_null($face_detection)) {
            throw new \InvalidArgumentException('non-nullable face_detection cannot be null');
        }
        $this->container['face_detection'] = $face_detection;

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



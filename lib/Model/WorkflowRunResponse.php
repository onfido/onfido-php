<?php
/**
 * WorkflowRunResponse
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
 * WorkflowRunResponse Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkflowRunResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'workflow_run_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'workflow_version_id' => 'int',
        'dashboard_url' => 'string',
        'status' => '\Onfido\Model\WorkflowRunStatus',
        'output' => 'object',
        'reasons' => 'string[]',
        'error' => '\Onfido\Model\WorkflowRunError',
        'sdk_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'workflow_version_id' => null,
        'dashboard_url' => null,
        'status' => null,
        'output' => null,
        'reasons' => null,
        'error' => null,
        'sdk_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'workflow_version_id' => false,
        'dashboard_url' => false,
        'status' => false,
        'output' => false,
        'reasons' => false,
        'error' => false,
        'sdk_token' => true
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
        'id' => 'id',
        'workflow_version_id' => 'workflow_version_id',
        'dashboard_url' => 'dashboard_url',
        'status' => 'status',
        'output' => 'output',
        'reasons' => 'reasons',
        'error' => 'error',
        'sdk_token' => 'sdk_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'workflow_version_id' => 'setWorkflowVersionId',
        'dashboard_url' => 'setDashboardUrl',
        'status' => 'setStatus',
        'output' => 'setOutput',
        'reasons' => 'setReasons',
        'error' => 'setError',
        'sdk_token' => 'setSdkToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'workflow_version_id' => 'getWorkflowVersionId',
        'dashboard_url' => 'getDashboardUrl',
        'status' => 'getStatus',
        'output' => 'getOutput',
        'reasons' => 'getReasons',
        'error' => 'getError',
        'sdk_token' => 'getSdkToken'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('workflow_version_id', $data ?? [], null);
        $this->setIfExists('dashboard_url', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('output', $data ?? [], null);
        $this->setIfExists('reasons', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('sdk_token', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier for the Workflow Run.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets workflow_version_id
     *
     * @return int|null
     */
    public function getWorkflowVersionId()
    {
        return $this->container['workflow_version_id'];
    }

    /**
     * Sets workflow_version_id
     *
     * @param int|null $workflow_version_id The identifier for the Workflow version.
     *
     * @return self
     */
    public function setWorkflowVersionId($workflow_version_id)
    {
        if (is_null($workflow_version_id)) {
            throw new \InvalidArgumentException('non-nullable workflow_version_id cannot be null');
        }
        $this->container['workflow_version_id'] = $workflow_version_id;

        return $this;
    }

    /**
     * Gets dashboard_url
     *
     * @return string|null
     */
    public function getDashboardUrl()
    {
        return $this->container['dashboard_url'];
    }

    /**
     * Sets dashboard_url
     *
     * @param string|null $dashboard_url The URL for viewing the Workflow Run results on your Onfido Dashboard.
     *
     * @return self
     */
    public function setDashboardUrl($dashboard_url)
    {
        if (is_null($dashboard_url)) {
            throw new \InvalidArgumentException('non-nullable dashboard_url cannot be null');
        }
        $this->container['dashboard_url'] = $dashboard_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Onfido\Model\WorkflowRunStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Onfido\Model\WorkflowRunStatus|null $status The status of the Workflow Run.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets output
     *
     * @return object|null
     */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
     * Sets output
     *
     * @param object|null $output Output object contains all of the properties configured on the Workflow version.
     *
     * @return self
     */
    public function setOutput($output)
    {
        if (is_null($output)) {
            throw new \InvalidArgumentException('non-nullable output cannot be null');
        }
        $this->container['output'] = $output;

        return $this;
    }

    /**
     * Gets reasons
     *
     * @return string[]|null
     */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
     * Sets reasons
     *
     * @param string[]|null $reasons The reasons the Workflow Run outcome was reached. Configurable when creating the Workflow version.
     *
     * @return self
     */
    public function setReasons($reasons)
    {
        if (is_null($reasons)) {
            throw new \InvalidArgumentException('non-nullable reasons cannot be null');
        }
        $this->container['reasons'] = $reasons;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \Onfido\Model\WorkflowRunError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Onfido\Model\WorkflowRunError|null $error Error object. Only set when the Workflow Run status is 'error'.
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets sdk_token
     *
     * @return string|null
     */
    public function getSdkToken()
    {
        return $this->container['sdk_token'];
    }

    /**
     * Sets sdk_token
     *
     * @param string|null $sdk_token Client token to use when loading this workflow run in the Onfido SDK.
     *
     * @return self
     */
    public function setSdkToken($sdk_token)
    {
        if (is_null($sdk_token)) {
            array_push($this->openAPINullablesSetToNull, 'sdk_token');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sdk_token', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sdk_token'] = $sdk_token;

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



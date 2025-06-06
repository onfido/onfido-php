<?php
/**
 * ApplicantUpdater
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
 * ApplicantUpdater Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplicantUpdater implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'applicant_updater';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'dob' => '\DateTime',
        'id_numbers' => '\Onfido\Model\IdNumber[]',
        'phone_number' => 'string',
        'consents' => '\Onfido\Model\ApplicantConsentBuilder[]',
        'address' => '\Onfido\Model\AddressBuilder',
        'location' => '\Onfido\Model\LocationBuilder',
        'first_name' => 'string',
        'last_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'dob' => 'date',
        'id_numbers' => null,
        'phone_number' => null,
        'consents' => null,
        'address' => null,
        'location' => null,
        'first_name' => null,
        'last_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
        'dob' => false,
        'id_numbers' => false,
        'phone_number' => false,
        'consents' => false,
        'address' => false,
        'location' => false,
        'first_name' => false,
        'last_name' => false
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
        'email' => 'email',
        'dob' => 'dob',
        'id_numbers' => 'id_numbers',
        'phone_number' => 'phone_number',
        'consents' => 'consents',
        'address' => 'address',
        'location' => 'location',
        'first_name' => 'first_name',
        'last_name' => 'last_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'dob' => 'setDob',
        'id_numbers' => 'setIdNumbers',
        'phone_number' => 'setPhoneNumber',
        'consents' => 'setConsents',
        'address' => 'setAddress',
        'location' => 'setLocation',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'dob' => 'getDob',
        'id_numbers' => 'getIdNumbers',
        'phone_number' => 'getPhoneNumber',
        'consents' => 'getConsents',
        'address' => 'getAddress',
        'location' => 'getLocation',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('dob', $data ?? [], null);
        $this->setIfExists('id_numbers', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('consents', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
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

        if (!is_null($this->container['first_name']) && !preg_match("/^[^!#$%*=<>;{}\"]*$/", $this->container['first_name'])) {
            $invalidProperties[] = "invalid value for 'first_name', must be conform to the pattern /^[^!#$%*=<>;{}\"]*$/.";
        }

        if (!is_null($this->container['last_name']) && !preg_match("/^[^!#$%*=<>;{}\"]*$/", $this->container['last_name'])) {
            $invalidProperties[] = "invalid value for 'last_name', must be conform to the pattern /^[^!#$%*=<>;{}\"]*$/.";
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The applicant's email address. Required if doing a US check, or a UK check for which `applicant_provides_data` is `true`.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return \DateTime|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param \DateTime|null $dob The applicant's date of birth
     *
     * @return self
     */
    public function setDob($dob)
    {
        if (is_null($dob)) {
            throw new \InvalidArgumentException('non-nullable dob cannot be null');
        }
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets id_numbers
     *
     * @return \Onfido\Model\IdNumber[]|null
     */
    public function getIdNumbers()
    {
        return $this->container['id_numbers'];
    }

    /**
     * Sets id_numbers
     *
     * @param \Onfido\Model\IdNumber[]|null $id_numbers id_numbers
     *
     * @return self
     */
    public function setIdNumbers($id_numbers)
    {
        if (is_null($id_numbers)) {
            throw new \InvalidArgumentException('non-nullable id_numbers cannot be null');
        }
        $this->container['id_numbers'] = $id_numbers;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The applicant's phone number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets consents
     *
     * @return \Onfido\Model\ApplicantConsentBuilder[]|null
     */
    public function getConsents()
    {
        return $this->container['consents'];
    }

    /**
     * Sets consents
     *
     * @param \Onfido\Model\ApplicantConsentBuilder[]|null $consents The applicant's consents
     *
     * @return self
     */
    public function setConsents($consents)
    {
        if (is_null($consents)) {
            throw new \InvalidArgumentException('non-nullable consents cannot be null');
        }
        $this->container['consents'] = $consents;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Onfido\Model\AddressBuilder|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Onfido\Model\AddressBuilder|null $address address
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
     * Gets location
     *
     * @return \Onfido\Model\LocationBuilder|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Onfido\Model\LocationBuilder|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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
     * @param string|null $first_name The applicant's first name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }

        if ((!preg_match("/^[^!#$%*=<>;{}\"]*$/", ObjectSerializer::toString($first_name)))) {
            throw new \InvalidArgumentException("invalid value for \$first_name when calling ApplicantUpdater., must conform to the pattern /^[^!#$%*=<>;{}\"]*$/.");
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
     * @param string|null $last_name The applicant's surname
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }

        if ((!preg_match("/^[^!#$%*=<>;{}\"]*$/", ObjectSerializer::toString($last_name)))) {
            throw new \InvalidArgumentException("invalid value for \$last_name when calling ApplicantUpdater., must conform to the pattern /^[^!#$%*=<>;{}\"]*$/.");
        }

        $this->container['last_name'] = $last_name;

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



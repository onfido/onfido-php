<?php
/**
 * UsDrivingLicenceShared
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
 * UsDrivingLicenceShared Class Doc Comment
 *
 * @category Class
 * @description An object that contains all accepted fields for the Driver&#39;s License Data Verification report.
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UsDrivingLicenceShared implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'us_driving_licence_shared';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_number' => 'string',
        'issue_state' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'city' => 'string',
        'date_of_birth' => '\DateTime',
        'document_category' => 'string',
        'expiration_date' => '\DateTime',
        'eye_color_code' => 'string',
        'first_name' => 'string',
        'gender' => 'string',
        'issue_date' => '\DateTime',
        'last_name' => 'string',
        'middle_name' => 'string',
        'name_suffix' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'weight_measure' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_number' => null,
        'issue_state' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'date_of_birth' => 'date',
        'document_category' => null,
        'expiration_date' => 'date',
        'eye_color_code' => null,
        'first_name' => null,
        'gender' => null,
        'issue_date' => 'date',
        'last_name' => null,
        'middle_name' => null,
        'name_suffix' => null,
        'postal_code' => null,
        'state' => null,
        'weight_measure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id_number' => false,
        'issue_state' => false,
        'address_line_1' => false,
        'address_line_2' => false,
        'city' => false,
        'date_of_birth' => false,
        'document_category' => false,
        'expiration_date' => false,
        'eye_color_code' => false,
        'first_name' => false,
        'gender' => false,
        'issue_date' => false,
        'last_name' => false,
        'middle_name' => false,
        'name_suffix' => false,
        'postal_code' => false,
        'state' => false,
        'weight_measure' => false
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
        'id_number' => 'id_number',
        'issue_state' => 'issue_state',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'city' => 'city',
        'date_of_birth' => 'date_of_birth',
        'document_category' => 'document_category',
        'expiration_date' => 'expiration_date',
        'eye_color_code' => 'eye_color_code',
        'first_name' => 'first_name',
        'gender' => 'gender',
        'issue_date' => 'issue_date',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name',
        'name_suffix' => 'name_suffix',
        'postal_code' => 'postal_code',
        'state' => 'state',
        'weight_measure' => 'weight_measure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_number' => 'setIdNumber',
        'issue_state' => 'setIssueState',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'city' => 'setCity',
        'date_of_birth' => 'setDateOfBirth',
        'document_category' => 'setDocumentCategory',
        'expiration_date' => 'setExpirationDate',
        'eye_color_code' => 'setEyeColorCode',
        'first_name' => 'setFirstName',
        'gender' => 'setGender',
        'issue_date' => 'setIssueDate',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'name_suffix' => 'setNameSuffix',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'weight_measure' => 'setWeightMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_number' => 'getIdNumber',
        'issue_state' => 'getIssueState',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'city' => 'getCity',
        'date_of_birth' => 'getDateOfBirth',
        'document_category' => 'getDocumentCategory',
        'expiration_date' => 'getExpirationDate',
        'eye_color_code' => 'getEyeColorCode',
        'first_name' => 'getFirstName',
        'gender' => 'getGender',
        'issue_date' => 'getIssueDate',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'name_suffix' => 'getNameSuffix',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'weight_measure' => 'getWeightMeasure'
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

    public const DOCUMENT_CATEGORY_DRIVER_LICENSE = 'driver license';
    public const DOCUMENT_CATEGORY_DRIVER_PERMIT = 'driver permit';
    public const DOCUMENT_CATEGORY_ID_CARD = 'id card';
    public const DOCUMENT_CATEGORY_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    public const EYE_COLOR_CODE_BLK = 'BLK';
    public const EYE_COLOR_CODE_BLU = 'BLU';
    public const EYE_COLOR_CODE_BRO = 'BRO';
    public const EYE_COLOR_CODE_DIC = 'DIC';
    public const EYE_COLOR_CODE_GRY = 'GRY';
    public const EYE_COLOR_CODE_GRN = 'GRN';
    public const EYE_COLOR_CODE_HAZ = 'HAZ';
    public const EYE_COLOR_CODE_MAR = 'MAR';
    public const EYE_COLOR_CODE_PNK = 'PNK';
    public const EYE_COLOR_CODE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';
    public const GENDER_MALE = 'Male';
    public const GENDER_FEMALE = 'Female';
    public const GENDER_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentCategoryAllowableValues()
    {
        return [
            self::DOCUMENT_CATEGORY_DRIVER_LICENSE,
            self::DOCUMENT_CATEGORY_DRIVER_PERMIT,
            self::DOCUMENT_CATEGORY_ID_CARD,
            self::DOCUMENT_CATEGORY_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEyeColorCodeAllowableValues()
    {
        return [
            self::EYE_COLOR_CODE_BLK,
            self::EYE_COLOR_CODE_BLU,
            self::EYE_COLOR_CODE_BRO,
            self::EYE_COLOR_CODE_DIC,
            self::EYE_COLOR_CODE_GRY,
            self::EYE_COLOR_CODE_GRN,
            self::EYE_COLOR_CODE_HAZ,
            self::EYE_COLOR_CODE_MAR,
            self::EYE_COLOR_CODE_PNK,
            self::EYE_COLOR_CODE_UNKNOWN_DEFAULT_OPEN_API,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNKNOWN_DEFAULT_OPEN_API,
        ];
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
        $this->setIfExists('id_number', $data ?? [], null);
        $this->setIfExists('issue_state', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('document_category', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('eye_color_code', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('issue_date', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('name_suffix', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('weight_measure', $data ?? [], null);
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

        if ($this->container['id_number'] === null) {
            $invalidProperties[] = "'id_number' can't be null";
        }
        if ($this->container['issue_state'] === null) {
            $invalidProperties[] = "'issue_state' can't be null";
        }
        if (!preg_match("/^[A-Z]{2}$/", $this->container['issue_state'])) {
            $invalidProperties[] = "invalid value for 'issue_state', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        $allowedValues = $this->getDocumentCategoryAllowableValues();
        if (!is_null($this->container['document_category']) && !in_array($this->container['document_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'document_category', must be one of '%s'",
                $this->container['document_category'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEyeColorCodeAllowableValues();
        if (!is_null($this->container['eye_color_code']) && !in_array($this->container['eye_color_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'eye_color_code', must be one of '%s'",
                $this->container['eye_color_code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['state']) && !preg_match("/^[A-Z]{2}$/", $this->container['state'])) {
            $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^[A-Z]{2}$/.";
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
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number Driving licence ID number
     *
     * @return self
     */
    public function setIdNumber($id_number)
    {
        if (is_null($id_number)) {
            throw new \InvalidArgumentException('non-nullable id_number cannot be null');
        }
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets issue_state
     *
     * @return string
     */
    public function getIssueState()
    {
        return $this->container['issue_state'];
    }

    /**
     * Sets issue_state
     *
     * @param string $issue_state Two letter code of issuing state (state-issued driving licenses only)
     *
     * @return self
     */
    public function setIssueState($issue_state)
    {
        if (is_null($issue_state)) {
            throw new \InvalidArgumentException('non-nullable issue_state cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", ObjectSerializer::toString($issue_state)))) {
            throw new \InvalidArgumentException("invalid value for \$issue_state when calling UsDrivingLicenceShared., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['issue_state'] = $issue_state;

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
     * @param string|null $address_line_1 Line 1 of the address
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
     * @param string|null $address_line_2 Line 2 of the address
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the owner's address
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
     * @param \DateTime|null $date_of_birth Date of birth in yyyy-mm-dd format
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
     * Gets document_category
     *
     * @return string|null
     */
    public function getDocumentCategory()
    {
        return $this->container['document_category'];
    }

    /**
     * Sets document_category
     *
     * @param string|null $document_category Document category.
     *
     * @return self
     */
    public function setDocumentCategory($document_category)
    {
        if (is_null($document_category)) {
            throw new \InvalidArgumentException('non-nullable document_category cannot be null');
        }
        $allowedValues = $this->getDocumentCategoryAllowableValues();
        if (!in_array($document_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_category', must be one of '%s'",
                    $document_category,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_category'] = $document_category;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date Expiration date of the driving licence in yyyy-mm-dd format
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets eye_color_code
     *
     * @return string|null
     */
    public function getEyeColorCode()
    {
        return $this->container['eye_color_code'];
    }

    /**
     * Sets eye_color_code
     *
     * @param string|null $eye_color_code Eye color code.
     *
     * @return self
     */
    public function setEyeColorCode($eye_color_code)
    {
        if (is_null($eye_color_code)) {
            throw new \InvalidArgumentException('non-nullable eye_color_code cannot be null');
        }
        $allowedValues = $this->getEyeColorCodeAllowableValues();
        if (!in_array($eye_color_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'eye_color_code', must be one of '%s'",
                    $eye_color_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eye_color_code'] = $eye_color_code;

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
     * @param string|null $first_name The owner's first name
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
        $allowedValues = $this->getGenderAllowableValues();
        if (!in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return \DateTime|null
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param \DateTime|null $issue_date Issue date in yyyy-mm-dd format
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        if (is_null($issue_date)) {
            throw new \InvalidArgumentException('non-nullable issue_date cannot be null');
        }
        $this->container['issue_date'] = $issue_date;

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
     * @param string|null $last_name The owner's surname
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
     * @param string|null $middle_name The owner's middle name
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
     * Gets name_suffix
     *
     * @return string|null
     */
    public function getNameSuffix()
    {
        return $this->container['name_suffix'];
    }

    /**
     * Sets name_suffix
     *
     * @param string|null $name_suffix The owner's name suffix
     *
     * @return self
     */
    public function setNameSuffix($name_suffix)
    {
        if (is_null($name_suffix)) {
            throw new \InvalidArgumentException('non-nullable name_suffix cannot be null');
        }
        $this->container['name_suffix'] = $name_suffix;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postcode or ZIP of the owner's address
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

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
     * @param string|null $state 2-characters state code
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", ObjectSerializer::toString($state)))) {
            throw new \InvalidArgumentException("invalid value for \$state when calling UsDrivingLicenceShared., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets weight_measure
     *
     * @return int|null
     */
    public function getWeightMeasure()
    {
        return $this->container['weight_measure'];
    }

    /**
     * Sets weight_measure
     *
     * @param int|null $weight_measure Weight in pounds
     *
     * @return self
     */
    public function setWeightMeasure($weight_measure)
    {
        if (is_null($weight_measure)) {
            throw new \InvalidArgumentException('non-nullable weight_measure cannot be null');
        }
        $this->container['weight_measure'] = $weight_measure;

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



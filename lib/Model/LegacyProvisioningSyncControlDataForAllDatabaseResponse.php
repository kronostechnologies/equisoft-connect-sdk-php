<?php
/**
 * LegacyProvisioningSyncControlDataForAllDatabaseResponse
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Equisoft /connect API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-equisoft1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Equisoft\SDK\EquisoftConnect\Model;

use \ArrayAccess;
use \Equisoft\SDK\EquisoftConnect\ObjectSerializer;

/**
 * LegacyProvisioningSyncControlDataForAllDatabaseResponse Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LegacyProvisioningSyncControlDataForAllDatabaseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'legacy.provisioning.SyncControlDataForAllDatabaseResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stat' => 'string',
        'errorCode' => 'string',
        'errorMsg' => 'string',
        'status' => 'string',
        'jobId' => 'string',
        'percentage' => 'int',
        'step' => 'int',
        'numberOfStep' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stat' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'status' => null,
        'jobId' => null,
        'percentage' => null,
        'step' => null,
        'numberOfStep' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'stat' => false,
        'errorCode' => false,
        'errorMsg' => false,
        'status' => false,
        'jobId' => false,
        'percentage' => false,
        'step' => false,
        'numberOfStep' => false
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
        'stat' => 'stat',
        'errorCode' => 'error_code',
        'errorMsg' => 'error_msg',
        'status' => 'status',
        'jobId' => 'jobId',
        'percentage' => 'percentage',
        'step' => 'step',
        'numberOfStep' => 'numberOfStep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stat' => 'setStat',
        'errorCode' => 'setErrorCode',
        'errorMsg' => 'setErrorMsg',
        'status' => 'setStatus',
        'jobId' => 'setJobId',
        'percentage' => 'setPercentage',
        'step' => 'setStep',
        'numberOfStep' => 'setNumberOfStep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stat' => 'getStat',
        'errorCode' => 'getErrorCode',
        'errorMsg' => 'getErrorMsg',
        'status' => 'getStatus',
        'jobId' => 'getJobId',
        'percentage' => 'getPercentage',
        'step' => 'getStep',
        'numberOfStep' => 'getNumberOfStep'
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
        $this->setIfExists('stat', $data ?? [], null);
        $this->setIfExists('errorCode', $data ?? [], null);
        $this->setIfExists('errorMsg', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('jobId', $data ?? [], null);
        $this->setIfExists('percentage', $data ?? [], null);
        $this->setIfExists('step', $data ?? [], null);
        $this->setIfExists('numberOfStep', $data ?? [], null);
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
     * Gets stat
     *
     * @return string|null
     */
    public function getStat()
    {
        return $this->container['stat'];
    }

    /**
     * Sets stat
     *
     * @param string|null $stat Status of the request that has been made. Can be 'ok' or 'fail'.
     *
     * @return self
     */
    public function setStat($stat)
    {
        if (is_null($stat)) {
            throw new \InvalidArgumentException('non-nullable stat cannot be null');
        }
        $this->container['stat'] = $stat;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode If the request has failed, this element will contain the error code related to the problem encountered.
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        if (is_null($errorCode)) {
            throw new \InvalidArgumentException('non-nullable errorCode cannot be null');
        }
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorMsg
     *
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
     * Sets errorMsg
     *
     * @param string|null $errorMsg If the request has failed, this element will contain the error message related to the problem encountered.
     *
     * @return self
     */
    public function setErrorMsg($errorMsg)
    {
        if (is_null($errorMsg)) {
            throw new \InvalidArgumentException('non-nullable errorMsg cannot be null');
        }
        $this->container['errorMsg'] = $errorMsg;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Synchronization status.
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
     * Gets jobId
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param string|null $jobId Job identifier.
     *
     * @return self
     */
    public function setJobId($jobId)
    {
        if (is_null($jobId)) {
            throw new \InvalidArgumentException('non-nullable jobId cannot be null');
        }
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return int|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param int|null $percentage Progression percentage.
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        if (is_null($percentage)) {
            throw new \InvalidArgumentException('non-nullable percentage cannot be null');
        }
        $this->container['percentage'] = $percentage;

        return $this;
    }

    /**
     * Gets step
     *
     * @return int|null
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     *
     * @param int|null $step Current step.
     *
     * @return self
     */
    public function setStep($step)
    {
        if (is_null($step)) {
            throw new \InvalidArgumentException('non-nullable step cannot be null');
        }
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets numberOfStep
     *
     * @return int|null
     */
    public function getNumberOfStep()
    {
        return $this->container['numberOfStep'];
    }

    /**
     * Sets numberOfStep
     *
     * @param int|null $numberOfStep Number of steps.
     *
     * @return self
     */
    public function setNumberOfStep($numberOfStep)
    {
        if (is_null($numberOfStep)) {
            throw new \InvalidArgumentException('non-nullable numberOfStep cannot be null');
        }
        $this->container['numberOfStep'] = $numberOfStep;

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



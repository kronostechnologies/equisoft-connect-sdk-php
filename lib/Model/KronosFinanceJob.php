<?php
/**
 * KronosFinanceJob
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.0.1
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
 * KronosFinanceJob Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KronosFinanceJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'kronos.finance.Job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'start' => 'string',
        'end' => 'string',
        'function' => 'string',
        'activityDomain' => 'string',
        'employer' => 'string',
        'annualIncome' => 'string',
        'address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'start' => null,
        'end' => null,
        'function' => null,
        'activityDomain' => null,
        'employer' => null,
        'annualIncome' => null,
        'address' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'start' => 'start',
        'end' => 'end',
        'function' => 'function',
        'activityDomain' => 'activityDomain',
        'employer' => 'employer',
        'annualIncome' => 'annualIncome',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'start' => 'setStart',
        'end' => 'setEnd',
        'function' => 'setFunction',
        'activityDomain' => 'setActivityDomain',
        'employer' => 'setEmployer',
        'annualIncome' => 'setAnnualIncome',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'start' => 'getStart',
        'end' => 'getEnd',
        'function' => 'getFunction',
        'activityDomain' => 'getActivityDomain',
        'employer' => 'getEmployer',
        'annualIncome' => 'getAnnualIncome',
        'address' => 'getAddress'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['function'] = $data['function'] ?? null;
        $this->container['activityDomain'] = $data['activityDomain'] ?? null;
        $this->container['employer'] = $data['employer'] ?? null;
        $this->container['annualIncome'] = $data['annualIncome'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique identifier for a job.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets start
     *
     * @return string|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param string|null $start Start date.
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return string|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param string|null $end End date.
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string|null $function Job designation.
     *
     * @return self
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets activityDomain
     *
     * @return string|null
     */
    public function getActivityDomain()
    {
        return $this->container['activityDomain'];
    }

    /**
     * Sets activityDomain
     *
     * @param string|null $activityDomain Activity domain.
     *
     * @return self
     */
    public function setActivityDomain($activityDomain)
    {
        $this->container['activityDomain'] = $activityDomain;

        return $this;
    }

    /**
     * Gets employer
     *
     * @return string|null
     */
    public function getEmployer()
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param string|null $employer Employer name.
     *
     * @return self
     */
    public function setEmployer($employer)
    {
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets annualIncome
     *
     * @return string|null
     */
    public function getAnnualIncome()
    {
        return $this->container['annualIncome'];
    }

    /**
     * Sets annualIncome
     *
     * @param string|null $annualIncome Annual income.
     *
     * @return self
     */
    public function setAnnualIncome($annualIncome)
    {
        $this->container['annualIncome'] = $annualIncome;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Employer address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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


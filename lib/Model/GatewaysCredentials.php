<?php
/**
 * GatewaysCredentials
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
 * GatewaysCredentials Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GatewaysCredentials implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'gateways.Credentials';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'username' => 'string',
        'password' => 'string',
        'firstName' => 'string',
        'lastName' => 'string',
        'repcode' => 'string',
        'isADealerCode' => 'bool',
        'dealerSystemName' => 'string'
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
        'username' => null,
        'password' => null,
        'firstName' => null,
        'lastName' => null,
        'repcode' => null,
        'isADealerCode' => null,
        'dealerSystemName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'username' => true,
        'password' => true,
        'firstName' => true,
        'lastName' => true,
        'repcode' => true,
        'isADealerCode' => false,
        'dealerSystemName' => false
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
        'username' => 'username',
        'password' => 'password',
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'repcode' => 'repcode',
        'isADealerCode' => 'isADealerCode',
        'dealerSystemName' => 'dealerSystemName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'password' => 'setPassword',
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'repcode' => 'setRepcode',
        'isADealerCode' => 'setIsADealerCode',
        'dealerSystemName' => 'setDealerSystemName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'password' => 'getPassword',
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'repcode' => 'getRepcode',
        'isADealerCode' => 'getIsADealerCode',
        'dealerSystemName' => 'getDealerSystemName'
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
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('repcode', $data ?? [], null);
        $this->setIfExists('isADealerCode', $data ?? [], null);
        $this->setIfExists('dealerSystemName', $data ?? [], null);
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

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Id
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username User name
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            array_push($this->openAPINullablesSetToNull, 'username');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('username', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            array_push($this->openAPINullablesSetToNull, 'password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName First name
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            array_push($this->openAPINullablesSetToNull, 'firstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName Last name
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            array_push($this->openAPINullablesSetToNull, 'lastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets repcode
     *
     * @return string|null
     */
    public function getRepcode()
    {
        return $this->container['repcode'];
    }

    /**
     * Sets repcode
     *
     * @param string|null $repcode Rep code
     *
     * @return self
     */
    public function setRepcode($repcode)
    {
        if (is_null($repcode)) {
            array_push($this->openAPINullablesSetToNull, 'repcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repcode'] = $repcode;

        return $this;
    }

    /**
     * Gets isADealerCode
     *
     * @return bool|null
     */
    public function getIsADealerCode()
    {
        return $this->container['isADealerCode'];
    }

    /**
     * Sets isADealerCode
     *
     * @param bool|null $isADealerCode Is a dealer code
     *
     * @return self
     */
    public function setIsADealerCode($isADealerCode)
    {
        if (is_null($isADealerCode)) {
            throw new \InvalidArgumentException('non-nullable isADealerCode cannot be null');
        }
        $this->container['isADealerCode'] = $isADealerCode;

        return $this;
    }

    /**
     * Gets dealerSystemName
     *
     * @return string|null
     */
    public function getDealerSystemName()
    {
        return $this->container['dealerSystemName'];
    }

    /**
     * Sets dealerSystemName
     *
     * @param string|null $dealerSystemName Dealer system name
     *
     * @return self
     */
    public function setDealerSystemName($dealerSystemName)
    {
        if (is_null($dealerSystemName)) {
            throw new \InvalidArgumentException('non-nullable dealerSystemName cannot be null');
        }
        $this->container['dealerSystemName'] = $dealerSystemName;

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



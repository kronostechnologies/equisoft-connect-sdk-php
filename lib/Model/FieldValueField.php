<?php
/**
 * FieldValueField
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
 * FieldValueField Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FieldValueField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fieldValue.Field';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'label' => '\Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString',
        'description' => '\Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString',
        'isHtml' => 'bool',
        'allowPrivateValue' => 'bool',
        'haveGroup' => 'bool',
        'module' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'label' => null,
        'description' => null,
        'isHtml' => null,
        'allowPrivateValue' => null,
        'haveGroup' => null,
        'module' => null
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
        'name' => 'name',
        'label' => 'label',
        'description' => 'description',
        'isHtml' => 'isHtml',
        'allowPrivateValue' => 'allowPrivateValue',
        'haveGroup' => 'haveGroup',
        'module' => 'module'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'isHtml' => 'setIsHtml',
        'allowPrivateValue' => 'setAllowPrivateValue',
        'haveGroup' => 'setHaveGroup',
        'module' => 'setModule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'isHtml' => 'getIsHtml',
        'allowPrivateValue' => 'getAllowPrivateValue',
        'haveGroup' => 'getHaveGroup',
        'module' => 'getModule'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['isHtml'] = $data['isHtml'] ?? null;
        $this->container['allowPrivateValue'] = $data['allowPrivateValue'] ?? null;
        $this->container['haveGroup'] = $data['haveGroup'] ?? null;
        $this->container['module'] = $data['module'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['isHtml'] === null) {
            $invalidProperties[] = "'isHtml' can't be null";
        }
        if ($this->container['allowPrivateValue'] === null) {
            $invalidProperties[] = "'allowPrivateValue' can't be null";
        }
        if ($this->container['haveGroup'] === null) {
            $invalidProperties[] = "'haveGroup' can't be null";
        }
        if ($this->container['module'] === null) {
            $invalidProperties[] = "'module' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Equisoft\SDK\EquisoftConnect\Model\FieldValueLocalizedString $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets isHtml
     *
     * @return bool
     */
    public function getIsHtml()
    {
        return $this->container['isHtml'];
    }

    /**
     * Sets isHtml
     *
     * @param bool $isHtml isHtml
     *
     * @return self
     */
    public function setIsHtml($isHtml)
    {
        $this->container['isHtml'] = $isHtml;

        return $this;
    }

    /**
     * Gets allowPrivateValue
     *
     * @return bool
     */
    public function getAllowPrivateValue()
    {
        return $this->container['allowPrivateValue'];
    }

    /**
     * Sets allowPrivateValue
     *
     * @param bool $allowPrivateValue allowPrivateValue
     *
     * @return self
     */
    public function setAllowPrivateValue($allowPrivateValue)
    {
        $this->container['allowPrivateValue'] = $allowPrivateValue;

        return $this;
    }

    /**
     * Gets haveGroup
     *
     * @return bool
     */
    public function getHaveGroup()
    {
        return $this->container['haveGroup'];
    }

    /**
     * Sets haveGroup
     *
     * @param bool $haveGroup haveGroup
     *
     * @return self
     */
    public function setHaveGroup($haveGroup)
    {
        $this->container['haveGroup'] = $haveGroup;

        return $this;
    }

    /**
     * Gets module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param string $module module
     *
     * @return self
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

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


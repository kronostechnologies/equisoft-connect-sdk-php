<?php
/**
 * MovementOptions
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
 * MovementOptions Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MovementOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'movement.Options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'copyAllMailMerge' => 'bool',
        'copyAllProduct' => 'bool',
        'copyAllReport' => 'bool',
        'copyAllVD' => 'bool',
        'propagate' => 'bool',
        'ignoreAction' => 'bool',
        'ignoreCommission' => 'bool',
        'ignoreDocument' => 'bool',
        'ignoreFinance' => 'bool',
        'ignoreInsurance' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'copyAllMailMerge' => null,
        'copyAllProduct' => null,
        'copyAllReport' => null,
        'copyAllVD' => null,
        'propagate' => null,
        'ignoreAction' => null,
        'ignoreCommission' => null,
        'ignoreDocument' => null,
        'ignoreFinance' => null,
        'ignoreInsurance' => null
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
        'copyAllMailMerge' => 'copyAllMailMerge',
        'copyAllProduct' => 'copyAllProduct',
        'copyAllReport' => 'copyAllReport',
        'copyAllVD' => 'copyAllVD',
        'propagate' => 'propagate',
        'ignoreAction' => 'ignoreAction',
        'ignoreCommission' => 'ignoreCommission',
        'ignoreDocument' => 'ignoreDocument',
        'ignoreFinance' => 'ignoreFinance',
        'ignoreInsurance' => 'ignoreInsurance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copyAllMailMerge' => 'setCopyAllMailMerge',
        'copyAllProduct' => 'setCopyAllProduct',
        'copyAllReport' => 'setCopyAllReport',
        'copyAllVD' => 'setCopyAllVD',
        'propagate' => 'setPropagate',
        'ignoreAction' => 'setIgnoreAction',
        'ignoreCommission' => 'setIgnoreCommission',
        'ignoreDocument' => 'setIgnoreDocument',
        'ignoreFinance' => 'setIgnoreFinance',
        'ignoreInsurance' => 'setIgnoreInsurance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copyAllMailMerge' => 'getCopyAllMailMerge',
        'copyAllProduct' => 'getCopyAllProduct',
        'copyAllReport' => 'getCopyAllReport',
        'copyAllVD' => 'getCopyAllVD',
        'propagate' => 'getPropagate',
        'ignoreAction' => 'getIgnoreAction',
        'ignoreCommission' => 'getIgnoreCommission',
        'ignoreDocument' => 'getIgnoreDocument',
        'ignoreFinance' => 'getIgnoreFinance',
        'ignoreInsurance' => 'getIgnoreInsurance'
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
        $this->container['copyAllMailMerge'] = $data['copyAllMailMerge'] ?? null;
        $this->container['copyAllProduct'] = $data['copyAllProduct'] ?? null;
        $this->container['copyAllReport'] = $data['copyAllReport'] ?? null;
        $this->container['copyAllVD'] = $data['copyAllVD'] ?? null;
        $this->container['propagate'] = $data['propagate'] ?? null;
        $this->container['ignoreAction'] = $data['ignoreAction'] ?? null;
        $this->container['ignoreCommission'] = $data['ignoreCommission'] ?? null;
        $this->container['ignoreDocument'] = $data['ignoreDocument'] ?? null;
        $this->container['ignoreFinance'] = $data['ignoreFinance'] ?? null;
        $this->container['ignoreInsurance'] = $data['ignoreInsurance'] ?? null;
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
     * Gets copyAllMailMerge
     *
     * @return bool|null
     */
    public function getCopyAllMailMerge()
    {
        return $this->container['copyAllMailMerge'];
    }

    /**
     * Sets copyAllMailMerge
     *
     * @param bool|null $copyAllMailMerge Move all Mail Merge Template.
     *
     * @return self
     */
    public function setCopyAllMailMerge($copyAllMailMerge)
    {
        $this->container['copyAllMailMerge'] = $copyAllMailMerge;

        return $this;
    }

    /**
     * Gets copyAllProduct
     *
     * @return bool|null
     */
    public function getCopyAllProduct()
    {
        return $this->container['copyAllProduct'];
    }

    /**
     * Sets copyAllProduct
     *
     * @param bool|null $copyAllProduct Move all Products.
     *
     * @return self
     */
    public function setCopyAllProduct($copyAllProduct)
    {
        $this->container['copyAllProduct'] = $copyAllProduct;

        return $this;
    }

    /**
     * Gets copyAllReport
     *
     * @return bool|null
     */
    public function getCopyAllReport()
    {
        return $this->container['copyAllReport'];
    }

    /**
     * Sets copyAllReport
     *
     * @param bool|null $copyAllReport Move all reports.
     *
     * @return self
     */
    public function setCopyAllReport($copyAllReport)
    {
        $this->container['copyAllReport'] = $copyAllReport;

        return $this;
    }

    /**
     * Gets copyAllVD
     *
     * @return bool|null
     */
    public function getCopyAllVD()
    {
        return $this->container['copyAllVD'];
    }

    /**
     * Sets copyAllVD
     *
     * @param bool|null $copyAllVD Move all Field Value.
     *
     * @return self
     */
    public function setCopyAllVD($copyAllVD)
    {
        $this->container['copyAllVD'] = $copyAllVD;

        return $this;
    }

    /**
     * Gets propagate
     *
     * @return bool|null
     */
    public function getPropagate()
    {
        return $this->container['propagate'];
    }

    /**
     * Sets propagate
     *
     * @param bool|null $propagate Propagate data before movement.
     *
     * @return self
     */
    public function setPropagate($propagate)
    {
        $this->container['propagate'] = $propagate;

        return $this;
    }

    /**
     * Gets ignoreAction
     *
     * @return bool|null
     */
    public function getIgnoreAction()
    {
        return $this->container['ignoreAction'];
    }

    /**
     * Sets ignoreAction
     *
     * @param bool|null $ignoreAction Ignore all Actions.
     *
     * @return self
     */
    public function setIgnoreAction($ignoreAction)
    {
        $this->container['ignoreAction'] = $ignoreAction;

        return $this;
    }

    /**
     * Gets ignoreCommission
     *
     * @return bool|null
     */
    public function getIgnoreCommission()
    {
        return $this->container['ignoreCommission'];
    }

    /**
     * Sets ignoreCommission
     *
     * @param bool|null $ignoreCommission Ignore all Commissions.
     *
     * @return self
     */
    public function setIgnoreCommission($ignoreCommission)
    {
        $this->container['ignoreCommission'] = $ignoreCommission;

        return $this;
    }

    /**
     * Gets ignoreDocument
     *
     * @return bool|null
     */
    public function getIgnoreDocument()
    {
        return $this->container['ignoreDocument'];
    }

    /**
     * Sets ignoreDocument
     *
     * @param bool|null $ignoreDocument Ignore all Documents.
     *
     * @return self
     */
    public function setIgnoreDocument($ignoreDocument)
    {
        $this->container['ignoreDocument'] = $ignoreDocument;

        return $this;
    }

    /**
     * Gets ignoreFinance
     *
     * @return bool|null
     */
    public function getIgnoreFinance()
    {
        return $this->container['ignoreFinance'];
    }

    /**
     * Sets ignoreFinance
     *
     * @param bool|null $ignoreFinance Ignore all Investments.
     *
     * @return self
     */
    public function setIgnoreFinance($ignoreFinance)
    {
        $this->container['ignoreFinance'] = $ignoreFinance;

        return $this;
    }

    /**
     * Gets ignoreInsurance
     *
     * @return bool|null
     */
    public function getIgnoreInsurance()
    {
        return $this->container['ignoreInsurance'];
    }

    /**
     * Sets ignoreInsurance
     *
     * @param bool|null $ignoreInsurance Ignore all Insurances.
     *
     * @return self
     */
    public function setIgnoreInsurance($ignoreInsurance)
    {
        $this->container['ignoreInsurance'] = $ignoreInsurance;

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


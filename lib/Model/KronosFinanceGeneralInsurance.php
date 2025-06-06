<?php
/**
 * KronosFinanceGeneralInsurance
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
 * KronosFinanceGeneralInsurance Class Doc Comment
 *
 * @category Class
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KronosFinanceGeneralInsurance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'kronos.finance.GeneralInsurance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'policyNb' => 'string',
        'carrier' => 'string',
        'product' => 'string',
        'annualPremium' => 'string',
        'modalPremium' => 'string',
        'premiumMode' => 'string',
        'status' => 'string',
        'issueDate' => 'string',
        'renewalDate' => 'string',
        'followUpDate' => 'string',
        'lastFiveYearsReclamations' => 'int'
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
        'policyNb' => null,
        'carrier' => null,
        'product' => null,
        'annualPremium' => null,
        'modalPremium' => null,
        'premiumMode' => null,
        'status' => null,
        'issueDate' => null,
        'renewalDate' => null,
        'followUpDate' => null,
        'lastFiveYearsReclamations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'policyNb' => false,
        'carrier' => false,
        'product' => false,
        'annualPremium' => false,
        'modalPremium' => false,
        'premiumMode' => false,
        'status' => false,
        'issueDate' => false,
        'renewalDate' => false,
        'followUpDate' => false,
        'lastFiveYearsReclamations' => false
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
        'policyNb' => 'policyNb',
        'carrier' => 'carrier',
        'product' => 'product',
        'annualPremium' => 'annualPremium',
        'modalPremium' => 'modalPremium',
        'premiumMode' => 'premiumMode',
        'status' => 'status',
        'issueDate' => 'issueDate',
        'renewalDate' => 'renewalDate',
        'followUpDate' => 'followUpDate',
        'lastFiveYearsReclamations' => 'lastFiveYearsReclamations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'policyNb' => 'setPolicyNb',
        'carrier' => 'setCarrier',
        'product' => 'setProduct',
        'annualPremium' => 'setAnnualPremium',
        'modalPremium' => 'setModalPremium',
        'premiumMode' => 'setPremiumMode',
        'status' => 'setStatus',
        'issueDate' => 'setIssueDate',
        'renewalDate' => 'setRenewalDate',
        'followUpDate' => 'setFollowUpDate',
        'lastFiveYearsReclamations' => 'setLastFiveYearsReclamations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'policyNb' => 'getPolicyNb',
        'carrier' => 'getCarrier',
        'product' => 'getProduct',
        'annualPremium' => 'getAnnualPremium',
        'modalPremium' => 'getModalPremium',
        'premiumMode' => 'getPremiumMode',
        'status' => 'getStatus',
        'issueDate' => 'getIssueDate',
        'renewalDate' => 'getRenewalDate',
        'followUpDate' => 'getFollowUpDate',
        'lastFiveYearsReclamations' => 'getLastFiveYearsReclamations'
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
        $this->setIfExists('policyNb', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('annualPremium', $data ?? [], null);
        $this->setIfExists('modalPremium', $data ?? [], null);
        $this->setIfExists('premiumMode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('issueDate', $data ?? [], null);
        $this->setIfExists('renewalDate', $data ?? [], null);
        $this->setIfExists('followUpDate', $data ?? [], null);
        $this->setIfExists('lastFiveYearsReclamations', $data ?? [], null);
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
     * @param int|null $id Unique identifier for a general insurance.
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
     * Gets policyNb
     *
     * @return string|null
     */
    public function getPolicyNb()
    {
        return $this->container['policyNb'];
    }

    /**
     * Sets policyNb
     *
     * @param string|null $policyNb Policy number.
     *
     * @return self
     */
    public function setPolicyNb($policyNb)
    {
        if (is_null($policyNb)) {
            throw new \InvalidArgumentException('non-nullable policyNb cannot be null');
        }
        $this->container['policyNb'] = $policyNb;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier Carrier.
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product Product.
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets annualPremium
     *
     * @return string|null
     */
    public function getAnnualPremium()
    {
        return $this->container['annualPremium'];
    }

    /**
     * Sets annualPremium
     *
     * @param string|null $annualPremium Annual premium.
     *
     * @return self
     */
    public function setAnnualPremium($annualPremium)
    {
        if (is_null($annualPremium)) {
            throw new \InvalidArgumentException('non-nullable annualPremium cannot be null');
        }
        $this->container['annualPremium'] = $annualPremium;

        return $this;
    }

    /**
     * Gets modalPremium
     *
     * @return string|null
     */
    public function getModalPremium()
    {
        return $this->container['modalPremium'];
    }

    /**
     * Sets modalPremium
     *
     * @param string|null $modalPremium Modal premium.
     *
     * @return self
     */
    public function setModalPremium($modalPremium)
    {
        if (is_null($modalPremium)) {
            throw new \InvalidArgumentException('non-nullable modalPremium cannot be null');
        }
        $this->container['modalPremium'] = $modalPremium;

        return $this;
    }

    /**
     * Gets premiumMode
     *
     * @return string|null
     */
    public function getPremiumMode()
    {
        return $this->container['premiumMode'];
    }

    /**
     * Sets premiumMode
     *
     * @param string|null $premiumMode Premium mode.
     *
     * @return self
     */
    public function setPremiumMode($premiumMode)
    {
        if (is_null($premiumMode)) {
            throw new \InvalidArgumentException('non-nullable premiumMode cannot be null');
        }
        $this->container['premiumMode'] = $premiumMode;

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
     * @param string|null $status Insurance status.
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
     * Gets issueDate
     *
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
     * Sets issueDate
     *
     * @param string|null $issueDate Issue date.
     *
     * @return self
     */
    public function setIssueDate($issueDate)
    {
        if (is_null($issueDate)) {
            throw new \InvalidArgumentException('non-nullable issueDate cannot be null');
        }
        $this->container['issueDate'] = $issueDate;

        return $this;
    }

    /**
     * Gets renewalDate
     *
     * @return string|null
     */
    public function getRenewalDate()
    {
        return $this->container['renewalDate'];
    }

    /**
     * Sets renewalDate
     *
     * @param string|null $renewalDate Renewal date.
     *
     * @return self
     */
    public function setRenewalDate($renewalDate)
    {
        if (is_null($renewalDate)) {
            throw new \InvalidArgumentException('non-nullable renewalDate cannot be null');
        }
        $this->container['renewalDate'] = $renewalDate;

        return $this;
    }

    /**
     * Gets followUpDate
     *
     * @return string|null
     */
    public function getFollowUpDate()
    {
        return $this->container['followUpDate'];
    }

    /**
     * Sets followUpDate
     *
     * @param string|null $followUpDate Follow up date.
     *
     * @return self
     */
    public function setFollowUpDate($followUpDate)
    {
        if (is_null($followUpDate)) {
            throw new \InvalidArgumentException('non-nullable followUpDate cannot be null');
        }
        $this->container['followUpDate'] = $followUpDate;

        return $this;
    }

    /**
     * Gets lastFiveYearsReclamations
     *
     * @return int|null
     */
    public function getLastFiveYearsReclamations()
    {
        return $this->container['lastFiveYearsReclamations'];
    }

    /**
     * Sets lastFiveYearsReclamations
     *
     * @param int|null $lastFiveYearsReclamations Number of reclamation in the last five years.
     *
     * @return self
     */
    public function setLastFiveYearsReclamations($lastFiveYearsReclamations)
    {
        if (is_null($lastFiveYearsReclamations)) {
            throw new \InvalidArgumentException('non-nullable lastFiveYearsReclamations cannot be null');
        }
        $this->container['lastFiveYearsReclamations'] = $lastFiveYearsReclamations;

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



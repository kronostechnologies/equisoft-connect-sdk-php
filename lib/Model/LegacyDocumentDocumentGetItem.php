<?php
/**
 * LegacyDocumentDocumentGetItem
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
 * LegacyDocumentDocumentGetItem Class Doc Comment
 *
 * @category Class
 * @description Payload needed by the kronos.document.add method {@example addDocumentUpload.xml} payload example
 * @package  Equisoft\SDK\EquisoftConnect
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LegacyDocumentDocumentGetItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'legacy.document.DocumentGetItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'externalKey' => 'string',
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'dateSignature' => 'string',
        'writtenBy' => 'string',
        'notes' => 'string',
        'users' => '\Equisoft\SDK\EquisoftConnect\Model\LegacyUser[]',
        'id' => 'string',
        'type' => 'string',
        'subType' => 'string',
        'name' => 'string',
        'files' => '\Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentFile[]',
        'contacts' => '\Equisoft\SDK\EquisoftConnect\Model\LegacyContactContact[]',
        'createdBy' => 'string',
        'createdOn' => 'string',
        'modifiedBy' => 'string',
        'modifiedOn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'externalKey' => null,
        'dateStart' => null,
        'dateEnd' => null,
        'dateSignature' => null,
        'writtenBy' => null,
        'notes' => null,
        'users' => null,
        'id' => null,
        'type' => null,
        'subType' => null,
        'name' => null,
        'files' => null,
        'contacts' => null,
        'createdBy' => null,
        'createdOn' => null,
        'modifiedBy' => null,
        'modifiedOn' => null
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
        'externalKey' => 'externalKey',
        'dateStart' => 'dateStart',
        'dateEnd' => 'dateEnd',
        'dateSignature' => 'dateSignature',
        'writtenBy' => 'writtenBy',
        'notes' => 'notes',
        'users' => 'users',
        'id' => 'id',
        'type' => 'type',
        'subType' => 'subType',
        'name' => 'name',
        'files' => 'files',
        'contacts' => 'contacts',
        'createdBy' => 'createdBy',
        'createdOn' => 'createdOn',
        'modifiedBy' => 'modifiedBy',
        'modifiedOn' => 'modifiedOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'externalKey' => 'setExternalKey',
        'dateStart' => 'setDateStart',
        'dateEnd' => 'setDateEnd',
        'dateSignature' => 'setDateSignature',
        'writtenBy' => 'setWrittenBy',
        'notes' => 'setNotes',
        'users' => 'setUsers',
        'id' => 'setId',
        'type' => 'setType',
        'subType' => 'setSubType',
        'name' => 'setName',
        'files' => 'setFiles',
        'contacts' => 'setContacts',
        'createdBy' => 'setCreatedBy',
        'createdOn' => 'setCreatedOn',
        'modifiedBy' => 'setModifiedBy',
        'modifiedOn' => 'setModifiedOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'externalKey' => 'getExternalKey',
        'dateStart' => 'getDateStart',
        'dateEnd' => 'getDateEnd',
        'dateSignature' => 'getDateSignature',
        'writtenBy' => 'getWrittenBy',
        'notes' => 'getNotes',
        'users' => 'getUsers',
        'id' => 'getId',
        'type' => 'getType',
        'subType' => 'getSubType',
        'name' => 'getName',
        'files' => 'getFiles',
        'contacts' => 'getContacts',
        'createdBy' => 'getCreatedBy',
        'createdOn' => 'getCreatedOn',
        'modifiedBy' => 'getModifiedBy',
        'modifiedOn' => 'getModifiedOn'
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
        $this->container['externalKey'] = $data['externalKey'] ?? null;
        $this->container['dateStart'] = $data['dateStart'] ?? null;
        $this->container['dateEnd'] = $data['dateEnd'] ?? null;
        $this->container['dateSignature'] = $data['dateSignature'] ?? null;
        $this->container['writtenBy'] = $data['writtenBy'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['subType'] = $data['subType'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['files'] = $data['files'] ?? null;
        $this->container['contacts'] = $data['contacts'] ?? null;
        $this->container['createdBy'] = $data['createdBy'] ?? null;
        $this->container['createdOn'] = $data['createdOn'] ?? null;
        $this->container['modifiedBy'] = $data['modifiedBy'] ?? null;
        $this->container['modifiedOn'] = $data['modifiedOn'] ?? null;
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
     * Gets externalKey
     *
     * @return string|null
     */
    public function getExternalKey()
    {
        return $this->container['externalKey'];
    }

    /**
     * Sets externalKey
     *
     * @param string|null $externalKey External key of the document.
     *
     * @return self
     */
    public function setExternalKey($externalKey)
    {
        $this->container['externalKey'] = $externalKey;

        return $this;
    }

    /**
     * Gets dateStart
     *
     * @return string|null
     */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
     * Sets dateStart
     *
     * @param string|null $dateStart Date start of the document.
     *
     * @return self
     */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;

        return $this;
    }

    /**
     * Gets dateEnd
     *
     * @return string|null
     */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
     * Sets dateEnd
     *
     * @param string|null $dateEnd Date end of the document.
     *
     * @return self
     */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;

        return $this;
    }

    /**
     * Gets dateSignature
     *
     * @return string|null
     */
    public function getDateSignature()
    {
        return $this->container['dateSignature'];
    }

    /**
     * Sets dateSignature
     *
     * @param string|null $dateSignature Date signature of the document.
     *
     * @return self
     */
    public function setDateSignature($dateSignature)
    {
        $this->container['dateSignature'] = $dateSignature;

        return $this;
    }

    /**
     * Gets writtenBy
     *
     * @return string|null
     */
    public function getWrittenBy()
    {
        return $this->container['writtenBy'];
    }

    /**
     * Sets writtenBy
     *
     * @param string|null $writtenBy Author of the document.
     *
     * @return self
     */
    public function setWrittenBy($writtenBy)
    {
        $this->container['writtenBy'] = $writtenBy;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes of the document.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Equisoft\SDK\EquisoftConnect\Model\LegacyUser[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Equisoft\SDK\EquisoftConnect\Model\LegacyUser[]|null $users Users related to the document.
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id of the document.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the document.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subType
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['subType'];
    }

    /**
     * Sets subType
     *
     * @param string|null $subType Subtype of the document.
     *
     * @return self
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the document.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentFile[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Equisoft\SDK\EquisoftConnect\Model\LegacyDocumentFile[]|null $files Files contained inside the document.
     *
     * @return self
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContact[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Equisoft\SDK\EquisoftConnect\Model\LegacyContactContact[]|null $contacts List of linked contacts.
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy Email of user who created the document.
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets createdOn
     *
     * @return string|null
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     *
     * @param string|null $createdOn Date of creation of the document.
     *
     * @return self
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return string|null
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param string|null $modifiedBy Email of user who last modified the document.
     *
     * @return self
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets modifiedOn
     *
     * @return string|null
     */
    public function getModifiedOn()
    {
        return $this->container['modifiedOn'];
    }

    /**
     * Sets modifiedOn
     *
     * @param string|null $modifiedOn Date of the last modification of the document.
     *
     * @return self
     */
    public function setModifiedOn($modifiedOn)
    {
        $this->container['modifiedOn'] = $modifiedOn;

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


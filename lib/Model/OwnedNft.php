<?php
/**
 * OwnedNft
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  blockmate
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blockmate
 *
 * Blockmate API OpenAPI documentation
 *
 * The version of the OpenAPI document: 0.0.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace blockmate\Model;

use \ArrayAccess;
use \blockmate\ObjectSerializer;

/**
 * OwnedNft Class Doc Comment
 *
 * @category Class
 * @description OwnedNft
 * @package  blockmate
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OwnedNft implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OwnedNft';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract' => '\blockmate\Model\OwnedNftContract',
        'id' => '\blockmate\Model\NftId',
        'balance' => 'string',
        'title' => 'string',
        'description' => 'string',
        'token_uri' => '\blockmate\Model\NftTokenUri',
        'media' => '\blockmate\Model\OwnedNftMedia',
        'metadata' => '\blockmate\Model\Metadata',
        'time_last_updated' => 'string',
        'error' => 'string',
        'contract_metadata' => '\blockmate\Model\NftContractMetadata',
        'spam_info' => '\blockmate\Model\NftSpamInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contract' => null,
        'id' => null,
        'balance' => null,
        'title' => null,
        'description' => null,
        'token_uri' => null,
        'media' => null,
        'metadata' => null,
        'time_last_updated' => null,
        'error' => null,
        'contract_metadata' => null,
        'spam_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contract' => false,
		'id' => false,
		'balance' => false,
		'title' => false,
		'description' => false,
		'token_uri' => false,
		'media' => false,
		'metadata' => false,
		'time_last_updated' => false,
		'error' => false,
		'contract_metadata' => false,
		'spam_info' => false
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
        'contract' => 'contract',
        'id' => 'id',
        'balance' => 'balance',
        'title' => 'title',
        'description' => 'description',
        'token_uri' => 'tokenUri',
        'media' => 'media',
        'metadata' => 'metadata',
        'time_last_updated' => 'timeLastUpdated',
        'error' => 'error',
        'contract_metadata' => 'contractMetadata',
        'spam_info' => 'spamInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'id' => 'setId',
        'balance' => 'setBalance',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'token_uri' => 'setTokenUri',
        'media' => 'setMedia',
        'metadata' => 'setMetadata',
        'time_last_updated' => 'setTimeLastUpdated',
        'error' => 'setError',
        'contract_metadata' => 'setContractMetadata',
        'spam_info' => 'setSpamInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'id' => 'getId',
        'balance' => 'getBalance',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'token_uri' => 'getTokenUri',
        'media' => 'getMedia',
        'metadata' => 'getMetadata',
        'time_last_updated' => 'getTimeLastUpdated',
        'error' => 'getError',
        'contract_metadata' => 'getContractMetadata',
        'spam_info' => 'getSpamInfo'
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
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('token_uri', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('time_last_updated', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('contract_metadata', $data ?? [], null);
        $this->setIfExists('spam_info', $data ?? [], null);
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
     * Gets contract
     *
     * @return \blockmate\Model\OwnedNftContract|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \blockmate\Model\OwnedNftContract|null $contract contract
     *
     * @return self
     */
    public function setContract($contract)
    {

        if (is_null($contract)) {
            throw new \InvalidArgumentException('non-nullable contract cannot be null');
        }

        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \blockmate\Model\NftId|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \blockmate\Model\NftId|null $id id
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
     * Gets balance
     *
     * @return string|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string|null $balance String - Token balance
     *
     * @return self
     */
    public function setBalance($balance)
    {

        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }

        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title String - Name of the NFT asset.
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description String - Brief human-readable description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets token_uri
     *
     * @return \blockmate\Model\NftTokenUri|null
     */
    public function getTokenUri()
    {
        return $this->container['token_uri'];
    }

    /**
     * Sets token_uri
     *
     * @param \blockmate\Model\NftTokenUri|null $token_uri token_uri
     *
     * @return self
     */
    public function setTokenUri($token_uri)
    {

        if (is_null($token_uri)) {
            throw new \InvalidArgumentException('non-nullable token_uri cannot be null');
        }

        $this->container['token_uri'] = $token_uri;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \blockmate\Model\OwnedNftMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \blockmate\Model\OwnedNftMedia|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {

        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }

        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \blockmate\Model\Metadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \blockmate\Model\Metadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {

        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets time_last_updated
     *
     * @return string|null
     */
    public function getTimeLastUpdated()
    {
        return $this->container['time_last_updated'];
    }

    /**
     * Sets time_last_updated
     *
     * @param string|null $time_last_updated String - ISO timestamp of the last cache refresh for the information returned in the metadata field.
     *
     * @return self
     */
    public function setTimeLastUpdated($time_last_updated)
    {

        if (is_null($time_last_updated)) {
            throw new \InvalidArgumentException('non-nullable time_last_updated cannot be null');
        }

        $this->container['time_last_updated'] = $time_last_updated;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error String - A string describing a particular reason that we were unable to fetch complete metadata for the NFT.
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
     * Gets contract_metadata
     *
     * @return \blockmate\Model\NftContractMetadata|null
     */
    public function getContractMetadata()
    {
        return $this->container['contract_metadata'];
    }

    /**
     * Sets contract_metadata
     *
     * @param \blockmate\Model\NftContractMetadata|null $contract_metadata contract_metadata
     *
     * @return self
     */
    public function setContractMetadata($contract_metadata)
    {

        if (is_null($contract_metadata)) {
            throw new \InvalidArgumentException('non-nullable contract_metadata cannot be null');
        }

        $this->container['contract_metadata'] = $contract_metadata;

        return $this;
    }

    /**
     * Gets spam_info
     *
     * @return \blockmate\Model\NftSpamInfo|null
     */
    public function getSpamInfo()
    {
        return $this->container['spam_info'];
    }

    /**
     * Sets spam_info
     *
     * @param \blockmate\Model\NftSpamInfo|null $spam_info spam_info
     *
     * @return self
     */
    public function setSpamInfo($spam_info)
    {

        if (is_null($spam_info)) {
            throw new \InvalidArgumentException('non-nullable spam_info cannot be null');
        }

        $this->container['spam_info'] = $spam_info;

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


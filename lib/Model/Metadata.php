<?php
/**
 * Metadata
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
 * The version of the OpenAPI document: 0.0.2
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
 * Metadata Class Doc Comment
 *
 * @category Class
 * @description String - Relevant metadata for NFT contract. This is useful for viewing image url, traits, etc. without having to follow the metadata url in tokenUri to parse manually.
 * @package  blockmate
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Metadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'metadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image' => 'string',
        'external_url' => 'string',
        'background_color' => 'string',
        'name' => 'string',
        'description' => 'string',
        'attributes' => '\blockmate\Model\MetadataAttributesInner[]',
        'media' => '\blockmate\Model\NftMedia'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'image' => null,
        'external_url' => null,
        'background_color' => null,
        'name' => null,
        'description' => null,
        'attributes' => null,
        'media' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'image' => false,
		'external_url' => false,
		'background_color' => false,
		'name' => false,
		'description' => false,
		'attributes' => false,
		'media' => false
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
        'image' => 'image',
        'external_url' => 'external_url',
        'background_color' => 'background_color',
        'name' => 'name',
        'description' => 'description',
        'attributes' => 'attributes',
        'media' => 'media'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'external_url' => 'setExternalUrl',
        'background_color' => 'setBackgroundColor',
        'name' => 'setName',
        'description' => 'setDescription',
        'attributes' => 'setAttributes',
        'media' => 'setMedia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'external_url' => 'getExternalUrl',
        'background_color' => 'getBackgroundColor',
        'name' => 'getName',
        'description' => 'getDescription',
        'attributes' => 'getAttributes',
        'media' => 'getMedia'
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
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('external_url', $data ?? [], null);
        $this->setIfExists('background_color', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
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
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image String - URL to the NFT asset image. Can be standard URLs pointing to images on conventional servers, IPFS, or Arweave. Most types of images (SVGs, PNGs, JPEGs, etc.) are supported by NFT marketplaces.
     *
     * @return self
     */
    public function setImage($image)
    {

        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets external_url
     *
     * @return string|null
     */
    public function getExternalUrl()
    {
        return $this->container['external_url'];
    }

    /**
     * Sets external_url
     *
     * @param string|null $external_url String - The image URL that appears alongside the asset image on NFT platforms.
     *
     * @return self
     */
    public function setExternalUrl($external_url)
    {

        if (is_null($external_url)) {
            throw new \InvalidArgumentException('non-nullable external_url cannot be null');
        }

        $this->container['external_url'] = $external_url;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string|null $background_color String - Background color of the NFT item. Usually must be defined as a six-character hexadecimal.
     *
     * @return self
     */
    public function setBackgroundColor($background_color)
    {

        if (is_null($background_color)) {
            throw new \InvalidArgumentException('non-nullable background_color cannot be null');
        }

        $this->container['background_color'] = $background_color;

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
     * @param string|null $name String - Name of the NFT asset.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

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
     * @param string|null $description String - Human-readable description of the NFT asset. (Markdown is supported/rendered on OpenSea and other NFT platforms)
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
     * Gets attributes
     *
     * @return \blockmate\Model\MetadataAttributesInner[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \blockmate\Model\MetadataAttributesInner[]|null $attributes Object - Traits/attributes/characteristics for each NFT asset.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {

        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }

        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \blockmate\Model\NftMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \blockmate\Model\NftMedia|null $media media
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



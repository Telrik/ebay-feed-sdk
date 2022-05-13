<?php

/**
 * CreateOrderTaskRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
/**
 * Feed API
 *
 * <p>The <strong>Feed API</strong> lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.</p>
 *
 * The version of the OpenAPI document: v1.3.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-beta
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace OpenAPI\Client\Model;

use ArrayAccess;
use OpenAPI\Client\ObjectSerializer;
/**
 * CreateOrderTaskRequest Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the &lt;b&gt; createOrderTask&lt;/b&gt; request.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateOrderTaskRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateOrderTaskRequest';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = ['feed_type' => 'string', 'filter_criteria' => '\\OpenAPI\\Client\\Model\\OrderFilterCriteria', 'schema_version' => 'string'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = ['feed_type' => null, 'filter_criteria' => null, 'schema_version' => null];
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
    protected static $attributeMap = ['feed_type' => 'feedType', 'filter_criteria' => 'filterCriteria', 'schema_version' => 'schemaVersion'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['feed_type' => 'setFeedType', 'filter_criteria' => 'setFilterCriteria', 'schema_version' => 'setSchemaVersion'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['feed_type' => 'getFeedType', 'filter_criteria' => 'getFilterCriteria', 'schema_version' => 'getSchemaVersion'];
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
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['filter_criteria'] = isset($data['filter_criteria']) ? $data['filter_criteria'] : null;
        $this->container['schema_version'] = isset($data['schema_version']) ? $data['schema_version'] : null;
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
     * Gets feed_type
     *
     * @return string|null
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }
    /**
     * Sets feed_type
     *
     * @param string|null $feed_type The feed type associated with the task. The only presently supported value is <code>LMS_ORDER_REPORT</code>. See <a href=\"/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types\" target=\"_blank\">Report download feed types</a> for more information.
     *
     * @return self
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;
        return $this;
    }
    /**
     * Gets filter_criteria
     *
     * @return \OpenAPI\Client\Model\OrderFilterCriteria|null
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }
    /**
     * Sets filter_criteria
     *
     * @param \OpenAPI\Client\Model\OrderFilterCriteria|null $filter_criteria filter_criteria
     *
     * @return self
     */
    public function setFilterCriteria($filter_criteria)
    {
        $this->container['filter_criteria'] = $filter_criteria;
        return $this;
    }
    /**
     * Gets schema_version
     *
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }
    /**
     * Sets schema_version
     *
     * @param string|null $schema_version The schema version of the LMS OrderReport. For the <code>LMS_ORDER_REPORT</code> feed type, see the <a href=\"https://developer.ebay.com/devzone/merchant-data/CallRef/OrderReport.html#OrderReport\">OrderReport</a> reference page to see the present schema version. The <b> schemaVersion</b> value is the version number shown at the top of the <b> OrderReport</b> page. <br /><br /><b>Restriction: </b> This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after '1113' is '1115'.
     *
     * @return self
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
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
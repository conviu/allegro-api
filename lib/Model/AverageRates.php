<?php
/**
 * AverageRates
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * AverageRates Class Doc Comment
 *
 * @category Class
 * @description The rates broken down into detailed categories. Note that this information is only available if the seller has received enough detailed ratings.
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AverageRates implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AverageRates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery' => 'float',
        'delivery_cost' => 'float',
        'description' => 'float',
        'service' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery' => 'double',
        'delivery_cost' => 'double',
        'description' => 'double',
        'service' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delivery' => false,
        'delivery_cost' => false,
        'description' => false,
        'service' => false
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
        'delivery' => 'delivery',
        'delivery_cost' => 'deliveryCost',
        'description' => 'description',
        'service' => 'service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery' => 'setDelivery',
        'delivery_cost' => 'setDeliveryCost',
        'description' => 'setDescription',
        'service' => 'setService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery' => 'getDelivery',
        'delivery_cost' => 'getDeliveryCost',
        'description' => 'getDescription',
        'service' => 'getService'
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
        $this->setIfExists('delivery', $data ?? [], null);
        $this->setIfExists('delivery_cost', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('service', $data ?? [], null);
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

        if (!is_null($this->container['delivery']) && ($this->container['delivery'] > 5)) {
            $invalidProperties[] = "invalid value for 'delivery', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['delivery']) && ($this->container['delivery'] < 0)) {
            $invalidProperties[] = "invalid value for 'delivery', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['delivery_cost']) && ($this->container['delivery_cost'] > 5)) {
            $invalidProperties[] = "invalid value for 'delivery_cost', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['delivery_cost']) && ($this->container['delivery_cost'] < 0)) {
            $invalidProperties[] = "invalid value for 'delivery_cost', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['description']) && ($this->container['description'] > 5)) {
            $invalidProperties[] = "invalid value for 'description', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['description']) && ($this->container['description'] < 0)) {
            $invalidProperties[] = "invalid value for 'description', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['service']) && ($this->container['service'] > 5)) {
            $invalidProperties[] = "invalid value for 'service', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['service']) && ($this->container['service'] < 0)) {
            $invalidProperties[] = "invalid value for 'service', must be bigger than or equal to 0.";
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
     * Gets delivery
     *
     * @return float|null
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param float|null $delivery The average value of delivery rate.
     *
     * @return self
     */
    public function setDelivery($delivery)
    {
        if (is_null($delivery)) {
            throw new \InvalidArgumentException('non-nullable delivery cannot be null');
        }

        if (($delivery > 5)) {
            throw new \InvalidArgumentException('invalid value for $delivery when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (($delivery < 0)) {
            throw new \InvalidArgumentException('invalid value for $delivery when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return float|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param float|null $delivery_cost The average value of delivery cost rate.
     *
     * @return self
     */
    public function setDeliveryCost($delivery_cost)
    {
        if (is_null($delivery_cost)) {
            throw new \InvalidArgumentException('non-nullable delivery_cost cannot be null');
        }

        if (($delivery_cost > 5)) {
            throw new \InvalidArgumentException('invalid value for $delivery_cost when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (($delivery_cost < 0)) {
            throw new \InvalidArgumentException('invalid value for $delivery_cost when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets description
     *
     * @return float|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param float|null $description The average value of description rate.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        if (($description > 5)) {
            throw new \InvalidArgumentException('invalid value for $description when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (($description < 0)) {
            throw new \InvalidArgumentException('invalid value for $description when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets service
     *
     * @return float|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param float|null $service The average value of service rate.
     *
     * @return self
     */
    public function setService($service)
    {
        if (is_null($service)) {
            throw new \InvalidArgumentException('non-nullable service cannot be null');
        }

        if (($service > 5)) {
            throw new \InvalidArgumentException('invalid value for $service when calling AverageRates., must be smaller than or equal to 5.');
        }
        if (($service < 0)) {
            throw new \InvalidArgumentException('invalid value for $service when calling AverageRates., must be bigger than or equal to 0.');
        }

        $this->container['service'] = $service;

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



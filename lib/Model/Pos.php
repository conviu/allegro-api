<?php
/**
 * Pos
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
 * Pos Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Pos implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'external_id' => 'string',
        'name' => 'string',
        'seller' => '\AllegroApi\Model\Seller',
        'type' => 'string',
        'address' => '\AllegroApi\Model\Address',
        'phone_number' => 'string',
        'email' => 'string',
        'locations' => '\AllegroApi\Model\PosLocation[]',
        'open_hours' => '\AllegroApi\Model\OpenHour[]',
        'service_time' => 'string',
        'payments' => '\AllegroApi\Model\Payment[]',
        'confirmation_type' => 'string',
        'status' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string'
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
        'external_id' => null,
        'name' => null,
        'seller' => null,
        'type' => null,
        'address' => null,
        'phone_number' => null,
        'email' => null,
        'locations' => null,
        'open_hours' => null,
        'service_time' => null,
        'payments' => null,
        'confirmation_type' => null,
        'status' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'external_id' => false,
        'name' => false,
        'seller' => false,
        'type' => false,
        'address' => false,
        'phone_number' => false,
        'email' => false,
        'locations' => false,
        'open_hours' => false,
        'service_time' => false,
        'payments' => false,
        'confirmation_type' => false,
        'status' => false,
        'created_at' => false,
        'updated_at' => false
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
        'external_id' => 'externalId',
        'name' => 'name',
        'seller' => 'seller',
        'type' => 'type',
        'address' => 'address',
        'phone_number' => 'phoneNumber',
        'email' => 'email',
        'locations' => 'locations',
        'open_hours' => 'openHours',
        'service_time' => 'serviceTime',
        'payments' => 'payments',
        'confirmation_type' => 'confirmationType',
        'status' => 'status',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'name' => 'setName',
        'seller' => 'setSeller',
        'type' => 'setType',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'locations' => 'setLocations',
        'open_hours' => 'setOpenHours',
        'service_time' => 'setServiceTime',
        'payments' => 'setPayments',
        'confirmation_type' => 'setConfirmationType',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'name' => 'getName',
        'seller' => 'getSeller',
        'type' => 'getType',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'locations' => 'getLocations',
        'open_hours' => 'getOpenHours',
        'service_time' => 'getServiceTime',
        'payments' => 'getPayments',
        'confirmation_type' => 'getConfirmationType',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('locations', $data ?? [], null);
        $this->setIfExists('open_hours', $data ?? [], null);
        $this->setIfExists('service_time', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('confirmation_type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 80)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 80)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 16)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['open_hours'] === null) {
            $invalidProperties[] = "'open_hours' can't be null";
        }
        if ($this->container['confirmation_type'] === null) {
            $invalidProperties[] = "'confirmation_type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id UUID. When creating a point of service (Post) the field is ignored. It is required when updating (Put) a point of service.
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
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id ID from external client system.
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        if ((mb_strlen($external_id) > 80)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling Pos., must be smaller than or equal to 80.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Pos., must be smaller than or equal to 80.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \AllegroApi\Model\Seller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \AllegroApi\Model\Seller|null $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Indicates point type. The only valid value so far is PICKUP_POINT.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \AllegroApi\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \AllegroApi\Model\Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 16)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Pos., must be smaller than or equal to 16.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 64)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Pos., must be smaller than or equal to 64.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \AllegroApi\Model\PosLocation[]|null
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \AllegroApi\Model\PosLocation[]|null $locations IDs for a location. When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return self
     */
    public function setLocations($locations)
    {
        if (is_null($locations)) {
            throw new \InvalidArgumentException('non-nullable locations cannot be null');
        }
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets open_hours
     *
     * @return \AllegroApi\Model\OpenHour[]
     */
    public function getOpenHours()
    {
        return $this->container['open_hours'];
    }

    /**
     * Sets open_hours
     *
     * @param \AllegroApi\Model\OpenHour[] $open_hours Possible empty list of opening hours.
     *
     * @return self
     */
    public function setOpenHours($open_hours)
    {
        if (is_null($open_hours)) {
            throw new \InvalidArgumentException('non-nullable open_hours cannot be null');
        }
        $this->container['open_hours'] = $open_hours;

        return $this;
    }

    /**
     * Gets service_time
     *
     * @return string|null
     */
    public function getServiceTime()
    {
        return $this->container['service_time'];
    }

    /**
     * Sets service_time
     *
     * @param string|null $service_time Delivery time / Time period for receipt. Date format ISO 8601 e.g. 'PT24H'
     *
     * @return self
     */
    public function setServiceTime($service_time)
    {
        if (is_null($service_time)) {
            throw new \InvalidArgumentException('non-nullable service_time cannot be null');
        }
        $this->container['service_time'] = $service_time;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \AllegroApi\Model\Payment[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \AllegroApi\Model\Payment[]|null $payments An empty list of payment types is available.
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets confirmation_type
     *
     * @return string
     */
    public function getConfirmationType()
    {
        return $this->container['confirmation_type'];
    }

    /**
     * Sets confirmation_type
     *
     * @param string $confirmation_type Confirmation method: AWAIT_CONTACT - We will inform you about the time of receipt, CALL_US - Please make an appointment, CONTACT_NOT_REQUIRED - Contact is not required.
     *
     * @return self
     */
    public function setConfirmationType($confirmation_type)
    {
        if (is_null($confirmation_type)) {
            throw new \InvalidArgumentException('non-nullable confirmation_type cannot be null');
        }
        $this->container['confirmation_type'] = $confirmation_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Point of service status: ACTIVE - active, TEMPORARILY_CLOSED - temporarily closed, CLOSED_DOWN - closed down, DELETED - deleted.
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
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Creation date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Modification date. Date format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ When creating (Post) or updating (Put) a point of service the field is ignored.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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



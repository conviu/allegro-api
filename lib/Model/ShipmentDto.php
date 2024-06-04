<?php
/**
 * ShipmentDto
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
 * ShipmentDto Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipmentDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'delivery_method_id' => 'string',
        'credentials_id' => 'string',
        'sender' => '\AllegroApi\Model\SenderAddressDto',
        'receiver' => '\AllegroApi\Model\ReceiverAddressDto',
        'pickup' => '\AllegroApi\Model\PickupAddressDto',
        'reference_number' => 'string',
        'description' => 'string',
        'packages' => '\AllegroApi\Model\PackageDto[]',
        'insurance' => '\AllegroApi\Model\InsuranceDto',
        'cash_on_delivery' => '\AllegroApi\Model\CashOnDeliveryDto',
        'created_date' => 'string',
        'canceled_date' => 'string',
        'carrier' => 'string',
        'label_format' => 'string',
        'additional_services' => 'string[]',
        'additional_properties' => 'array<string,string>'
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
        'delivery_method_id' => null,
        'credentials_id' => null,
        'sender' => null,
        'receiver' => null,
        'pickup' => null,
        'reference_number' => null,
        'description' => null,
        'packages' => null,
        'insurance' => null,
        'cash_on_delivery' => null,
        'created_date' => null,
        'canceled_date' => null,
        'carrier' => null,
        'label_format' => null,
        'additional_services' => null,
        'additional_properties' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'delivery_method_id' => false,
        'credentials_id' => false,
        'sender' => false,
        'receiver' => false,
        'pickup' => false,
        'reference_number' => false,
        'description' => false,
        'packages' => false,
        'insurance' => false,
        'cash_on_delivery' => false,
        'created_date' => false,
        'canceled_date' => false,
        'carrier' => false,
        'label_format' => false,
        'additional_services' => false,
        'additional_properties' => false
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
        'delivery_method_id' => 'deliveryMethodId',
        'credentials_id' => 'credentialsId',
        'sender' => 'sender',
        'receiver' => 'receiver',
        'pickup' => 'pickup',
        'reference_number' => 'referenceNumber',
        'description' => 'description',
        'packages' => 'packages',
        'insurance' => 'insurance',
        'cash_on_delivery' => 'cashOnDelivery',
        'created_date' => 'createdDate',
        'canceled_date' => 'canceledDate',
        'carrier' => 'carrier',
        'label_format' => 'labelFormat',
        'additional_services' => 'additionalServices',
        'additional_properties' => 'additionalProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'delivery_method_id' => 'setDeliveryMethodId',
        'credentials_id' => 'setCredentialsId',
        'sender' => 'setSender',
        'receiver' => 'setReceiver',
        'pickup' => 'setPickup',
        'reference_number' => 'setReferenceNumber',
        'description' => 'setDescription',
        'packages' => 'setPackages',
        'insurance' => 'setInsurance',
        'cash_on_delivery' => 'setCashOnDelivery',
        'created_date' => 'setCreatedDate',
        'canceled_date' => 'setCanceledDate',
        'carrier' => 'setCarrier',
        'label_format' => 'setLabelFormat',
        'additional_services' => 'setAdditionalServices',
        'additional_properties' => 'setAdditionalProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'delivery_method_id' => 'getDeliveryMethodId',
        'credentials_id' => 'getCredentialsId',
        'sender' => 'getSender',
        'receiver' => 'getReceiver',
        'pickup' => 'getPickup',
        'reference_number' => 'getReferenceNumber',
        'description' => 'getDescription',
        'packages' => 'getPackages',
        'insurance' => 'getInsurance',
        'cash_on_delivery' => 'getCashOnDelivery',
        'created_date' => 'getCreatedDate',
        'canceled_date' => 'getCanceledDate',
        'carrier' => 'getCarrier',
        'label_format' => 'getLabelFormat',
        'additional_services' => 'getAdditionalServices',
        'additional_properties' => 'getAdditionalProperties'
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

    public const LABEL_FORMAT_ZPL = 'ZPL';
    public const LABEL_FORMAT_EPL = 'EPL';
    public const LABEL_FORMAT_PDF = 'PDF';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues()
    {
        return [
            self::LABEL_FORMAT_ZPL,
            self::LABEL_FORMAT_EPL,
            self::LABEL_FORMAT_PDF,
        ];
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
        $this->setIfExists('delivery_method_id', $data ?? [], null);
        $this->setIfExists('credentials_id', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('receiver', $data ?? [], null);
        $this->setIfExists('pickup', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('packages', $data ?? [], null);
        $this->setIfExists('insurance', $data ?? [], null);
        $this->setIfExists('cash_on_delivery', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('canceled_date', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('label_format', $data ?? [], null);
        $this->setIfExists('additional_services', $data ?? [], null);
        $this->setIfExists('additional_properties', $data ?? [], null);
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

        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label_format', must be one of '%s'",
                $this->container['label_format'],
                implode("', '", $allowedValues)
            );
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
     * @param string|null $id id
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
     * Gets delivery_method_id
     *
     * @return string|null
     */
    public function getDeliveryMethodId()
    {
        return $this->container['delivery_method_id'];
    }

    /**
     * Sets delivery_method_id
     *
     * @param string|null $delivery_method_id Id of delivery method, chosen by buyer in order.
     *
     * @return self
     */
    public function setDeliveryMethodId($delivery_method_id)
    {
        if (is_null($delivery_method_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_method_id cannot be null');
        }
        $this->container['delivery_method_id'] = $delivery_method_id;

        return $this;
    }

    /**
     * Gets credentials_id
     *
     * @return string|null
     */
    public function getCredentialsId()
    {
        return $this->container['credentials_id'];
    }

    /**
     * Sets credentials_id
     *
     * @param string|null $credentials_id ID of merchant agreement, registered in WZA. For Allegro methods, this field is null.
     *
     * @return self
     */
    public function setCredentialsId($credentials_id)
    {
        if (is_null($credentials_id)) {
            throw new \InvalidArgumentException('non-nullable credentials_id cannot be null');
        }
        $this->container['credentials_id'] = $credentials_id;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \AllegroApi\Model\SenderAddressDto|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \AllegroApi\Model\SenderAddressDto|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        if (is_null($sender)) {
            throw new \InvalidArgumentException('non-nullable sender cannot be null');
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \AllegroApi\Model\ReceiverAddressDto|null
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \AllegroApi\Model\ReceiverAddressDto|null $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        if (is_null($receiver)) {
            throw new \InvalidArgumentException('non-nullable receiver cannot be null');
        }
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets pickup
     *
     * @return \AllegroApi\Model\PickupAddressDto|null
     */
    public function getPickup()
    {
        return $this->container['pickup'];
    }

    /**
     * Sets pickup
     *
     * @param \AllegroApi\Model\PickupAddressDto|null $pickup pickup
     *
     * @return self
     */
    public function setPickup($pickup)
    {
        if (is_null($pickup)) {
            throw new \InvalidArgumentException('non-nullable pickup cannot be null');
        }
        $this->container['pickup'] = $pickup;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Shipment identifier in own system. Example: `Ordering number`.
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        $this->container['reference_number'] = $reference_number;

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
     * @param string|null $description Shipment description
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
     * Gets packages
     *
     * @return \AllegroApi\Model\PackageDto[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \AllegroApi\Model\PackageDto[]|null $packages packages
     *
     * @return self
     */
    public function setPackages($packages)
    {
        if (is_null($packages)) {
            throw new \InvalidArgumentException('non-nullable packages cannot be null');
        }
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \AllegroApi\Model\InsuranceDto|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \AllegroApi\Model\InsuranceDto|null $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        if (is_null($insurance)) {
            throw new \InvalidArgumentException('non-nullable insurance cannot be null');
        }
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets cash_on_delivery
     *
     * @return \AllegroApi\Model\CashOnDeliveryDto|null
     */
    public function getCashOnDelivery()
    {
        return $this->container['cash_on_delivery'];
    }

    /**
     * Sets cash_on_delivery
     *
     * @param \AllegroApi\Model\CashOnDeliveryDto|null $cash_on_delivery cash_on_delivery
     *
     * @return self
     */
    public function setCashOnDelivery($cash_on_delivery)
    {
        if (is_null($cash_on_delivery)) {
            throw new \InvalidArgumentException('non-nullable cash_on_delivery cannot be null');
        }
        $this->container['cash_on_delivery'] = $cash_on_delivery;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date Shipment creation date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets canceled_date
     *
     * @return string|null
     */
    public function getCanceledDate()
    {
        return $this->container['canceled_date'];
    }

    /**
     * Sets canceled_date
     *
     * @param string|null $canceled_date Shipment cancellation date. Only for canceled shipments, in all other cases is null.
     *
     * @return self
     */
    public function setCanceledDate($canceled_date)
    {
        if (is_null($canceled_date)) {
            throw new \InvalidArgumentException('non-nullable canceled_date cannot be null');
        }
        $this->container['canceled_date'] = $canceled_date;

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
     * @param string|null $carrier ID of carrier which carries out a shipment
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
     * Gets label_format
     *
     * @return string|null
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string|null $label_format Label file format.
     *
     * @return self
     */
    public function setLabelFormat($label_format)
    {
        if (is_null($label_format)) {
            throw new \InvalidArgumentException('non-nullable label_format cannot be null');
        }
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label_format', must be one of '%s'",
                    $label_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return string[]|null
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param string[]|null $additional_services List of additional services.
     *
     * @return self
     */
    public function setAdditionalServices($additional_services)
    {
        if (is_null($additional_services)) {
            throw new \InvalidArgumentException('non-nullable additional_services cannot be null');
        }
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return array<string,string>|null
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param array<string,string>|null $additional_properties Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @return self
     */
    public function setAdditionalProperties($additional_properties)
    {
        if (is_null($additional_properties)) {
            throw new \InvalidArgumentException('non-nullable additional_properties cannot be null');
        }
        $this->container['additional_properties'] = $additional_properties;

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



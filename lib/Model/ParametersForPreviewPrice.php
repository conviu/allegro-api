<?php
/**
 * ParametersForPreviewPrice
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
 * ParametersForPreviewPrice Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ParametersForPreviewPrice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParametersForPreviewPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category' => '\AllegroApi\Model\Category',
        'condition' => 'string',
        'duration' => 'string',
        'has_any_quantity' => 'bool',
        'number_of_big_photos' => 'int',
        'number_of_photos' => 'int',
        'quantity' => 'int',
        'shop' => 'bool',
        'sold_quantity' => 'int',
        'type' => 'string',
        'unit_price' => 'float',
        'bold' => 'bool',
        'highlight' => 'bool',
        'department_page' => 'bool',
        'emphasized' => 'bool',
        'emphasized_highlight_bold_package' => 'bool',
        'multi_variant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category' => null,
        'condition' => null,
        'duration' => null,
        'has_any_quantity' => null,
        'number_of_big_photos' => 'int32',
        'number_of_photos' => 'int32',
        'quantity' => 'int32',
        'shop' => null,
        'sold_quantity' => 'int32',
        'type' => null,
        'unit_price' => null,
        'bold' => null,
        'highlight' => null,
        'department_page' => null,
        'emphasized' => null,
        'emphasized_highlight_bold_package' => null,
        'multi_variant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category' => false,
        'condition' => false,
        'duration' => false,
        'has_any_quantity' => false,
        'number_of_big_photos' => false,
        'number_of_photos' => false,
        'quantity' => false,
        'shop' => false,
        'sold_quantity' => false,
        'type' => false,
        'unit_price' => false,
        'bold' => false,
        'highlight' => false,
        'department_page' => false,
        'emphasized' => false,
        'emphasized_highlight_bold_package' => false,
        'multi_variant' => false
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
        'category' => 'category',
        'condition' => 'condition',
        'duration' => 'duration',
        'has_any_quantity' => 'hasAnyQuantity',
        'number_of_big_photos' => 'numberOfBigPhotos',
        'number_of_photos' => 'numberOfPhotos',
        'quantity' => 'quantity',
        'shop' => 'shop',
        'sold_quantity' => 'soldQuantity',
        'type' => 'type',
        'unit_price' => 'unitPrice',
        'bold' => 'bold',
        'highlight' => 'highlight',
        'department_page' => 'departmentPage',
        'emphasized' => 'emphasized',
        'emphasized_highlight_bold_package' => 'emphasizedHighlightBoldPackage',
        'multi_variant' => 'multiVariant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'condition' => 'setCondition',
        'duration' => 'setDuration',
        'has_any_quantity' => 'setHasAnyQuantity',
        'number_of_big_photos' => 'setNumberOfBigPhotos',
        'number_of_photos' => 'setNumberOfPhotos',
        'quantity' => 'setQuantity',
        'shop' => 'setShop',
        'sold_quantity' => 'setSoldQuantity',
        'type' => 'setType',
        'unit_price' => 'setUnitPrice',
        'bold' => 'setBold',
        'highlight' => 'setHighlight',
        'department_page' => 'setDepartmentPage',
        'emphasized' => 'setEmphasized',
        'emphasized_highlight_bold_package' => 'setEmphasizedHighlightBoldPackage',
        'multi_variant' => 'setMultiVariant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'condition' => 'getCondition',
        'duration' => 'getDuration',
        'has_any_quantity' => 'getHasAnyQuantity',
        'number_of_big_photos' => 'getNumberOfBigPhotos',
        'number_of_photos' => 'getNumberOfPhotos',
        'quantity' => 'getQuantity',
        'shop' => 'getShop',
        'sold_quantity' => 'getSoldQuantity',
        'type' => 'getType',
        'unit_price' => 'getUnitPrice',
        'bold' => 'getBold',
        'highlight' => 'getHighlight',
        'department_page' => 'getDepartmentPage',
        'emphasized' => 'getEmphasized',
        'emphasized_highlight_bold_package' => 'getEmphasizedHighlightBoldPackage',
        'multi_variant' => 'getMultiVariant'
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

    public const CONDITION__NEW = 'NEW';
    public const CONDITION_USED = 'USED';
    public const CONDITION_OTHER = 'OTHER';
    public const DURATION_PT72_H = 'PT72H';
    public const DURATION_PT120_H = 'PT120H';
    public const DURATION_PT168_H = 'PT168H';
    public const DURATION_PT240_H = 'PT240H';
    public const DURATION_PT336_H = 'PT336H';
    public const DURATION_PT480_H = 'PT480H';
    public const DURATION_PT720_H = 'PT720H';
    public const TYPE_SHOP = 'shop';
    public const TYPE_OFFER = 'offer';
    public const TYPE_ADVERTISEMENT = 'advertisement';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_USED,
            self::CONDITION_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurationAllowableValues()
    {
        return [
            self::DURATION_PT72_H,
            self::DURATION_PT120_H,
            self::DURATION_PT168_H,
            self::DURATION_PT240_H,
            self::DURATION_PT336_H,
            self::DURATION_PT480_H,
            self::DURATION_PT720_H,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHOP,
            self::TYPE_OFFER,
            self::TYPE_ADVERTISEMENT,
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
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('has_any_quantity', $data ?? [], null);
        $this->setIfExists('number_of_big_photos', $data ?? [], null);
        $this->setIfExists('number_of_photos', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('shop', $data ?? [], null);
        $this->setIfExists('sold_quantity', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('bold', $data ?? [], null);
        $this->setIfExists('highlight', $data ?? [], null);
        $this->setIfExists('department_page', $data ?? [], null);
        $this->setIfExists('emphasized', $data ?? [], null);
        $this->setIfExists('emphasized_highlight_bold_package', $data ?? [], null);
        $this->setIfExists('multi_variant', $data ?? [], null);
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

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition', must be one of '%s'",
                $this->container['condition'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDurationAllowableValues();
        if (!is_null($this->container['duration']) && !in_array($this->container['duration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'duration', must be one of '%s'",
                $this->container['duration'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['number_of_big_photos']) && ($this->container['number_of_big_photos'] < 0)) {
            $invalidProperties[] = "invalid value for 'number_of_big_photos', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['number_of_photos']) && ($this->container['number_of_photos'] < 0)) {
            $invalidProperties[] = "invalid value for 'number_of_photos', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sold_quantity']) && ($this->container['sold_quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'sold_quantity', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if (($this->container['unit_price'] < 0)) {
            $invalidProperties[] = "invalid value for 'unit_price', must be bigger than or equal to 0.";
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
     * Gets category
     *
     * @return \AllegroApi\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \AllegroApi\Model\Category $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition Offer condition, if is new, used or other.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'condition', must be one of '%s'",
                    $condition,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $allowedValues = $this->getDurationAllowableValues();
        if (!in_array($duration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'duration', must be one of '%s'",
                    $duration,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets has_any_quantity
     *
     * @return bool|null
     */
    public function getHasAnyQuantity()
    {
        return $this->container['has_any_quantity'];
    }

    /**
     * Sets has_any_quantity
     *
     * @param bool|null $has_any_quantity has_any_quantity
     *
     * @return self
     */
    public function setHasAnyQuantity($has_any_quantity)
    {
        if (is_null($has_any_quantity)) {
            throw new \InvalidArgumentException('non-nullable has_any_quantity cannot be null');
        }
        $this->container['has_any_quantity'] = $has_any_quantity;

        return $this;
    }

    /**
     * Gets number_of_big_photos
     *
     * @return int|null
     */
    public function getNumberOfBigPhotos()
    {
        return $this->container['number_of_big_photos'];
    }

    /**
     * Sets number_of_big_photos
     *
     * @param int|null $number_of_big_photos If set, minimum value 0
     *
     * @return self
     */
    public function setNumberOfBigPhotos($number_of_big_photos)
    {
        if (is_null($number_of_big_photos)) {
            throw new \InvalidArgumentException('non-nullable number_of_big_photos cannot be null');
        }

        if (($number_of_big_photos < 0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_big_photos when calling ParametersForPreviewPrice., must be bigger than or equal to 0.');
        }

        $this->container['number_of_big_photos'] = $number_of_big_photos;

        return $this;
    }

    /**
     * Gets number_of_photos
     *
     * @return int|null
     */
    public function getNumberOfPhotos()
    {
        return $this->container['number_of_photos'];
    }

    /**
     * Sets number_of_photos
     *
     * @param int|null $number_of_photos If set, minimum value 0
     *
     * @return self
     */
    public function setNumberOfPhotos($number_of_photos)
    {
        if (is_null($number_of_photos)) {
            throw new \InvalidArgumentException('non-nullable number_of_photos cannot be null');
        }

        if (($number_of_photos < 0)) {
            throw new \InvalidArgumentException('invalid value for $number_of_photos when calling ParametersForPreviewPrice., must be bigger than or equal to 0.');
        }

        $this->container['number_of_photos'] = $number_of_photos;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity of items to be sold. If set, minimum value 1
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling ParametersForPreviewPrice., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return bool|null
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param bool|null $shop Deprecated. Value 'true' sets the 'offer.type' field to 'shop', value 'false' to 'offer'. This field is ignored if 'offer.type' field is set.
     *
     * @return self
     */
    public function setShop($shop)
    {
        if (is_null($shop)) {
            throw new \InvalidArgumentException('non-nullable shop cannot be null');
        }
        $this->container['shop'] = $shop;

        return $this;
    }

    /**
     * Gets sold_quantity
     *
     * @return int|null
     */
    public function getSoldQuantity()
    {
        return $this->container['sold_quantity'];
    }

    /**
     * Sets sold_quantity
     *
     * @param int|null $sold_quantity Quantity of sold items. Relates to commission success fee. If set, minimum value 1
     *
     * @return self
     */
    public function setSoldQuantity($sold_quantity)
    {
        if (is_null($sold_quantity)) {
            throw new \InvalidArgumentException('non-nullable sold_quantity cannot be null');
        }

        if (($sold_quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $sold_quantity when calling ParametersForPreviewPrice., must be bigger than or equal to 0.');
        }

        $this->container['sold_quantity'] = $sold_quantity;

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
     * @param string|null $type Offer type. 'type' or 'shop' fields must be provided. Takes precedence over 'shop' field. Note: if type = 'advertisement' then either 'quantity' or 'soldQuantity' field must be set.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        if (($unit_price < 0)) {
            throw new \InvalidArgumentException('invalid value for $unit_price when calling ParametersForPreviewPrice., must be bigger than or equal to 0.');
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return bool|null
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param bool|null $bold bold
     *
     * @return self
     */
    public function setBold($bold)
    {
        if (is_null($bold)) {
            throw new \InvalidArgumentException('non-nullable bold cannot be null');
        }
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets highlight
     *
     * @return bool|null
     */
    public function getHighlight()
    {
        return $this->container['highlight'];
    }

    /**
     * Sets highlight
     *
     * @param bool|null $highlight highlight
     *
     * @return self
     */
    public function setHighlight($highlight)
    {
        if (is_null($highlight)) {
            throw new \InvalidArgumentException('non-nullable highlight cannot be null');
        }
        $this->container['highlight'] = $highlight;

        return $this;
    }

    /**
     * Gets department_page
     *
     * @return bool|null
     */
    public function getDepartmentPage()
    {
        return $this->container['department_page'];
    }

    /**
     * Sets department_page
     *
     * @param bool|null $department_page department_page
     *
     * @return self
     */
    public function setDepartmentPage($department_page)
    {
        if (is_null($department_page)) {
            throw new \InvalidArgumentException('non-nullable department_page cannot be null');
        }
        $this->container['department_page'] = $department_page;

        return $this;
    }

    /**
     * Gets emphasized
     *
     * @return bool|null
     */
    public function getEmphasized()
    {
        return $this->container['emphasized'];
    }

    /**
     * Sets emphasized
     *
     * @param bool|null $emphasized emphasized
     *
     * @return self
     */
    public function setEmphasized($emphasized)
    {
        if (is_null($emphasized)) {
            throw new \InvalidArgumentException('non-nullable emphasized cannot be null');
        }
        $this->container['emphasized'] = $emphasized;

        return $this;
    }

    /**
     * Gets emphasized_highlight_bold_package
     *
     * @return bool|null
     */
    public function getEmphasizedHighlightBoldPackage()
    {
        return $this->container['emphasized_highlight_bold_package'];
    }

    /**
     * Sets emphasized_highlight_bold_package
     *
     * @param bool|null $emphasized_highlight_bold_package emphasized_highlight_bold_package
     *
     * @return self
     */
    public function setEmphasizedHighlightBoldPackage($emphasized_highlight_bold_package)
    {
        if (is_null($emphasized_highlight_bold_package)) {
            throw new \InvalidArgumentException('non-nullable emphasized_highlight_bold_package cannot be null');
        }
        $this->container['emphasized_highlight_bold_package'] = $emphasized_highlight_bold_package;

        return $this;
    }

    /**
     * Gets multi_variant
     *
     * @return bool|null
     */
    public function getMultiVariant()
    {
        return $this->container['multi_variant'];
    }

    /**
     * Sets multi_variant
     *
     * @param bool|null $multi_variant multi_variant
     *
     * @return self
     */
    public function setMultiVariant($multi_variant)
    {
        if (is_null($multi_variant)) {
            throw new \InvalidArgumentException('non-nullable multi_variant cannot be null');
        }
        $this->container['multi_variant'] = $multi_variant;

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



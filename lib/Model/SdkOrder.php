<?php
/**
 * SdkOrder
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  RPay\POK\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * RPay API Documentation
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RPay\POK\PaymentsSdk\Model;

use \ArrayAccess;
use \RPay\POK\PaymentsSdk\ObjectSerializer;

/**
 * SdkOrder Class Doc Comment
 *
 * @category Class
 * @package  RPay\POK\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SdkOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SdkOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amount' => 'float',
        'capturedAmount' => 'float',
        'currencyCode' => 'string',
        'products' => '\RPay\POK\PaymentsSdk\Model\SdkOrderProduct[]',
        'shippingCost' => 'float',
        'finalAmount' => 'float',
        'createdAt' => '\DateTime',
        'expiresAt' => '\DateTime',
        'redirectUrl' => 'string',
        'failRedirectUrl' => 'string',
        'merchantCustomReference' => 'string',
        'merchant' => '\RPay\POK\PaymentsSdk\Model\Merchant',
        'self' => '\RPay\POK\PaymentsSdk\Model\SdkOrderSelf',
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
        'amount' => null,
        'capturedAmount' => null,
        'currencyCode' => null,
        'products' => null,
        'shippingCost' => null,
        'finalAmount' => null,
        'createdAt' => 'date',
        'expiresAt' => 'date',
        'redirectUrl' => null,
        'failRedirectUrl' => null,
        'merchantCustomReference' => null,
        'merchant' => null,
        'self' => null,
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
        'id' => 'id',
        'amount' => 'amount',
        'capturedAmount' => 'capturedAmount',
        'currencyCode' => 'currencyCode',
        'products' => 'products',
        'shippingCost' => 'shippingCost',
        'finalAmount' => 'finalAmount',
        'createdAt' => 'createdAt',
        'expiresAt' => 'expiresAt',
        'redirectUrl' => 'redirectUrl',
        'failRedirectUrl' => 'failRedirectUrl',
        'merchantCustomReference' => 'merchantCustomReference',
        'merchant' => 'merchant',
        'self' => '_self',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'capturedAmount' => 'setCapturedAmount',
        'currencyCode' => 'setCurrencyCode',
        'products' => 'setProducts',
        'shippingCost' => 'setShippingCost',
        'finalAmount' => 'setFinalAmount',
        'createdAt' => 'setCreatedAt',
        'expiresAt' => 'setExpiresAt',
        'redirectUrl' => 'setRedirectUrl',
        'failRedirectUrl' => 'setFailRedirectUrl',
        'merchantCustomReference' => 'setMerchantCustomReference',
        'merchant' => 'setMerchant',
        'self' => 'setSelf',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'capturedAmount' => 'getCapturedAmount',
        'currencyCode' => 'getCurrencyCode',
        'products' => 'getProducts',
        'shippingCost' => 'getShippingCost',
        'finalAmount' => 'getFinalAmount',
        'createdAt' => 'getCreatedAt',
        'expiresAt' => 'getExpiresAt',
        'redirectUrl' => 'getRedirectUrl',
        'failRedirectUrl' => 'getFailRedirectUrl',
        'merchantCustomReference' => 'getMerchantCustomReference',
        'merchant' => 'getMerchant',
        'self' => 'getSelf',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['capturedAmount'] = $data['capturedAmount'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? 'ALL';
        $this->container['products'] = $data['products'] ?? null;
        $this->container['shippingCost'] = $data['shippingCost'] ?? null;
        $this->container['finalAmount'] = $data['finalAmount'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['redirectUrl'] = $data['redirectUrl'] ?? null;
        $this->container['failRedirectUrl'] = $data['failRedirectUrl'] ?? null;
        $this->container['merchantCustomReference'] = $data['merchantCustomReference'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['self'] = $data['self'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['capturedAmount'] === null) {
            $invalidProperties[] = "'capturedAmount' can't be null";
        }
        if ($this->container['currencyCode'] === null) {
            $invalidProperties[] = "'currencyCode' can't be null";
        }
        if (!is_null($this->container['shippingCost']) && ($this->container['shippingCost'] < 0)) {
            $invalidProperties[] = "invalid value for 'shippingCost', must be bigger than or equal to 0.";
        }
        if ($this->container['finalAmount'] === null) {
            $invalidProperties[] = "'finalAmount' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets capturedAmount
     *
     * @return float
     */
    public function getCapturedAmount()
    {
        return $this->container['capturedAmount'];
    }

    /**
     * Sets capturedAmount
     *
     * @param float $capturedAmount capturedAmount
     *
     * @return self
     */
    public function setCapturedAmount($capturedAmount)
    {
        $this->container['capturedAmount'] = $capturedAmount;

        return $this;
    }


    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \RPay\POK\PaymentsSdk\Model\SdkOrderProduct[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \RPay\POK\PaymentsSdk\Model\SdkOrderProduct[]|null $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets shippingCost
     *
     * @return float|null
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     *
     * @param float|null $shippingCost shippingCost
     *
     * @return self
     */
    public function setShippingCost($shippingCost)
    {

        if (!is_null($shippingCost) && ($shippingCost < 0)) {
            throw new \InvalidArgumentException('invalid value for $shippingCost when calling SdkOrder., must be bigger than or equal to 0.');
        }

        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets finalAmount
     *
     * @return float
     */
    public function getFinalAmount()
    {
        return $this->container['finalAmount'];
    }

    /**
     * Sets finalAmount
     *
     * @param float $finalAmount finalAmount
     *
     * @return self
     */
    public function setFinalAmount($finalAmount)
    {
        $this->container['finalAmount'] = $finalAmount;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt expiresAt
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets redirectUrl
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     *
     * @param string|null $redirectUrl redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets failRedirectUrl
     *
     * @return string|null
     */
    public function getFailRedirectUrl()
    {
        return $this->container['failRedirectUrl'];
    }

    /**
     * Sets failRedirectUrl
     *
     * @param string|null $failRedirectUrl failRedirectUrl
     *
     * @return self
     */
    public function setFailRedirectUrl($failRedirectUrl)
    {
        $this->container['failRedirectUrl'] = $failRedirectUrl;

        return $this;
    }

    /**
     * Gets merchantCustomReference
     *
     * @return string|null
     */
    public function getMerchantCustomReference()
    {
        return $this->container['merchantCustomReference'];
    }

    /**
     * Sets merchantCustomReference
     *
     * @param string|null $merchantCustomReference merchantCustomReference
     *
     * @return self
     */
    public function setMerchantCustomReference($merchantCustomReference)
    {
        $this->container['merchantCustomReference'] = $merchantCustomReference;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \RPay\POK\PaymentsSdk\Model\Merchant|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \RPay\POK\PaymentsSdk\Model\Merchant|null $merchant merchant
     *
     * @return self
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets self
     *
     * @return \RPay\POK\PaymentsSdk\Model\SdkOrderSelf|null
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \RPay\POK\PaymentsSdk\Model\SdkOrderSelf|null $self self
     *
     * @return self
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

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



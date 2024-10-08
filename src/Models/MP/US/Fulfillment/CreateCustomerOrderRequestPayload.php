<?php

/**
 * CreateCustomerOrderRequestPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * CreateCustomerOrderRequestPayload Class Doc Comment
 *
 * @category Class

 * @description request payload

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class CreateCustomerOrderRequestPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateCustomerOrderRequestPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderChannelId' => 'string',
        'sellerOrderId' => 'string',
        'orderPlacedTime' => '\DateTime',
        'needsConfirmation' => 'bool',
        'partialFulfillments' => 'bool',
        'customer' => '\Walmart\Models\MP\US\Fulfillment\CustomerOrderContactDetails',
        'orderItems' => '\Walmart\Models\MP\US\Fulfillment\CustomerOrderItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderChannelId' => null,
        'sellerOrderId' => null,
        'orderPlacedTime' => 'date-time',
        'needsConfirmation' => null,
        'partialFulfillments' => null,
        'customer' => null,
        'orderItems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderChannelId' => false,
        'sellerOrderId' => false,
        'orderPlacedTime' => false,
        'needsConfirmation' => false,
        'partialFulfillments' => false,
        'customer' => false,
        'orderItems' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderChannelId' => 'orderChannelId',
        'sellerOrderId' => 'sellerOrderId',
        'orderPlacedTime' => 'orderPlacedTime',
        'needsConfirmation' => 'needsConfirmation',
        'partialFulfillments' => 'partialFulfillments',
        'customer' => 'customer',
        'orderItems' => 'orderItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderChannelId' => 'setOrderChannelId',
        'sellerOrderId' => 'setSellerOrderId',
        'orderPlacedTime' => 'setOrderPlacedTime',
        'needsConfirmation' => 'setNeedsConfirmation',
        'partialFulfillments' => 'setPartialFulfillments',
        'customer' => 'setCustomer',
        'orderItems' => 'setOrderItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderChannelId' => 'getOrderChannelId',
        'sellerOrderId' => 'getSellerOrderId',
        'orderPlacedTime' => 'getOrderPlacedTime',
        'needsConfirmation' => 'getNeedsConfirmation',
        'partialFulfillments' => 'getPartialFulfillments',
        'customer' => 'getCustomer',
        'orderItems' => 'getOrderItems'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderChannelId', $data ?? [], null);
        $this->setIfExists('sellerOrderId', $data ?? [], null);
        $this->setIfExists('orderPlacedTime', $data ?? [], null);
        $this->setIfExists('needsConfirmation', $data ?? [], null);
        $this->setIfExists('partialFulfillments', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('orderItems', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderChannelId'] === null) {
            $invalidProperties[] = "'orderChannelId' can't be null";
        }
        if ($this->container['sellerOrderId'] === null) {
            $invalidProperties[] = "'sellerOrderId' can't be null";
        }
        if ((mb_strlen($this->container['sellerOrderId']) > 18)) {
            $invalidProperties[] = "invalid value for 'sellerOrderId', the character length must be smaller than or equal to 18.";
        }







        if ($this->container['orderPlacedTime'] === null) {
            $invalidProperties[] = "'orderPlacedTime' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['orderItems'] === null) {
            $invalidProperties[] = "'orderItems' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets orderChannelId
     *
     * @return string
    
     */
    public function getOrderChannelId()
    {
        return $this->container['orderChannelId'];
    }

    /**
     * Sets orderChannelId
     *
     * @param string $orderChannelId Unique ID identifying channels from where the orders have been generated. This ID is generated by Walmart at the time of on-boarding onto multichannel program and this cannot be a random number
     *
     * @return self
    
     */
    public function setOrderChannelId($orderChannelId)
    {
        if (is_null($orderChannelId)) {
            throw new \InvalidArgumentException('non-nullable orderChannelId cannot be null');
        }

        $this->container['orderChannelId'] = $orderChannelId;
        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string
    
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string $sellerOrderId Unique ID identifying customer order request. Preferred to attach seller short name as prefix. For example: 'seller001'
     *
     * @return self
    
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (is_null($sellerOrderId)) {
            throw new \InvalidArgumentException('non-nullable sellerOrderId cannot be null');
        }
        if ((mb_strlen($sellerOrderId) > 18)) {
            throw new \InvalidArgumentException('invalid length for $sellerOrderId when calling CreateCustomerOrderRequestPayload., must be smaller than or equal to 18.');
        }






        $this->container['sellerOrderId'] = $sellerOrderId;
        return $this;
    }

    /**
     * Gets orderPlacedTime
     *
     * @return \DateTime
    
     */
    public function getOrderPlacedTime()
    {
        return $this->container['orderPlacedTime'];
    }

    /**
     * Sets orderPlacedTime
     *
     * @param \DateTime $orderPlacedTime Order placed time at respective channels. Format: '2022-03-25T21:58:30.143Z'
     *
     * @return self
    
     */
    public function setOrderPlacedTime($orderPlacedTime)
    {
        if (is_null($orderPlacedTime)) {
            throw new \InvalidArgumentException('non-nullable orderPlacedTime cannot be null');
        }

        $this->container['orderPlacedTime'] = $orderPlacedTime;
        return $this;
    }

    /**
     * Gets needsConfirmation
     *
     * @return bool|null
    
     */
    public function getNeedsConfirmation()
    {
        return $this->container['needsConfirmation'];
    }

    /**
     * Sets needsConfirmation
     *
     * @param bool|null $needsConfirmation Flag to identify if confirmation is needed. Currently supported: 'false'
     *
     * @return self
    
     */
    public function setNeedsConfirmation($needsConfirmation)
    {
        if (is_null($needsConfirmation)) {
            throw new \InvalidArgumentException('non-nullable needsConfirmation cannot be null');
        }

        $this->container['needsConfirmation'] = $needsConfirmation;
        return $this;
    }

    /**
     * Gets partialFulfillments
     *
     * @return bool|null
    
     */
    public function getPartialFulfillments()
    {
        return $this->container['partialFulfillments'];
    }

    /**
     * Sets partialFulfillments
     *
     * @param bool|null $partialFulfillments Flag to identify if partial fulfilment is allowed. Currently supported: 'false'
     *
     * @return self
    
     */
    public function setPartialFulfillments($partialFulfillments)
    {
        if (is_null($partialFulfillments)) {
            throw new \InvalidArgumentException('non-nullable partialFulfillments cannot be null');
        }

        $this->container['partialFulfillments'] = $partialFulfillments;
        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerOrderContactDetails
    
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerOrderContactDetails $customer customer
     *
     * @return self
    
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }

        $this->container['customer'] = $customer;
        return $this;
    }

    /**
     * Gets orderItems
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerOrderItem[]
    
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerOrderItem[] $orderItems Order items details
     *
     * @return self
    
     */
    public function setOrderItems($orderItems)
    {
        if (is_null($orderItems)) {
            throw new \InvalidArgumentException('non-nullable orderItems cannot be null');
        }

        $this->container['orderItems'] = $orderItems;
        return $this;
    }
}

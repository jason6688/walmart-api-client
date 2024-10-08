<?php

/**
 * Order
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * Order Class Doc Comment
 *
 * @category Class

 * @description Information about the purchase order

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Order extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchaseOrderId' => 'string',
        'customerOrderId' => 'string',
        'customerEmailId' => 'string',
        'orderDate' => '\DateTime',
        'buyerId' => 'string',
        'mart' => 'string',
        'isGuest' => 'bool',
        'shippingInfo' => '\Walmart\Models\MP\US\Orders\ShippingInfoType',
        'orderLines' => '\Walmart\Models\MP\US\Orders\RefundLinesType',
        'paymentTypes' => 'string[]',
        'orderSummary' => '\Walmart\Models\MP\US\Orders\OrderSummary',
        'pickupPersons' => '\Walmart\Models\MP\US\Orders\PickupPerson[]',
        'shipNode' => '\Walmart\Models\MP\US\Orders\ShipNodesType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchaseOrderId' => null,
        'customerOrderId' => null,
        'customerEmailId' => null,
        'orderDate' => 'date-time',
        'buyerId' => 'uuid',
        'mart' => null,
        'isGuest' => null,
        'shippingInfo' => null,
        'orderLines' => null,
        'paymentTypes' => null,
        'orderSummary' => null,
        'pickupPersons' => null,
        'shipNode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseOrderId' => false,
        'customerOrderId' => false,
        'customerEmailId' => false,
        'orderDate' => false,
        'buyerId' => false,
        'mart' => false,
        'isGuest' => false,
        'shippingInfo' => false,
        'orderLines' => false,
        'paymentTypes' => false,
        'orderSummary' => false,
        'pickupPersons' => false,
        'shipNode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchaseOrderId' => 'purchaseOrderId',
        'customerOrderId' => 'customerOrderId',
        'customerEmailId' => 'customerEmailId',
        'orderDate' => 'orderDate',
        'buyerId' => 'buyerId',
        'mart' => 'mart',
        'isGuest' => 'isGuest',
        'shippingInfo' => 'shippingInfo',
        'orderLines' => 'orderLines',
        'paymentTypes' => 'paymentTypes',
        'orderSummary' => 'orderSummary',
        'pickupPersons' => 'pickupPersons',
        'shipNode' => 'shipNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchaseOrderId' => 'setPurchaseOrderId',
        'customerOrderId' => 'setCustomerOrderId',
        'customerEmailId' => 'setCustomerEmailId',
        'orderDate' => 'setOrderDate',
        'buyerId' => 'setBuyerId',
        'mart' => 'setMart',
        'isGuest' => 'setIsGuest',
        'shippingInfo' => 'setShippingInfo',
        'orderLines' => 'setOrderLines',
        'paymentTypes' => 'setPaymentTypes',
        'orderSummary' => 'setOrderSummary',
        'pickupPersons' => 'setPickupPersons',
        'shipNode' => 'setShipNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchaseOrderId' => 'getPurchaseOrderId',
        'customerOrderId' => 'getCustomerOrderId',
        'customerEmailId' => 'getCustomerEmailId',
        'orderDate' => 'getOrderDate',
        'buyerId' => 'getBuyerId',
        'mart' => 'getMart',
        'isGuest' => 'getIsGuest',
        'shippingInfo' => 'getShippingInfo',
        'orderLines' => 'getOrderLines',
        'paymentTypes' => 'getPaymentTypes',
        'orderSummary' => 'getOrderSummary',
        'pickupPersons' => 'getPickupPersons',
        'shipNode' => 'getShipNode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('customerEmailId', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('buyerId', $data ?? [], null);
        $this->setIfExists('mart', $data ?? [], null);
        $this->setIfExists('isGuest', $data ?? [], null);
        $this->setIfExists('shippingInfo', $data ?? [], null);
        $this->setIfExists('orderLines', $data ?? [], null);
        $this->setIfExists('paymentTypes', $data ?? [], null);
        $this->setIfExists('orderSummary', $data ?? [], null);
        $this->setIfExists('pickupPersons', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaseOrderId'] === null) {
            $invalidProperties[] = "'purchaseOrderId' can't be null";
        }
        if ($this->container['customerOrderId'] === null) {
            $invalidProperties[] = "'customerOrderId' can't be null";
        }
        if ($this->container['customerEmailId'] === null) {
            $invalidProperties[] = "'customerEmailId' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalidProperties[] = "'orderDate' can't be null";
        }
        if ($this->container['shippingInfo'] === null) {
            $invalidProperties[] = "'shippingInfo' can't be null";
        }
        if ($this->container['orderLines'] === null) {
            $invalidProperties[] = "'orderLines' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets purchaseOrderId
     *
     * @return string
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string $purchaseOrderId A unique ID associated with the seller's purchase order
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
        return $this;
    }

    /**
     * Gets customerOrderId
     *
     * @return string
    
     */
    public function getCustomerOrderId()
    {
        return $this->container['customerOrderId'];
    }

    /**
     * Sets customerOrderId
     *
     * @param string $customerOrderId A unique ID associated with the sales order for specified customer
     *
     * @return self
    
     */
    public function setCustomerOrderId($customerOrderId)
    {
        if (is_null($customerOrderId)) {
            throw new \InvalidArgumentException('non-nullable customerOrderId cannot be null');
        }

        $this->container['customerOrderId'] = $customerOrderId;
        return $this;
    }

    /**
     * Gets customerEmailId
     *
     * @return string
    
     */
    public function getCustomerEmailId()
    {
        return $this->container['customerEmailId'];
    }

    /**
     * Sets customerEmailId
     *
     * @param string $customerEmailId The email address of the customer for the sales order
     *
     * @return self
    
     */
    public function setCustomerEmailId($customerEmailId)
    {
        if (is_null($customerEmailId)) {
            throw new \InvalidArgumentException('non-nullable customerEmailId cannot be null');
        }

        $this->container['customerEmailId'] = $customerEmailId;
        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return \DateTime
    
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate The date the customer submitted the sales order
     *
     * @return self
    
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            throw new \InvalidArgumentException('non-nullable orderDate cannot be null');
        }

        $this->container['orderDate'] = $orderDate;
        return $this;
    }

    /**
     * Gets buyerId
     *
     * @return string|null
    
     */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
     * Sets buyerId
     *
     * @param string|null $buyerId Unique ID associated with the specified buyer
     *
     * @return self
    
     */
    public function setBuyerId($buyerId)
    {
        if (is_null($buyerId)) {
            throw new \InvalidArgumentException('non-nullable buyerId cannot be null');
        }

        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
     * Gets mart
     *
     * @return string|null
    
     */
    public function getMart()
    {
        return $this->container['mart'];
    }

    /**
     * Sets mart
     *
     * @param string|null $mart Mart information
     *
     * @return self
    
     */
    public function setMart($mart)
    {
        if (is_null($mart)) {
            throw new \InvalidArgumentException('non-nullable mart cannot be null');
        }

        $this->container['mart'] = $mart;
        return $this;
    }

    /**
     * Gets isGuest
     *
     * @return bool|null
    
     */
    public function getIsGuest()
    {
        return $this->container['isGuest'];
    }

    /**
     * Sets isGuest
     *
     * @param bool|null $isGuest Indicates a guest customer
     *
     * @return self
    
     */
    public function setIsGuest($isGuest)
    {
        if (is_null($isGuest)) {
            throw new \InvalidArgumentException('non-nullable isGuest cannot be null');
        }

        $this->container['isGuest'] = $isGuest;
        return $this;
    }

    /**
     * Gets shippingInfo
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingInfoType
    
     */
    public function getShippingInfo()
    {
        return $this->container['shippingInfo'];
    }

    /**
     * Sets shippingInfo
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingInfoType $shippingInfo shippingInfo
     *
     * @return self
    
     */
    public function setShippingInfo($shippingInfo)
    {
        if (is_null($shippingInfo)) {
            throw new \InvalidArgumentException('non-nullable shippingInfo cannot be null');
        }

        $this->container['shippingInfo'] = $shippingInfo;
        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Walmart\Models\MP\US\Orders\RefundLinesType
    
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Walmart\Models\MP\US\Orders\RefundLinesType $orderLines orderLines
     *
     * @return self
    
     */
    public function setOrderLines($orderLines)
    {
        if (is_null($orderLines)) {
            throw new \InvalidArgumentException('non-nullable orderLines cannot be null');
        }

        $this->container['orderLines'] = $orderLines;
        return $this;
    }

    /**
     * Gets paymentTypes
     *
     * @return string[]|null
    
     */
    public function getPaymentTypes()
    {
        return $this->container['paymentTypes'];
    }

    /**
     * Sets paymentTypes
     *
     * @param string[]|null $paymentTypes Payment Types
     *
     * @return self
    
     */
    public function setPaymentTypes($paymentTypes)
    {
        if (is_null($paymentTypes)) {
            throw new \InvalidArgumentException('non-nullable paymentTypes cannot be null');
        }

        $this->container['paymentTypes'] = $paymentTypes;
        return $this;
    }

    /**
     * Gets orderSummary
     *
     * @return \Walmart\Models\MP\US\Orders\OrderSummary|null
    
     */
    public function getOrderSummary()
    {
        return $this->container['orderSummary'];
    }

    /**
     * Sets orderSummary
     *
     * @param \Walmart\Models\MP\US\Orders\OrderSummary|null $orderSummary orderSummary
     *
     * @return self
    
     */
    public function setOrderSummary($orderSummary)
    {
        if (is_null($orderSummary)) {
            throw new \InvalidArgumentException('non-nullable orderSummary cannot be null');
        }

        $this->container['orderSummary'] = $orderSummary;
        return $this;
    }

    /**
     * Gets pickupPersons
     *
     * @return \Walmart\Models\MP\US\Orders\PickupPerson[]|null
    
     */
    public function getPickupPersons()
    {
        return $this->container['pickupPersons'];
    }

    /**
     * Sets pickupPersons
     *
     * @param \Walmart\Models\MP\US\Orders\PickupPerson[]|null $pickupPersons List of pickup persons
     *
     * @return self
    
     */
    public function setPickupPersons($pickupPersons)
    {
        if (is_null($pickupPersons)) {
            throw new \InvalidArgumentException('non-nullable pickupPersons cannot be null');
        }

        $this->container['pickupPersons'] = $pickupPersons;
        return $this;
    }

    /**
     * Gets shipNode
     *
     * @return \Walmart\Models\MP\US\Orders\ShipNodesType|null
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param \Walmart\Models\MP\US\Orders\ShipNodesType|null $shipNode shipNode
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }

        $this->container['shipNode'] = $shipNode;
        return $this;
    }
}

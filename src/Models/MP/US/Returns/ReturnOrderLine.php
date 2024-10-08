<?php

/**
 * ReturnOrderLine
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Returns;

use Walmart\Models\BaseModel;

/**
 * ReturnOrderLine Class Doc Comment
 *
 * @category Class

 * @description A list of order lines in the return order

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ReturnOrderLine extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'returnOrderLineNumber' => 'int',
        'salesOrderLineNumber' => 'int',
        'sellerOrderId' => 'string',
        'returnReason' => 'string',
        'purchaseOrderId' => 'string',
        'purchaseOrderLineNumber' => 'int',
        'exceptionItemType' => 'string',
        'isReturnForException' => 'bool',
        'rechargeReason' => 'string',
        'returnCancellationReason' => 'string',
        'item' => '\Walmart\Models\MP\US\Returns\Item',
        'charges' => '\Walmart\Models\MP\US\Returns\Charge[]',
        'unitPrice' => '\Walmart\Models\MP\US\Returns\Money',
        'itemReturnSettings' => '\Walmart\Models\MP\US\Returns\ChargeTotal[]',
        'chargeTotals' => '\Walmart\Models\MP\US\Returns\ChargeTotal[]',
        'cancellableQty' => 'int',
        'quantity' => '\Walmart\Models\MP\US\Returns\Quantity',
        'returnExpectedFlag' => 'bool',
        'isFastReplacement' => 'bool',
        'isKeepIt' => 'bool',
        'lastItem' => 'bool',
        'refundedQty' => 'float',
        'rechargeableQty' => 'float',
        'refundChannel' => 'string',
        'returnTrackingDetail' => '\Walmart\Models\MP\US\Returns\ReturnTrackingDetail[]',
        'status' => 'string',
        'statusTime' => '\DateTime',
        'currentDeliveryStatus' => 'string',
        'currentRefundStatus' => 'string',
        'currentTrackingStatuses' => '\Walmart\Models\MP\US\Returns\CurrentTrackingStatus[]',
        'refundChannels' => '\Walmart\Models\MP\US\Returns\RefundChannelInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'returnOrderLineNumber' => 'int64',
        'salesOrderLineNumber' => 'int64',
        'sellerOrderId' => null,
        'returnReason' => null,
        'purchaseOrderId' => null,
        'purchaseOrderLineNumber' => 'int64',
        'exceptionItemType' => null,
        'isReturnForException' => null,
        'rechargeReason' => null,
        'returnCancellationReason' => null,
        'item' => null,
        'charges' => null,
        'unitPrice' => null,
        'itemReturnSettings' => null,
        'chargeTotals' => null,
        'cancellableQty' => 'int64',
        'quantity' => null,
        'returnExpectedFlag' => null,
        'isFastReplacement' => null,
        'isKeepIt' => null,
        'lastItem' => null,
        'refundedQty' => 'double',
        'rechargeableQty' => 'double',
        'refundChannel' => null,
        'returnTrackingDetail' => null,
        'status' => null,
        'statusTime' => 'date-time',
        'currentDeliveryStatus' => null,
        'currentRefundStatus' => null,
        'currentTrackingStatuses' => null,
        'refundChannels' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'returnOrderLineNumber' => false,
        'salesOrderLineNumber' => false,
        'sellerOrderId' => false,
        'returnReason' => false,
        'purchaseOrderId' => false,
        'purchaseOrderLineNumber' => false,
        'exceptionItemType' => false,
        'isReturnForException' => false,
        'rechargeReason' => false,
        'returnCancellationReason' => false,
        'item' => false,
        'charges' => false,
        'unitPrice' => false,
        'itemReturnSettings' => false,
        'chargeTotals' => false,
        'cancellableQty' => false,
        'quantity' => false,
        'returnExpectedFlag' => false,
        'isFastReplacement' => false,
        'isKeepIt' => false,
        'lastItem' => false,
        'refundedQty' => false,
        'rechargeableQty' => false,
        'refundChannel' => false,
        'returnTrackingDetail' => false,
        'status' => false,
        'statusTime' => false,
        'currentDeliveryStatus' => false,
        'currentRefundStatus' => false,
        'currentTrackingStatuses' => false,
        'refundChannels' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'returnOrderLineNumber' => 'returnOrderLineNumber',
        'salesOrderLineNumber' => 'salesOrderLineNumber',
        'sellerOrderId' => 'sellerOrderId',
        'returnReason' => 'returnReason',
        'purchaseOrderId' => 'purchaseOrderId',
        'purchaseOrderLineNumber' => 'purchaseOrderLineNumber',
        'exceptionItemType' => 'exceptionItemType',
        'isReturnForException' => 'isReturnForException',
        'rechargeReason' => 'rechargeReason',
        'returnCancellationReason' => 'returnCancellationReason',
        'item' => 'item',
        'charges' => 'charges',
        'unitPrice' => 'unitPrice',
        'itemReturnSettings' => 'itemReturnSettings',
        'chargeTotals' => 'chargeTotals',
        'cancellableQty' => 'cancellableQty',
        'quantity' => 'quantity',
        'returnExpectedFlag' => 'returnExpectedFlag',
        'isFastReplacement' => 'isFastReplacement',
        'isKeepIt' => 'isKeepIt',
        'lastItem' => 'lastItem',
        'refundedQty' => 'refundedQty',
        'rechargeableQty' => 'rechargeableQty',
        'refundChannel' => 'refundChannel',
        'returnTrackingDetail' => 'returnTrackingDetail',
        'status' => 'status',
        'statusTime' => 'statusTime',
        'currentDeliveryStatus' => 'currentDeliveryStatus',
        'currentRefundStatus' => 'currentRefundStatus',
        'currentTrackingStatuses' => 'currentTrackingStatuses',
        'refundChannels' => 'refundChannels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'returnOrderLineNumber' => 'setReturnOrderLineNumber',
        'salesOrderLineNumber' => 'setSalesOrderLineNumber',
        'sellerOrderId' => 'setSellerOrderId',
        'returnReason' => 'setReturnReason',
        'purchaseOrderId' => 'setPurchaseOrderId',
        'purchaseOrderLineNumber' => 'setPurchaseOrderLineNumber',
        'exceptionItemType' => 'setExceptionItemType',
        'isReturnForException' => 'setIsReturnForException',
        'rechargeReason' => 'setRechargeReason',
        'returnCancellationReason' => 'setReturnCancellationReason',
        'item' => 'setItem',
        'charges' => 'setCharges',
        'unitPrice' => 'setUnitPrice',
        'itemReturnSettings' => 'setItemReturnSettings',
        'chargeTotals' => 'setChargeTotals',
        'cancellableQty' => 'setCancellableQty',
        'quantity' => 'setQuantity',
        'returnExpectedFlag' => 'setReturnExpectedFlag',
        'isFastReplacement' => 'setIsFastReplacement',
        'isKeepIt' => 'setIsKeepIt',
        'lastItem' => 'setLastItem',
        'refundedQty' => 'setRefundedQty',
        'rechargeableQty' => 'setRechargeableQty',
        'refundChannel' => 'setRefundChannel',
        'returnTrackingDetail' => 'setReturnTrackingDetail',
        'status' => 'setStatus',
        'statusTime' => 'setStatusTime',
        'currentDeliveryStatus' => 'setCurrentDeliveryStatus',
        'currentRefundStatus' => 'setCurrentRefundStatus',
        'currentTrackingStatuses' => 'setCurrentTrackingStatuses',
        'refundChannels' => 'setRefundChannels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'returnOrderLineNumber' => 'getReturnOrderLineNumber',
        'salesOrderLineNumber' => 'getSalesOrderLineNumber',
        'sellerOrderId' => 'getSellerOrderId',
        'returnReason' => 'getReturnReason',
        'purchaseOrderId' => 'getPurchaseOrderId',
        'purchaseOrderLineNumber' => 'getPurchaseOrderLineNumber',
        'exceptionItemType' => 'getExceptionItemType',
        'isReturnForException' => 'getIsReturnForException',
        'rechargeReason' => 'getRechargeReason',
        'returnCancellationReason' => 'getReturnCancellationReason',
        'item' => 'getItem',
        'charges' => 'getCharges',
        'unitPrice' => 'getUnitPrice',
        'itemReturnSettings' => 'getItemReturnSettings',
        'chargeTotals' => 'getChargeTotals',
        'cancellableQty' => 'getCancellableQty',
        'quantity' => 'getQuantity',
        'returnExpectedFlag' => 'getReturnExpectedFlag',
        'isFastReplacement' => 'getIsFastReplacement',
        'isKeepIt' => 'getIsKeepIt',
        'lastItem' => 'getLastItem',
        'refundedQty' => 'getRefundedQty',
        'rechargeableQty' => 'getRechargeableQty',
        'refundChannel' => 'getRefundChannel',
        'returnTrackingDetail' => 'getReturnTrackingDetail',
        'status' => 'getStatus',
        'statusTime' => 'getStatusTime',
        'currentDeliveryStatus' => 'getCurrentDeliveryStatus',
        'currentRefundStatus' => 'getCurrentRefundStatus',
        'currentTrackingStatuses' => 'getCurrentTrackingStatuses',
        'refundChannels' => 'getRefundChannels'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('returnOrderLineNumber', $data ?? [], null);
        $this->setIfExists('salesOrderLineNumber', $data ?? [], null);
        $this->setIfExists('sellerOrderId', $data ?? [], null);
        $this->setIfExists('returnReason', $data ?? [], null);
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('purchaseOrderLineNumber', $data ?? [], null);
        $this->setIfExists('exceptionItemType', $data ?? [], null);
        $this->setIfExists('isReturnForException', $data ?? [], null);
        $this->setIfExists('rechargeReason', $data ?? [], null);
        $this->setIfExists('returnCancellationReason', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('charges', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('itemReturnSettings', $data ?? [], null);
        $this->setIfExists('chargeTotals', $data ?? [], null);
        $this->setIfExists('cancellableQty', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('returnExpectedFlag', $data ?? [], null);
        $this->setIfExists('isFastReplacement', $data ?? [], null);
        $this->setIfExists('isKeepIt', $data ?? [], null);
        $this->setIfExists('lastItem', $data ?? [], null);
        $this->setIfExists('refundedQty', $data ?? [], null);
        $this->setIfExists('rechargeableQty', $data ?? [], null);
        $this->setIfExists('refundChannel', $data ?? [], null);
        $this->setIfExists('returnTrackingDetail', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusTime', $data ?? [], null);
        $this->setIfExists('currentDeliveryStatus', $data ?? [], null);
        $this->setIfExists('currentRefundStatus', $data ?? [], null);
        $this->setIfExists('currentTrackingStatuses', $data ?? [], null);
        $this->setIfExists('refundChannels', $data ?? [], null);
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
     * Gets returnOrderLineNumber
     *
     * @return int|null
    
     */
    public function getReturnOrderLineNumber()
    {
        return $this->container['returnOrderLineNumber'];
    }

    /**
     * Sets returnOrderLineNumber
     *
     * @param int|null $returnOrderLineNumber The returns order line number for that return
     *
     * @return self
    
     */
    public function setReturnOrderLineNumber($returnOrderLineNumber)
    {
        if (is_null($returnOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable returnOrderLineNumber cannot be null');
        }

        $this->container['returnOrderLineNumber'] = $returnOrderLineNumber;
        return $this;
    }

    /**
     * Gets salesOrderLineNumber
     *
     * @return int|null
    
     */
    public function getSalesOrderLineNumber()
    {
        return $this->container['salesOrderLineNumber'];
    }

    /**
     * Sets salesOrderLineNumber
     *
     * @param int|null $salesOrderLineNumber The sales order line number for the return created
     *
     * @return self
    
     */
    public function setSalesOrderLineNumber($salesOrderLineNumber)
    {
        if (is_null($salesOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable salesOrderLineNumber cannot be null');
        }

        $this->container['salesOrderLineNumber'] = $salesOrderLineNumber;
        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string|null
    
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string|null $sellerOrderId A unique ID associated with the sales order for specified Seller; gives Sellers the ability to print their own custom order ID on the return label; limit of 30 characters
     *
     * @return self
    
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (is_null($sellerOrderId)) {
            throw new \InvalidArgumentException('non-nullable sellerOrderId cannot be null');
        }

        $this->container['sellerOrderId'] = $sellerOrderId;
        return $this;
    }

    /**
     * Gets returnReason
     *
     * @return string|null
    
     */
    public function getReturnReason()
    {
        return $this->container['returnReason'];
    }

    /**
     * Sets returnReason
     *
     * @param string|null $returnReason Gives the reason that was selected during the return creation. Reason codes are: ARRIVED_LATE, AUTO_RETURN, BOUGHT_ANOTHER_SIZE_OR_COLOR, BOUGHT_SOMEWHERE_ELSE, DAMAGED, DEFECTIVE, DUPLICATE_ITEM, INADEQUATE_QUALITY, INCORRECT_ITEM, LOST_AFTER_DELIVERY, LOST_IN_TRANSIT, LOWER_PRICE, MISSING_PARTS, NOT_AS_DESCRIBED, NO_LONGER_WANTED, RETURN_TO_SENDER, SHIPPING_BOX_DAMAGED, TRIED_TO_CANCEL and WRONG_SIZE/POOR_FIT
     *
     * @return self
    
     */
    public function setReturnReason($returnReason)
    {
        if (is_null($returnReason)) {
            throw new \InvalidArgumentException('non-nullable returnReason cannot be null');
        }

        $this->container['returnReason'] = $returnReason;
        return $this;
    }

    /**
     * Gets purchaseOrderId
     *
     * @return string|null
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string|null $purchaseOrderId The purchase order ID for the return created
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
     * Gets purchaseOrderLineNumber
     *
     * @return int|null
    
     */
    public function getPurchaseOrderLineNumber()
    {
        return $this->container['purchaseOrderLineNumber'];
    }

    /**
     * Sets purchaseOrderLineNumber
     *
     * @param int|null $purchaseOrderLineNumber The purchase order line number for the return created
     *
     * @return self
    
     */
    public function setPurchaseOrderLineNumber($purchaseOrderLineNumber)
    {
        if (is_null($purchaseOrderLineNumber)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderLineNumber cannot be null');
        }

        $this->container['purchaseOrderLineNumber'] = $purchaseOrderLineNumber;
        return $this;
    }

    /**
     * Gets exceptionItemType
     *
     * @return string|null
    
     */
    public function getExceptionItemType()
    {
        return $this->container['exceptionItemType'];
    }

    /**
     * Sets exceptionItemType
     *
     * @param string|null $exceptionItemType exceptionItemType
     *
     * @return self
    
     */
    public function setExceptionItemType($exceptionItemType)
    {
        if (is_null($exceptionItemType)) {
            throw new \InvalidArgumentException('non-nullable exceptionItemType cannot be null');
        }

        $this->container['exceptionItemType'] = $exceptionItemType;
        return $this;
    }

    /**
     * Gets isReturnForException
     *
     * @return bool|null
    
     */
    public function getIsReturnForException()
    {
        return $this->container['isReturnForException'];
    }

    /**
     * Sets isReturnForException
     *
     * @param bool|null $isReturnForException isReturnForException
     *
     * @return self
    
     */
    public function setIsReturnForException($isReturnForException)
    {
        if (is_null($isReturnForException)) {
            throw new \InvalidArgumentException('non-nullable isReturnForException cannot be null');
        }

        $this->container['isReturnForException'] = $isReturnForException;
        return $this;
    }

    /**
     * Gets rechargeReason
     *
     * @return string|null
    
     */
    public function getRechargeReason()
    {
        return $this->container['rechargeReason'];
    }

    /**
     * Sets rechargeReason
     *
     * @param string|null $rechargeReason reason for recharging the customer for replacement
     *
     * @return self
    
     */
    public function setRechargeReason($rechargeReason)
    {
        if (is_null($rechargeReason)) {
            throw new \InvalidArgumentException('non-nullable rechargeReason cannot be null');
        }

        $this->container['rechargeReason'] = $rechargeReason;
        return $this;
    }

    /**
     * Gets returnCancellationReason
     *
     * @return string|null
    
     */
    public function getReturnCancellationReason()
    {
        return $this->container['returnCancellationReason'];
    }

    /**
     * Sets returnCancellationReason
     *
     * @param string|null $returnCancellationReason reason for cancelling the return
     *
     * @return self
    
     */
    public function setReturnCancellationReason($returnCancellationReason)
    {
        if (is_null($returnCancellationReason)) {
            throw new \InvalidArgumentException('non-nullable returnCancellationReason cannot be null');
        }

        $this->container['returnCancellationReason'] = $returnCancellationReason;
        return $this;
    }

    /**
     * Gets item
     *
     * @return \Walmart\Models\MP\US\Returns\Item|null
    
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Walmart\Models\MP\US\Returns\Item|null $item item
     *
     * @return self
    
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }

        $this->container['item'] = $item;
        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Walmart\Models\MP\US\Returns\Charge[]|null
    
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Walmart\Models\MP\US\Returns\Charge[]|null $charges Information relating to the charge for the orderLine
     *
     * @return self
    
     */
    public function setCharges($charges)
    {
        if (is_null($charges)) {
            throw new \InvalidArgumentException('non-nullable charges cannot be null');
        }

        $this->container['charges'] = $charges;
        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return \Walmart\Models\MP\US\Returns\Money|null
    
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param \Walmart\Models\MP\US\Returns\Money|null $unitPrice unitPrice
     *
     * @return self
    
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }

        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Gets itemReturnSettings
     *
     * @return \Walmart\Models\MP\US\Returns\ChargeTotal[]|null
    
     */
    public function getItemReturnSettings()
    {
        return $this->container['itemReturnSettings'];
    }

    /**
     * Sets itemReturnSettings
     *
     * @param \Walmart\Models\MP\US\Returns\ChargeTotal[]|null $itemReturnSettings Contains name value pairs of calculated charges for the line. Eg: if order line has 3 Qty, this will have a shipping charge = 3 * shipping charge per unit (This is present in the line level charges).
     *
     * @return self
    
     */
    public function setItemReturnSettings($itemReturnSettings)
    {
        if (is_null($itemReturnSettings)) {
            throw new \InvalidArgumentException('non-nullable itemReturnSettings cannot be null');
        }

        $this->container['itemReturnSettings'] = $itemReturnSettings;
        return $this;
    }

    /**
     * Gets chargeTotals
     *
     * @return \Walmart\Models\MP\US\Returns\ChargeTotal[]|null
    
     */
    public function getChargeTotals()
    {
        return $this->container['chargeTotals'];
    }

    /**
     * Sets chargeTotals
     *
     * @param \Walmart\Models\MP\US\Returns\ChargeTotal[]|null $chargeTotals Contains name value pairs of calculated charges for the line. Eg: if order line has 3 Qty, this will have a shipping charge = 3 * shipping charge per unit (This is present in the line level charges).
     *
     * @return self
    
     */
    public function setChargeTotals($chargeTotals)
    {
        if (is_null($chargeTotals)) {
            throw new \InvalidArgumentException('non-nullable chargeTotals cannot be null');
        }

        $this->container['chargeTotals'] = $chargeTotals;
        return $this;
    }

    /**
     * Gets cancellableQty
     *
     * @return int|null
    
     */
    public function getCancellableQty()
    {
        return $this->container['cancellableQty'];
    }

    /**
     * Sets cancellableQty
     *
     * @param int|null $cancellableQty How much quantity of this order line can be cancelled
     *
     * @return self
    
     */
    public function setCancellableQty($cancellableQty)
    {
        if (is_null($cancellableQty)) {
            throw new \InvalidArgumentException('non-nullable cancellableQty cannot be null');
        }

        $this->container['cancellableQty'] = $cancellableQty;
        return $this;
    }

    /**
     * Gets quantity
     *
     * @return \Walmart\Models\MP\US\Returns\Quantity|null
    
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Walmart\Models\MP\US\Returns\Quantity|null $quantity quantity
     *
     * @return self
    
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
     * Gets returnExpectedFlag
     *
     * @return bool|null
    
     */
    public function getReturnExpectedFlag()
    {
        return $this->container['returnExpectedFlag'];
    }

    /**
     * Sets returnExpectedFlag
     *
     * @param bool|null $returnExpectedFlag Is customer required to send this item back to return center.
     *
     * @return self
    
     */
    public function setReturnExpectedFlag($returnExpectedFlag)
    {
        if (is_null($returnExpectedFlag)) {
            throw new \InvalidArgumentException('non-nullable returnExpectedFlag cannot be null');
        }

        $this->container['returnExpectedFlag'] = $returnExpectedFlag;
        return $this;
    }

    /**
     * Gets isFastReplacement
     *
     * @return bool|null
    
     */
    public function getIsFastReplacement()
    {
        return $this->container['isFastReplacement'];
    }

    /**
     * Sets isFastReplacement
     *
     * @param bool|null $isFastReplacement Applicable only for 1P.
     *
     * @return self
    
     */
    public function setIsFastReplacement($isFastReplacement)
    {
        if (is_null($isFastReplacement)) {
            throw new \InvalidArgumentException('non-nullable isFastReplacement cannot be null');
        }

        $this->container['isFastReplacement'] = $isFastReplacement;
        return $this;
    }

    /**
     * Gets isKeepIt
     *
     * @return bool|null
    
     */
    public function getIsKeepIt()
    {
        return $this->container['isKeepIt'];
    }

    /**
     * Sets isKeepIt
     *
     * @param bool|null $isKeepIt Is customer allowed to keep the product and not required to send it back to return center. This flag is determined by making a call to fraud system.
     *
     * @return self
    
     */
    public function setIsKeepIt($isKeepIt)
    {
        if (is_null($isKeepIt)) {
            throw new \InvalidArgumentException('non-nullable isKeepIt cannot be null');
        }

        $this->container['isKeepIt'] = $isKeepIt;
        return $this;
    }

    /**
     * Gets lastItem
     *
     * @return bool|null
    
     */
    public function getLastItem()
    {
        return $this->container['lastItem'];
    }

    /**
     * Sets lastItem
     *
     * @param bool|null $lastItem This return is the last item on the sales order line and all other sales order line items are already returned. Helps in last penny calculations.
     *
     * @return self
    
     */
    public function setLastItem($lastItem)
    {
        if (is_null($lastItem)) {
            throw new \InvalidArgumentException('non-nullable lastItem cannot be null');
        }

        $this->container['lastItem'] = $lastItem;
        return $this;
    }

    /**
     * Gets refundedQty
     *
     * @return float|null
    
     */
    public function getRefundedQty()
    {
        return $this->container['refundedQty'];
    }

    /**
     * Sets refundedQty
     *
     * @param float|null $refundedQty The quantity for which customer was refunded
     *
     * @return self
    
     */
    public function setRefundedQty($refundedQty)
    {
        if (is_null($refundedQty)) {
            throw new \InvalidArgumentException('non-nullable refundedQty cannot be null');
        }

        $this->container['refundedQty'] = $refundedQty;
        return $this;
    }

    /**
     * Gets rechargeableQty
     *
     * @return float|null
    
     */
    public function getRechargeableQty()
    {
        return $this->container['rechargeableQty'];
    }

    /**
     * Sets rechargeableQty
     *
     * @param float|null $rechargeableQty The quantity for which customer can be charged again for
     *
     * @return self
    
     */
    public function setRechargeableQty($rechargeableQty)
    {
        if (is_null($rechargeableQty)) {
            throw new \InvalidArgumentException('non-nullable rechargeableQty cannot be null');
        }

        $this->container['rechargeableQty'] = $rechargeableQty;
        return $this;
    }

    /**
     * Gets refundChannel
     *
     * @return string|null
    
     */
    public function getRefundChannel()
    {
        return $this->container['refundChannel'];
    }

    /**
     * Sets refundChannel
     *
     * @param string|null $refundChannel Determines the mode of refund initiation. Valid values are: WALMART_SETTLED_REFUND, SELLER_AUTO_REFUND, SELLER_MANUAL_REFUND, SELLER_SYSTEM_REFUND, and WALMART_TRIGGERED_REFUND.
     *
     * @return self
    
     */
    public function setRefundChannel($refundChannel)
    {
        if (is_null($refundChannel)) {
            throw new \InvalidArgumentException('non-nullable refundChannel cannot be null');
        }

        $this->container['refundChannel'] = $refundChannel;
        return $this;
    }

    /**
     * Gets returnTrackingDetail
     *
     * @return \Walmart\Models\MP\US\Returns\ReturnTrackingDetail[]|null
    
     */
    public function getReturnTrackingDetail()
    {
        return $this->container['returnTrackingDetail'];
    }

    /**
     * Sets returnTrackingDetail
     *
     * @param \Walmart\Models\MP\US\Returns\ReturnTrackingDetail[]|null $returnTrackingDetail Informational blocks added as the return order completes its journey from return creation to received and refunded.
     *
     * @return self
    
     */
    public function setReturnTrackingDetail($returnTrackingDetail)
    {
        if (is_null($returnTrackingDetail)) {
            throw new \InvalidArgumentException('non-nullable returnTrackingDetail cannot be null');
        }

        $this->container['returnTrackingDetail'] = $returnTrackingDetail;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of return. (e.g., 'INITIATED')
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
     * Gets statusTime
     *
     * @return \DateTime|null
    
     */
    public function getStatusTime()
    {
        return $this->container['statusTime'];
    }

    /**
     * Sets statusTime
     *
     * @param \DateTime|null $statusTime Timestamp of listed status change
     *
     * @return self
    
     */
    public function setStatusTime($statusTime)
    {
        if (is_null($statusTime)) {
            throw new \InvalidArgumentException('non-nullable statusTime cannot be null');
        }

        $this->container['statusTime'] = $statusTime;
        return $this;
    }

    /**
     * Gets currentDeliveryStatus
     *
     * @return string|null
    
     */
    public function getCurrentDeliveryStatus()
    {
        return $this->container['currentDeliveryStatus'];
    }

    /**
     * Sets currentDeliveryStatus
     *
     * @param string|null $currentDeliveryStatus Determines the current carrier tracking status of the return.
     *
     * @return self
    
     */
    public function setCurrentDeliveryStatus($currentDeliveryStatus)
    {
        if (is_null($currentDeliveryStatus)) {
            throw new \InvalidArgumentException('non-nullable currentDeliveryStatus cannot be null');
        }

        $this->container['currentDeliveryStatus'] = $currentDeliveryStatus;
        return $this;
    }

    /**
     * Gets currentRefundStatus
     *
     * @return string|null
    
     */
    public function getCurrentRefundStatus()
    {
        return $this->container['currentRefundStatus'];
    }

    /**
     * Sets currentRefundStatus
     *
     * @param string|null $currentRefundStatus Determines the current refund status of the return.
     *
     * @return self
    
     */
    public function setCurrentRefundStatus($currentRefundStatus)
    {
        if (is_null($currentRefundStatus)) {
            throw new \InvalidArgumentException('non-nullable currentRefundStatus cannot be null');
        }

        $this->container['currentRefundStatus'] = $currentRefundStatus;
        return $this;
    }

    /**
     * Gets currentTrackingStatuses
     *
     * @return \Walmart\Models\MP\US\Returns\CurrentTrackingStatus[]|null
    
     */
    public function getCurrentTrackingStatuses()
    {
        return $this->container['currentTrackingStatuses'];
    }

    /**
     * Sets currentTrackingStatuses
     *
     * @param \Walmart\Models\MP\US\Returns\CurrentTrackingStatus[]|null $currentTrackingStatuses Array of current tracking status of each quantity
     *
     * @return self
    
     */
    public function setCurrentTrackingStatuses($currentTrackingStatuses)
    {
        if (is_null($currentTrackingStatuses)) {
            throw new \InvalidArgumentException('non-nullable currentTrackingStatuses cannot be null');
        }

        $this->container['currentTrackingStatuses'] = $currentTrackingStatuses;
        return $this;
    }

    /**
     * Gets refundChannels
     *
     * @return \Walmart\Models\MP\US\Returns\RefundChannelInfo[]|null
    
     */
    public function getRefundChannels()
    {
        return $this->container['refundChannels'];
    }

    /**
     * Sets refundChannels
     *
     * @param \Walmart\Models\MP\US\Returns\RefundChannelInfo[]|null $refundChannels Array of refund channel of each quantity
     *
     * @return self
    
     */
    public function setRefundChannels($refundChannels)
    {
        if (is_null($refundChannels)) {
            throw new \InvalidArgumentException('non-nullable refundChannels cannot be null');
        }

        $this->container['refundChannels'] = $refundChannels;
        return $this;
    }
}

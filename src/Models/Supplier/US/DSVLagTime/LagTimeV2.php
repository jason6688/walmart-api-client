<?php

/**
 * LagTimeV2
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
 * Lag Time
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\Supplier\US\DSVLagTime;

use Walmart\Models\BaseModel;

/**
 * LagTimeV2 Class Doc Comment
 *
 * @category Class

 * @description Specifies an array of objects for lag time.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class LagTimeV2 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LagTimeV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productId' => 'string',
        'shipNode' => 'string',
        'fulfillmentLagTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productId' => null,
        'shipNode' => null,
        'fulfillmentLagTime' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productId' => false,
        'shipNode' => false,
        'fulfillmentLagTime' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productId' => 'productId',
        'shipNode' => 'shipNode',
        'fulfillmentLagTime' => 'fulfillmentLagTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productId' => 'setProductId',
        'shipNode' => 'setShipNode',
        'fulfillmentLagTime' => 'setFulfillmentLagTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productId' => 'getProductId',
        'shipNode' => 'getShipNode',
        'fulfillmentLagTime' => 'getFulfillmentLagTime'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('fulfillmentLagTime', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['shipNode'] === null) {
            $invalidProperties[] = "'shipNode' can't be null";
        }
        if ($this->container['fulfillmentLagTime'] === null) {
            $invalidProperties[] = "'fulfillmentLagTime' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets productId
     *
     * @return string
    
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string $productId Specifies the product identifier for the item.   This parameter can only be a global trade item number (GTIN).   The global trade item number (GTIN) is a 14-digit number, including the check digit, that is used worldwide and identifies the Each. If the user’s number is less than 14 digits, add zeros at the beginning.
     *
     * @return self
    
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }

        $this->container['productId'] = $productId;
        return $this;
    }

    /**
     * Gets shipNode
     *
     * @return string
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string $shipNode Specifies the distribution facility distributor identifier.    This parameter identifies each facility from which the inventory is requested.   The identifier is autogenerated during drop ship vendor (DSV) account creation. Every time users add or update a facility in Supplier Center, a new identifier is generated.
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

    /**
     * Gets fulfillmentLagTime
     *
     * @return int
    
     */
    public function getFulfillmentLagTime()
    {
        return $this->container['fulfillmentLagTime'];
    }

    /**
     * Sets fulfillmentLagTime
     *
     * @param int $fulfillmentLagTime Specifies fulfillment lag time.    Fulfillment lag time is the maximum number of days it takes suppliers to process an order for shipment.    Assigning lag times helps suppliers manage when orders are expected to ship to the customer.
     *
     * @return self
    
     */
    public function setFulfillmentLagTime($fulfillmentLagTime)
    {
        if (is_null($fulfillmentLagTime)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentLagTime cannot be null');
        }

        $this->container['fulfillmentLagTime'] = $fulfillmentLagTime;
        return $this;
    }
}

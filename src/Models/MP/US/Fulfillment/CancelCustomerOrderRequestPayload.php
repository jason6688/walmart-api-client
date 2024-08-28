<?php

/**
 * CancelCustomerOrderRequestPayload
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
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
 * CancelCustomerOrderRequestPayload Class Doc Comment
 *
 * @category Class

 * @description request payload

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CancelCustomerOrderRequestPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CancelCustomerOrderRequestPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sellerOrderId' => 'string',
        'orderItems' => '\Walmart\Models\MP\US\Fulfillment\OrderCancelItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sellerOrderId' => null,
        'orderItems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sellerOrderId' => false,
        'orderItems' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sellerOrderId' => 'sellerOrderId',
        'orderItems' => 'orderItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sellerOrderId' => 'setSellerOrderId',
        'orderItems' => 'setOrderItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sellerOrderId' => 'getSellerOrderId',
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
        $this->setIfExists('sellerOrderId', $data ?? [], null);
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

        if ($this->container['sellerOrderId'] === null) {
            $invalidProperties[] = "'sellerOrderId' can't be null";
        }
        if ($this->container['orderItems'] === null) {
            $invalidProperties[] = "'orderItems' can't be null";
        }

        return $invalidProperties;
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
     * @param string $sellerOrderId sellerOrderId
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
     * Gets orderItems
     *
     * @return \Walmart\Models\MP\US\Fulfillment\OrderCancelItem[]
    
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\OrderCancelItem[] $orderItems orderItems
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

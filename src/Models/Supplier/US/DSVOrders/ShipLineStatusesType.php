<?php

/**
 * ShipLineStatusesType
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\Supplier\US\DSVOrders;

use Walmart\Models\BaseModel;

/**
 * ShipLineStatusesType Class Doc Comment
 *
 * @category Class

 * @description A list of status updates for that orderLine, including shipping status updates

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipLineStatusesType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipLineStatusesType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'orderLineStatus' => '\Walmart\Models\Supplier\US\DSVOrders\ShipLineStatusType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'orderLineStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'orderLineStatus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'orderLineStatus' => 'orderLineStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'orderLineStatus' => 'setOrderLineStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'orderLineStatus' => 'getOrderLineStatus'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('orderLineStatus', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderLineStatus'] === null) {
            $invalidProperties[] = "'orderLineStatus' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets orderLineStatus
     *
     * @return \Walmart\Models\Supplier\US\DSVOrders\ShipLineStatusType[]
    
     */
    public function getOrderLineStatus()
    {
        return $this->container['orderLineStatus'];
    }

    /**
     * Sets orderLineStatus
     *
     * @param \Walmart\Models\Supplier\US\DSVOrders\ShipLineStatusType[] $orderLineStatus Details about the Order Line status
     *
     * @return self
    
     */
    public function setOrderLineStatus($orderLineStatus)
    {
        if (is_null($orderLineStatus)) {
            throw new \InvalidArgumentException('non-nullable orderLineStatus cannot be null');
        }

        $this->container['orderLineStatus'] = $orderLineStatus;
        return $this;
    }
}

<?php

/**
 * ShipLineStatusType
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

namespace Walmart\Models\MP\CA\Orders;

use Walmart\Models\BaseModel;

/**
 * ShipLineStatusType Class Doc Comment
 *
 * @category Class

 * @description Details about the Order Line status

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ShipLineStatusType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipLineStatusType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'asn' => '\Walmart\Models\MP\CA\Orders\AsnType',
        'statusQuantity' => '\Walmart\Models\MP\CA\Orders\QuantityType',
        'trackingInfo' => '\Walmart\Models\MP\CA\Orders\TrackingInfoType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'asn' => null,
        'statusQuantity' => null,
        'trackingInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'asn' => false,
        'statusQuantity' => false,
        'trackingInfo' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'asn' => 'asn',
        'statusQuantity' => 'statusQuantity',
        'trackingInfo' => 'trackingInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'asn' => 'setAsn',
        'statusQuantity' => 'setStatusQuantity',
        'trackingInfo' => 'setTrackingInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'asn' => 'getAsn',
        'statusQuantity' => 'getStatusQuantity',
        'trackingInfo' => 'getTrackingInfo'
    ];


    public const STATUS_CREATED = 'CREATED';

    public const STATUS_ACKNOWLEDGED = 'ACKNOWLEDGED';

    public const STATUS_SHIPPED = 'SHIPPED';

    public const STATUS_CANCELLED = 'CANCELLED';

    public const STATUS_REFUND = 'REFUND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ACKNOWLEDGED,
            self::STATUS_SHIPPED,
            self::STATUS_CANCELLED,
            self::STATUS_REFUND,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('asn', $data ?? [], null);
        $this->setIfExists('statusQuantity', $data ?? [], null);
        $this->setIfExists('trackingInfo', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['statusQuantity'] === null) {
            $invalidProperties[] = "'statusQuantity' can't be null";
        }
        if ($this->container['trackingInfo'] === null) {
            $invalidProperties[] = "'trackingInfo' can't be null";
        }

        return $invalidProperties;
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
     * @param string $status Use 'Shipped'
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets asn
     *
     * @return \Walmart\Models\MP\CA\Orders\AsnType|null
    
     */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
     * Sets asn
     *
     * @param \Walmart\Models\MP\CA\Orders\AsnType|null $asn asn
     *
     * @return self
    
     */
    public function setAsn($asn)
    {
        if (is_null($asn)) {
            throw new \InvalidArgumentException('non-nullable asn cannot be null');
        }

        $this->container['asn'] = $asn;
        return $this;
    }

    /**
     * Gets statusQuantity
     *
     * @return \Walmart\Models\MP\CA\Orders\QuantityType
    
     */
    public function getStatusQuantity()
    {
        return $this->container['statusQuantity'];
    }

    /**
     * Sets statusQuantity
     *
     * @param \Walmart\Models\MP\CA\Orders\QuantityType $statusQuantity statusQuantity
     *
     * @return self
    
     */
    public function setStatusQuantity($statusQuantity)
    {
        if (is_null($statusQuantity)) {
            throw new \InvalidArgumentException('non-nullable statusQuantity cannot be null');
        }

        $this->container['statusQuantity'] = $statusQuantity;
        return $this;
    }

    /**
     * Gets trackingInfo
     *
     * @return \Walmart\Models\MP\CA\Orders\TrackingInfoType
    
     */
    public function getTrackingInfo()
    {
        return $this->container['trackingInfo'];
    }

    /**
     * Sets trackingInfo
     *
     * @param \Walmart\Models\MP\CA\Orders\TrackingInfoType $trackingInfo trackingInfo
     *
     * @return self
    
     */
    public function setTrackingInfo($trackingInfo)
    {
        if (is_null($trackingInfo)) {
            throw new \InvalidArgumentException('non-nullable trackingInfo cannot be null');
        }

        $this->container['trackingInfo'] = $trackingInfo;
        return $this;
    }
}

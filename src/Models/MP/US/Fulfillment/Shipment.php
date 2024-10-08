<?php

/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class

 * @description createDate of the order

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Shipment extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'statusDescription' => 'string',
        'purchaseOrderId' => 'string',
        'scac' => 'string',
        'trackingNo' => 'string',
        'externalTrackingURL' => 'string',
        'shipmentNo' => 'string',
        'actualShipmentDate' => 'string',
        'packageASN' => 'string',
        'carrierDescription' => 'string',
        'carrierServiceCode' => 'string',
        'packageId' => 'string',
        'lastModified' => 'string',
        'shipmentLines' => '\Walmart\Models\MP\US\Fulfillment\ShipmentLine[]',
        'shipmentDates' => '\Walmart\Models\MP\US\Fulfillment\OrderDate[]'
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
        'statusDescription' => null,
        'purchaseOrderId' => null,
        'scac' => null,
        'trackingNo' => null,
        'externalTrackingURL' => null,
        'shipmentNo' => null,
        'actualShipmentDate' => null,
        'packageASN' => null,
        'carrierDescription' => null,
        'carrierServiceCode' => null,
        'packageId' => null,
        'lastModified' => null,
        'shipmentLines' => null,
        'shipmentDates' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'statusDescription' => false,
        'purchaseOrderId' => false,
        'scac' => false,
        'trackingNo' => false,
        'externalTrackingURL' => false,
        'shipmentNo' => false,
        'actualShipmentDate' => false,
        'packageASN' => false,
        'carrierDescription' => false,
        'carrierServiceCode' => false,
        'packageId' => false,
        'lastModified' => false,
        'shipmentLines' => false,
        'shipmentDates' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'statusDescription' => 'statusDescription',
        'purchaseOrderId' => 'purchaseOrderId',
        'scac' => 'scac',
        'trackingNo' => 'trackingNo',
        'externalTrackingURL' => 'externalTrackingURL',
        'shipmentNo' => 'shipmentNo',
        'actualShipmentDate' => 'actualShipmentDate',
        'packageASN' => 'packageASN',
        'carrierDescription' => 'carrierDescription',
        'carrierServiceCode' => 'carrierServiceCode',
        'packageId' => 'packageId',
        'lastModified' => 'lastModified',
        'shipmentLines' => 'shipmentLines',
        'shipmentDates' => 'shipmentDates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'statusDescription' => 'setStatusDescription',
        'purchaseOrderId' => 'setPurchaseOrderId',
        'scac' => 'setScac',
        'trackingNo' => 'setTrackingNo',
        'externalTrackingURL' => 'setExternalTrackingURL',
        'shipmentNo' => 'setShipmentNo',
        'actualShipmentDate' => 'setActualShipmentDate',
        'packageASN' => 'setPackageASN',
        'carrierDescription' => 'setCarrierDescription',
        'carrierServiceCode' => 'setCarrierServiceCode',
        'packageId' => 'setPackageId',
        'lastModified' => 'setLastModified',
        'shipmentLines' => 'setShipmentLines',
        'shipmentDates' => 'setShipmentDates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'statusDescription' => 'getStatusDescription',
        'purchaseOrderId' => 'getPurchaseOrderId',
        'scac' => 'getScac',
        'trackingNo' => 'getTrackingNo',
        'externalTrackingURL' => 'getExternalTrackingURL',
        'shipmentNo' => 'getShipmentNo',
        'actualShipmentDate' => 'getActualShipmentDate',
        'packageASN' => 'getPackageASN',
        'carrierDescription' => 'getCarrierDescription',
        'carrierServiceCode' => 'getCarrierServiceCode',
        'packageId' => 'getPackageId',
        'lastModified' => 'getLastModified',
        'shipmentLines' => 'getShipmentLines',
        'shipmentDates' => 'getShipmentDates'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusDescription', $data ?? [], null);
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('scac', $data ?? [], null);
        $this->setIfExists('trackingNo', $data ?? [], null);
        $this->setIfExists('externalTrackingURL', $data ?? [], null);
        $this->setIfExists('shipmentNo', $data ?? [], null);
        $this->setIfExists('actualShipmentDate', $data ?? [], null);
        $this->setIfExists('packageASN', $data ?? [], null);
        $this->setIfExists('carrierDescription', $data ?? [], null);
        $this->setIfExists('carrierServiceCode', $data ?? [], null);
        $this->setIfExists('packageId', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('shipmentLines', $data ?? [], null);
        $this->setIfExists('shipmentDates', $data ?? [], null);
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
     * @param string|null $status Shipment status
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
     * Gets statusDescription
     *
     * @return string|null
    
     */
    public function getStatusDescription()
    {
        return $this->container['statusDescription'];
    }

    /**
     * Sets statusDescription
     *
     * @param string|null $statusDescription Shipment status description
     *
     * @return self
    
     */
    public function setStatusDescription($statusDescription)
    {
        if (is_null($statusDescription)) {
            throw new \InvalidArgumentException('non-nullable statusDescription cannot be null');
        }

        $this->container['statusDescription'] = $statusDescription;
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
     * @param string|null $purchaseOrderId Shipment purchase Order Id
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
     * Gets scac
     *
     * @return string|null
    
     */
    public function getScac()
    {
        return $this->container['scac'];
    }

    /**
     * Sets scac
     *
     * @param string|null $scac Shipment scac
     *
     * @return self
    
     */
    public function setScac($scac)
    {
        if (is_null($scac)) {
            throw new \InvalidArgumentException('non-nullable scac cannot be null');
        }

        $this->container['scac'] = $scac;
        return $this;
    }

    /**
     * Gets trackingNo
     *
     * @return string|null
    
     */
    public function getTrackingNo()
    {
        return $this->container['trackingNo'];
    }

    /**
     * Sets trackingNo
     *
     * @param string|null $trackingNo Shipment tracking number
     *
     * @return self
    
     */
    public function setTrackingNo($trackingNo)
    {
        if (is_null($trackingNo)) {
            throw new \InvalidArgumentException('non-nullable trackingNo cannot be null');
        }

        $this->container['trackingNo'] = $trackingNo;
        return $this;
    }

    /**
     * Gets externalTrackingURL
     *
     * @return string|null
    
     */
    public function getExternalTrackingURL()
    {
        return $this->container['externalTrackingURL'];
    }

    /**
     * Sets externalTrackingURL
     *
     * @param string|null $externalTrackingURL Shipment tracking URL
     *
     * @return self
    
     */
    public function setExternalTrackingURL($externalTrackingURL)
    {
        if (is_null($externalTrackingURL)) {
            throw new \InvalidArgumentException('non-nullable externalTrackingURL cannot be null');
        }

        $this->container['externalTrackingURL'] = $externalTrackingURL;
        return $this;
    }

    /**
     * Gets shipmentNo
     *
     * @return string|null
    
     */
    public function getShipmentNo()
    {
        return $this->container['shipmentNo'];
    }

    /**
     * Sets shipmentNo
     *
     * @param string|null $shipmentNo Shipment number
     *
     * @return self
    
     */
    public function setShipmentNo($shipmentNo)
    {
        if (is_null($shipmentNo)) {
            throw new \InvalidArgumentException('non-nullable shipmentNo cannot be null');
        }

        $this->container['shipmentNo'] = $shipmentNo;
        return $this;
    }

    /**
     * Gets actualShipmentDate
     *
     * @return string|null
    
     */
    public function getActualShipmentDate()
    {
        return $this->container['actualShipmentDate'];
    }

    /**
     * Sets actualShipmentDate
     *
     * @param string|null $actualShipmentDate Actual shipment date
     *
     * @return self
    
     */
    public function setActualShipmentDate($actualShipmentDate)
    {
        if (is_null($actualShipmentDate)) {
            throw new \InvalidArgumentException('non-nullable actualShipmentDate cannot be null');
        }

        $this->container['actualShipmentDate'] = $actualShipmentDate;
        return $this;
    }

    /**
     * Gets packageASN
     *
     * @return string|null
    
     */
    public function getPackageASN()
    {
        return $this->container['packageASN'];
    }

    /**
     * Sets packageASN
     *
     * @param string|null $packageASN Shipment packageASN number
     *
     * @return self
    
     */
    public function setPackageASN($packageASN)
    {
        if (is_null($packageASN)) {
            throw new \InvalidArgumentException('non-nullable packageASN cannot be null');
        }

        $this->container['packageASN'] = $packageASN;
        return $this;
    }

    /**
     * Gets carrierDescription
     *
     * @return string|null
    
     */
    public function getCarrierDescription()
    {
        return $this->container['carrierDescription'];
    }

    /**
     * Sets carrierDescription
     *
     * @param string|null $carrierDescription Shipment carrier description
     *
     * @return self
    
     */
    public function setCarrierDescription($carrierDescription)
    {
        if (is_null($carrierDescription)) {
            throw new \InvalidArgumentException('non-nullable carrierDescription cannot be null');
        }

        $this->container['carrierDescription'] = $carrierDescription;
        return $this;
    }

    /**
     * Gets carrierServiceCode
     *
     * @return string|null
    
     */
    public function getCarrierServiceCode()
    {
        return $this->container['carrierServiceCode'];
    }

    /**
     * Sets carrierServiceCode
     *
     * @param string|null $carrierServiceCode Shipment carrier service code
     *
     * @return self
    
     */
    public function setCarrierServiceCode($carrierServiceCode)
    {
        if (is_null($carrierServiceCode)) {
            throw new \InvalidArgumentException('non-nullable carrierServiceCode cannot be null');
        }

        $this->container['carrierServiceCode'] = $carrierServiceCode;
        return $this;
    }

    /**
     * Gets packageId
     *
     * @return string|null
    
     */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
     * Sets packageId
     *
     * @param string|null $packageId Shipment package Id
     *
     * @return self
    
     */
    public function setPackageId($packageId)
    {
        if (is_null($packageId)) {
            throw new \InvalidArgumentException('non-nullable packageId cannot be null');
        }

        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return string|null
    
     */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param string|null $lastModified Shipment lastModified date
     *
     * @return self
    
     */
    public function setLastModified($lastModified)
    {
        if (is_null($lastModified)) {
            throw new \InvalidArgumentException('non-nullable lastModified cannot be null');
        }

        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
     * Gets shipmentLines
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipmentLine[]|null
    
     */
    public function getShipmentLines()
    {
        return $this->container['shipmentLines'];
    }

    /**
     * Sets shipmentLines
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipmentLine[]|null $shipmentLines Shipment line details
     *
     * @return self
    
     */
    public function setShipmentLines($shipmentLines)
    {
        if (is_null($shipmentLines)) {
            throw new \InvalidArgumentException('non-nullable shipmentLines cannot be null');
        }

        $this->container['shipmentLines'] = $shipmentLines;
        return $this;
    }

    /**
     * Gets shipmentDates
     *
     * @return \Walmart\Models\MP\US\Fulfillment\OrderDate[]|null
    
     */
    public function getShipmentDates()
    {
        return $this->container['shipmentDates'];
    }

    /**
     * Sets shipmentDates
     *
     * @param \Walmart\Models\MP\US\Fulfillment\OrderDate[]|null $shipmentDates Shipment dates
     *
     * @return self
    
     */
    public function setShipmentDates($shipmentDates)
    {
        if (is_null($shipmentDates)) {
            throw new \InvalidArgumentException('non-nullable shipmentDates cannot be null');
        }

        $this->container['shipmentDates'] = $shipmentDates;
        return $this;
    }
}

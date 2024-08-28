<?php

/**
 * CarrierQuoteRequestV2Wrapper
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
 * CarrierQuoteRequestV2Wrapper Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CarrierQuoteRequestV2Wrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierQuoteRequestV2Wrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'shipmentSource' => 'string',
        'pickupFromDateTime' => '\DateTime',
        'pickupToDateTime' => '\DateTime',
        'deliveryFromDateTime' => '\DateTime',
        'deliveryToDateTime' => '\DateTime',
        'customer' => '\Walmart\Models\MP\US\Fulfillment\Customer',
        'originLocation' => '\Walmart\Models\MP\US\Fulfillment\OriginLocation',
        'destinationLocation' => '\Walmart\Models\MP\US\Fulfillment\DestinationLocation',
        'returnLocation' => '\Walmart\Models\MP\US\Fulfillment\ReturnLocation',
        'shipmentPackages' => '\Walmart\Models\MP\US\Fulfillment\ShipmentPackage[]',
        'mode' => 'string',
        'freightClass' => 'string',
        'declaredValue' => 'int',
        'loadTypes' => '\Walmart\Models\MP\US\Fulfillment\LoadTypeDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'shipmentSource' => null,
        'pickupFromDateTime' => 'date-time',
        'pickupToDateTime' => 'date-time',
        'deliveryFromDateTime' => 'date-time',
        'deliveryToDateTime' => 'date-time',
        'customer' => null,
        'originLocation' => null,
        'destinationLocation' => null,
        'returnLocation' => null,
        'shipmentPackages' => null,
        'mode' => null,
        'freightClass' => null,
        'declaredValue' => 'int32',
        'loadTypes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'shipmentSource' => false,
        'pickupFromDateTime' => false,
        'pickupToDateTime' => false,
        'deliveryFromDateTime' => false,
        'deliveryToDateTime' => false,
        'customer' => false,
        'originLocation' => false,
        'destinationLocation' => false,
        'returnLocation' => false,
        'shipmentPackages' => false,
        'mode' => false,
        'freightClass' => false,
        'declaredValue' => false,
        'loadTypes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'shipmentSource' => 'shipmentSource',
        'pickupFromDateTime' => 'pickupFromDateTime',
        'pickupToDateTime' => 'pickupToDateTime',
        'deliveryFromDateTime' => 'deliveryFromDateTime',
        'deliveryToDateTime' => 'deliveryToDateTime',
        'customer' => 'customer',
        'originLocation' => 'originLocation',
        'destinationLocation' => 'destinationLocation',
        'returnLocation' => 'returnLocation',
        'shipmentPackages' => 'shipmentPackages',
        'mode' => 'mode',
        'freightClass' => 'freightClass',
        'declaredValue' => 'declaredValue',
        'loadTypes' => 'loadTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'shipmentSource' => 'setShipmentSource',
        'pickupFromDateTime' => 'setPickupFromDateTime',
        'pickupToDateTime' => 'setPickupToDateTime',
        'deliveryFromDateTime' => 'setDeliveryFromDateTime',
        'deliveryToDateTime' => 'setDeliveryToDateTime',
        'customer' => 'setCustomer',
        'originLocation' => 'setOriginLocation',
        'destinationLocation' => 'setDestinationLocation',
        'returnLocation' => 'setReturnLocation',
        'shipmentPackages' => 'setShipmentPackages',
        'mode' => 'setMode',
        'freightClass' => 'setFreightClass',
        'declaredValue' => 'setDeclaredValue',
        'loadTypes' => 'setLoadTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'shipmentSource' => 'getShipmentSource',
        'pickupFromDateTime' => 'getPickupFromDateTime',
        'pickupToDateTime' => 'getPickupToDateTime',
        'deliveryFromDateTime' => 'getDeliveryFromDateTime',
        'deliveryToDateTime' => 'getDeliveryToDateTime',
        'customer' => 'getCustomer',
        'originLocation' => 'getOriginLocation',
        'destinationLocation' => 'getDestinationLocation',
        'returnLocation' => 'getReturnLocation',
        'shipmentPackages' => 'getShipmentPackages',
        'mode' => 'getMode',
        'freightClass' => 'getFreightClass',
        'declaredValue' => 'getDeclaredValue',
        'loadTypes' => 'getLoadTypes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('shipmentSource', $data ?? [], null);
        $this->setIfExists('pickupFromDateTime', $data ?? [], null);
        $this->setIfExists('pickupToDateTime', $data ?? [], null);
        $this->setIfExists('deliveryFromDateTime', $data ?? [], null);
        $this->setIfExists('deliveryToDateTime', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('originLocation', $data ?? [], null);
        $this->setIfExists('destinationLocation', $data ?? [], null);
        $this->setIfExists('returnLocation', $data ?? [], null);
        $this->setIfExists('shipmentPackages', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], 'PARCEL');
        $this->setIfExists('freightClass', $data ?? [], null);
        $this->setIfExists('declaredValue', $data ?? [], null);
        $this->setIfExists('loadTypes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['shipmentSource'] === null) {
            $invalidProperties[] = "'shipmentSource' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['originLocation'] === null) {
            $invalidProperties[] = "'originLocation' can't be null";
        }
        if ($this->container['destinationLocation'] === null) {
            $invalidProperties[] = "'destinationLocation' can't be null";
        }
        if ($this->container['returnLocation'] === null) {
            $invalidProperties[] = "'returnLocation' can't be null";
        }
        if ($this->container['shipmentPackages'] === null) {
            $invalidProperties[] = "'shipmentPackages' can't be null";
        }





        if ((count($this->container['shipmentPackages']) > 5000)) {
            $invalidProperties[] = "invalid value for 'shipmentPackages', number of items must be less than or equal to 5000.";
        }


        if ((count($this->container['shipmentPackages']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipmentPackages', number of items must be greater than or equal to 1.";
        }if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets shipmentId
     *
     * @return string
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId shipmentId
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets shipmentSource
     *
     * @return string
    
     */
    public function getShipmentSource()
    {
        return $this->container['shipmentSource'];
    }

    /**
     * Sets shipmentSource
     *
     * @param string $shipmentSource shipmentSource
     *
     * @return self
    
     */
    public function setShipmentSource($shipmentSource)
    {
        if (is_null($shipmentSource)) {
            throw new \InvalidArgumentException('non-nullable shipmentSource cannot be null');
        }

        $this->container['shipmentSource'] = $shipmentSource;
        return $this;
    }

    /**
     * Gets pickupFromDateTime
     *
     * @return \DateTime|null
    
     */
    public function getPickupFromDateTime()
    {
        return $this->container['pickupFromDateTime'];
    }

    /**
     * Sets pickupFromDateTime
     *
     * @param \DateTime|null $pickupFromDateTime pickupFromDateTime
     *
     * @return self
    
     */
    public function setPickupFromDateTime($pickupFromDateTime)
    {
        if (is_null($pickupFromDateTime)) {
            throw new \InvalidArgumentException('non-nullable pickupFromDateTime cannot be null');
        }

        $this->container['pickupFromDateTime'] = $pickupFromDateTime;
        return $this;
    }

    /**
     * Gets pickupToDateTime
     *
     * @return \DateTime|null
    
     */
    public function getPickupToDateTime()
    {
        return $this->container['pickupToDateTime'];
    }

    /**
     * Sets pickupToDateTime
     *
     * @param \DateTime|null $pickupToDateTime pickupToDateTime
     *
     * @return self
    
     */
    public function setPickupToDateTime($pickupToDateTime)
    {
        if (is_null($pickupToDateTime)) {
            throw new \InvalidArgumentException('non-nullable pickupToDateTime cannot be null');
        }

        $this->container['pickupToDateTime'] = $pickupToDateTime;
        return $this;
    }

    /**
     * Gets deliveryFromDateTime
     *
     * @return \DateTime|null
    
     */
    public function getDeliveryFromDateTime()
    {
        return $this->container['deliveryFromDateTime'];
    }

    /**
     * Sets deliveryFromDateTime
     *
     * @param \DateTime|null $deliveryFromDateTime deliveryFromDateTime
     *
     * @return self
    
     */
    public function setDeliveryFromDateTime($deliveryFromDateTime)
    {
        if (is_null($deliveryFromDateTime)) {
            throw new \InvalidArgumentException('non-nullable deliveryFromDateTime cannot be null');
        }

        $this->container['deliveryFromDateTime'] = $deliveryFromDateTime;
        return $this;
    }

    /**
     * Gets deliveryToDateTime
     *
     * @return \DateTime|null
    
     */
    public function getDeliveryToDateTime()
    {
        return $this->container['deliveryToDateTime'];
    }

    /**
     * Sets deliveryToDateTime
     *
     * @param \DateTime|null $deliveryToDateTime deliveryToDateTime
     *
     * @return self
    
     */
    public function setDeliveryToDateTime($deliveryToDateTime)
    {
        if (is_null($deliveryToDateTime)) {
            throw new \InvalidArgumentException('non-nullable deliveryToDateTime cannot be null');
        }

        $this->container['deliveryToDateTime'] = $deliveryToDateTime;
        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Walmart\Models\MP\US\Fulfillment\Customer
    
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Walmart\Models\MP\US\Fulfillment\Customer $customer customer
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
     * Gets originLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\OriginLocation
    
     */
    public function getOriginLocation()
    {
        return $this->container['originLocation'];
    }

    /**
     * Sets originLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\OriginLocation $originLocation originLocation
     *
     * @return self
    
     */
    public function setOriginLocation($originLocation)
    {
        if (is_null($originLocation)) {
            throw new \InvalidArgumentException('non-nullable originLocation cannot be null');
        }

        $this->container['originLocation'] = $originLocation;
        return $this;
    }

    /**
     * Gets destinationLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\DestinationLocation
    
     */
    public function getDestinationLocation()
    {
        return $this->container['destinationLocation'];
    }

    /**
     * Sets destinationLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\DestinationLocation $destinationLocation destinationLocation
     *
     * @return self
    
     */
    public function setDestinationLocation($destinationLocation)
    {
        if (is_null($destinationLocation)) {
            throw new \InvalidArgumentException('non-nullable destinationLocation cannot be null');
        }

        $this->container['destinationLocation'] = $destinationLocation;
        return $this;
    }

    /**
     * Gets returnLocation
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ReturnLocation
    
     */
    public function getReturnLocation()
    {
        return $this->container['returnLocation'];
    }

    /**
     * Sets returnLocation
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ReturnLocation $returnLocation returnLocation
     *
     * @return self
    
     */
    public function setReturnLocation($returnLocation)
    {
        if (is_null($returnLocation)) {
            throw new \InvalidArgumentException('non-nullable returnLocation cannot be null');
        }

        $this->container['returnLocation'] = $returnLocation;
        return $this;
    }

    /**
     * Gets shipmentPackages
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipmentPackage[]
    
     */
    public function getShipmentPackages()
    {
        return $this->container['shipmentPackages'];
    }

    /**
     * Sets shipmentPackages
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipmentPackage[] $shipmentPackages shipmentPackages
     *
     * @return self
    
     */
    public function setShipmentPackages($shipmentPackages)
    {
        if (is_null($shipmentPackages)) {
            throw new \InvalidArgumentException('non-nullable shipmentPackages cannot be null');
        }





        if ((count($shipmentPackages) > 5000)) {
            throw new \InvalidArgumentException('invalid value for $shipmentPackages when calling CarrierQuoteRequestV2Wrapper., number of items must be less than or equal to 5000.');
        }
        if ((count($shipmentPackages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipmentPackages when calling CarrierQuoteRequestV2Wrapper., number of items must be greater than or equal to 1.');
        }

        $this->container['shipmentPackages'] = $shipmentPackages;
        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
    
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return self
    
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }

        $this->container['mode'] = $mode;
        return $this;
    }

    /**
     * Gets freightClass
     *
     * @return string|null
    
     */
    public function getFreightClass()
    {
        return $this->container['freightClass'];
    }

    /**
     * Sets freightClass
     *
     * @param string|null $freightClass freightClass
     *
     * @return self
    
     */
    public function setFreightClass($freightClass)
    {
        if (is_null($freightClass)) {
            throw new \InvalidArgumentException('non-nullable freightClass cannot be null');
        }

        $this->container['freightClass'] = $freightClass;
        return $this;
    }

    /**
     * Gets declaredValue
     *
     * @return int|null
    
     */
    public function getDeclaredValue()
    {
        return $this->container['declaredValue'];
    }

    /**
     * Sets declaredValue
     *
     * @param int|null $declaredValue declaredValue
     *
     * @return self
    
     */
    public function setDeclaredValue($declaredValue)
    {
        if (is_null($declaredValue)) {
            throw new \InvalidArgumentException('non-nullable declaredValue cannot be null');
        }

        $this->container['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Gets loadTypes
     *
     * @return \Walmart\Models\MP\US\Fulfillment\LoadTypeDetails[]|null
    
     */
    public function getLoadTypes()
    {
        return $this->container['loadTypes'];
    }

    /**
     * Sets loadTypes
     *
     * @param \Walmart\Models\MP\US\Fulfillment\LoadTypeDetails[]|null $loadTypes loadTypes
     *
     * @return self
    
     */
    public function setLoadTypes($loadTypes)
    {
        if (is_null($loadTypes)) {
            throw new \InvalidArgumentException('non-nullable loadTypes cannot be null');
        }

        $this->container['loadTypes'] = $loadTypes;
        return $this;
    }
}

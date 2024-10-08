<?php

/**
 * PreviewShipmentItem
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
 * PreviewShipmentItem Class Doc Comment
 *
 * @category Class

 * @description Shipment items

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PreviewShipmentItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PreviewShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'vendorSku' => 'string',
        'productType' => 'string',
        'productId' => 'string',
        'itemQty' => 'int',
        'netTransferCharge' => 'float',
        'currencyUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'vendorSku' => null,
        'productType' => null,
        'productId' => null,
        'itemQty' => 'int32',
        'netTransferCharge' => null,
        'currencyUnit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendorSku' => false,
        'productType' => false,
        'productId' => false,
        'itemQty' => false,
        'netTransferCharge' => false,
        'currencyUnit' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'vendorSku' => 'vendorSku',
        'productType' => 'productType',
        'productId' => 'productId',
        'itemQty' => 'itemQty',
        'netTransferCharge' => 'netTransferCharge',
        'currencyUnit' => 'currencyUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'vendorSku' => 'setVendorSku',
        'productType' => 'setProductType',
        'productId' => 'setProductId',
        'itemQty' => 'setItemQty',
        'netTransferCharge' => 'setNetTransferCharge',
        'currencyUnit' => 'setCurrencyUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'vendorSku' => 'getVendorSku',
        'productType' => 'getProductType',
        'productId' => 'getProductId',
        'itemQty' => 'getItemQty',
        'netTransferCharge' => 'getNetTransferCharge',
        'currencyUnit' => 'getCurrencyUnit'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('vendorSku', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('itemQty', $data ?? [], null);
        $this->setIfExists('netTransferCharge', $data ?? [], null);
        $this->setIfExists('currencyUnit', $data ?? [], null);
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
     * Gets vendorSku
     *
     * @return string|null
    
     */
    public function getVendorSku()
    {
        return $this->container['vendorSku'];
    }

    /**
     * Sets vendorSku
     *
     * @param string|null $vendorSku Vendor SKU
     *
     * @return self
    
     */
    public function setVendorSku($vendorSku)
    {
        if (is_null($vendorSku)) {
            throw new \InvalidArgumentException('non-nullable vendorSku cannot be null');
        }

        $this->container['vendorSku'] = $vendorSku;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType Product type: GTIN/UPC/EAN
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }

    /**
     * Gets productId
     *
     * @return string|null
    
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param string|null $productId Unique product identifier
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
     * Gets itemQty
     *
     * @return int|null
    
     */
    public function getItemQty()
    {
        return $this->container['itemQty'];
    }

    /**
     * Sets itemQty
     *
     * @param int|null $itemQty Item quantity
     *
     * @return self
    
     */
    public function setItemQty($itemQty)
    {
        if (is_null($itemQty)) {
            throw new \InvalidArgumentException('non-nullable itemQty cannot be null');
        }

        $this->container['itemQty'] = $itemQty;
        return $this;
    }

    /**
     * Gets netTransferCharge
     *
     * @return float|null
    
     */
    public function getNetTransferCharge()
    {
        return $this->container['netTransferCharge'];
    }

    /**
     * Sets netTransferCharge
     *
     * @param float|null $netTransferCharge Total charge if you are using ITS.
     *
     * @return self
    
     */
    public function setNetTransferCharge($netTransferCharge)
    {
        if (is_null($netTransferCharge)) {
            throw new \InvalidArgumentException('non-nullable netTransferCharge cannot be null');
        }

        $this->container['netTransferCharge'] = $netTransferCharge;
        return $this;
    }

    /**
     * Gets currencyUnit
     *
     * @return string|null
    
     */
    public function getCurrencyUnit()
    {
        return $this->container['currencyUnit'];
    }

    /**
     * Sets currencyUnit
     *
     * @param string|null $currencyUnit Currency in which transfer charge is estimated
     *
     * @return self
    
     */
    public function setCurrencyUnit($currencyUnit)
    {
        if (is_null($currencyUnit)) {
            throw new \InvalidArgumentException('non-nullable currencyUnit cannot be null');
        }

        $this->container['currencyUnit'] = $currencyUnit;
        return $this;
    }
}

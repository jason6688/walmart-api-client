<?php

/**
 * GetInventoryLogsResponsePayload
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
 * GetInventoryLogsResponsePayload Class Doc Comment
 *
 * @category Class

 * @description Payload Section

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class GetInventoryLogsResponsePayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetInventoryLogsResponsePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gtin' => 'string',
        'vendorSku' => 'string',
        'productName' => 'string',
        'inventoryLog' => '\Walmart\Models\MP\US\Fulfillment\InventoryLog[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gtin' => null,
        'vendorSku' => null,
        'productName' => null,
        'inventoryLog' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gtin' => false,
        'vendorSku' => false,
        'productName' => false,
        'inventoryLog' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gtin' => 'gtin',
        'vendorSku' => 'vendorSku',
        'productName' => 'productName',
        'inventoryLog' => 'inventoryLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gtin' => 'setGtin',
        'vendorSku' => 'setVendorSku',
        'productName' => 'setProductName',
        'inventoryLog' => 'setInventoryLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gtin' => 'getGtin',
        'vendorSku' => 'getVendorSku',
        'productName' => 'getProductName',
        'inventoryLog' => 'getInventoryLog'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('vendorSku', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('inventoryLog', $data ?? [], null);
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
     * Gets gtin
     *
     * @return string|null
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin GTIN
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
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
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName Product Name
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets inventoryLog
     *
     * @return \Walmart\Models\MP\US\Fulfillment\InventoryLog[]|null
    
     */
    public function getInventoryLog()
    {
        return $this->container['inventoryLog'];
    }

    /**
     * Sets inventoryLog
     *
     * @param \Walmart\Models\MP\US\Fulfillment\InventoryLog[]|null $inventoryLog Inventory Log records
     *
     * @return self
    
     */
    public function setInventoryLog($inventoryLog)
    {
        if (is_null($inventoryLog)) {
            throw new \InvalidArgumentException('non-nullable inventoryLog cannot be null');
        }

        $this->container['inventoryLog'] = $inventoryLog;
        return $this;
    }
}

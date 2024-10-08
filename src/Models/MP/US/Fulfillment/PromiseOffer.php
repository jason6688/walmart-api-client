<?php

/**
 * PromiseOffer
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
 * PromiseOffer Class Doc Comment
 *
 * @category Class

 * @description Offer details. List of an items/vendor sku.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PromiseOffer extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromiseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'lineId' => 'string',
        'salesUnit' => 'string',
        'requestedQuantity' => '\Walmart\Models\MP\US\Fulfillment\RequestedQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'lineId' => null,
        'salesUnit' => null,
        'requestedQuantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'lineId' => false,
        'salesUnit' => false,
        'requestedQuantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'lineId' => 'lineId',
        'salesUnit' => 'salesUnit',
        'requestedQuantity' => 'requestedQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'lineId' => 'setLineId',
        'salesUnit' => 'setSalesUnit',
        'requestedQuantity' => 'setRequestedQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'lineId' => 'getLineId',
        'salesUnit' => 'getSalesUnit',
        'requestedQuantity' => 'getRequestedQuantity'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('lineId', $data ?? [], null);
        $this->setIfExists('salesUnit', $data ?? [], null);
        $this->setIfExists('requestedQuantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['lineId'] === null) {
            $invalidProperties[] = "'lineId' can't be null";
        }
        if ($this->container['salesUnit'] === null) {
            $invalidProperties[] = "'salesUnit' can't be null";
        }
        if ($this->container['requestedQuantity'] === null) {
            $invalidProperties[] = "'requestedQuantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The identifier of the item in seller system (vendor sku).
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets lineId
     *
     * @return string
    
     */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
     * Sets lineId
     *
     * @param string $lineId The identifier (UUID) for each line assigned by seller systems.
     *
     * @return self
    
     */
    public function setLineId($lineId)
    {
        if (is_null($lineId)) {
            throw new \InvalidArgumentException('non-nullable lineId cannot be null');
        }

        $this->container['lineId'] = $lineId;
        return $this;
    }

    /**
     * Gets salesUnit
     *
     * @return string
    
     */
    public function getSalesUnit()
    {
        return $this->container['salesUnit'];
    }

    /**
     * Sets salesUnit
     *
     * @param string $salesUnit Sales unit type. Currently supported type : 'EACH'
     *
     * @return self
    
     */
    public function setSalesUnit($salesUnit)
    {
        if (is_null($salesUnit)) {
            throw new \InvalidArgumentException('non-nullable salesUnit cannot be null');
        }

        $this->container['salesUnit'] = $salesUnit;
        return $this;
    }

    /**
     * Gets requestedQuantity
     *
     * @return \Walmart\Models\MP\US\Fulfillment\RequestedQuantity
    
     */
    public function getRequestedQuantity()
    {
        return $this->container['requestedQuantity'];
    }

    /**
     * Sets requestedQuantity
     *
     * @param \Walmart\Models\MP\US\Fulfillment\RequestedQuantity $requestedQuantity requestedQuantity
     *
     * @return self
    
     */
    public function setRequestedQuantity($requestedQuantity)
    {
        if (is_null($requestedQuantity)) {
            throw new \InvalidArgumentException('non-nullable requestedQuantity cannot be null');
        }

        $this->container['requestedQuantity'] = $requestedQuantity;
        return $this;
    }
}

<?php

/**
 * ItemPriceType
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Promotions;

use Walmart\Models\BaseModel;

/**
 * ItemPriceType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemPriceType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemPriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemIdentifier' => '\Walmart\Models\MP\US\Promotions\ItemIdentifierType',
        'pricingList' => '\Walmart\Models\MP\US\Promotions\PricingListType',
        'maxSalesRetailPrice' => '\Walmart\Models\MP\US\Promotions\MoneyType',
        'minAdvtPrice' => '\Walmart\Models\MP\US\Promotions\MoneyType',
        'rebate' => '\Walmart\Models\MP\US\Promotions\Rebate',
        'additionalAttributes' => '\Walmart\Models\MP\US\Promotions\AdditionalAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemIdentifier' => null,
        'pricingList' => null,
        'maxSalesRetailPrice' => null,
        'minAdvtPrice' => null,
        'rebate' => null,
        'additionalAttributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemIdentifier' => false,
        'pricingList' => false,
        'maxSalesRetailPrice' => false,
        'minAdvtPrice' => false,
        'rebate' => false,
        'additionalAttributes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemIdentifier' => 'itemIdentifier',
        'pricingList' => 'pricingList',
        'maxSalesRetailPrice' => 'maxSalesRetailPrice',
        'minAdvtPrice' => 'minAdvtPrice',
        'rebate' => 'rebate',
        'additionalAttributes' => 'additionalAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemIdentifier' => 'setItemIdentifier',
        'pricingList' => 'setPricingList',
        'maxSalesRetailPrice' => 'setMaxSalesRetailPrice',
        'minAdvtPrice' => 'setMinAdvtPrice',
        'rebate' => 'setRebate',
        'additionalAttributes' => 'setAdditionalAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemIdentifier' => 'getItemIdentifier',
        'pricingList' => 'getPricingList',
        'maxSalesRetailPrice' => 'getMaxSalesRetailPrice',
        'minAdvtPrice' => 'getMinAdvtPrice',
        'rebate' => 'getRebate',
        'additionalAttributes' => 'getAdditionalAttributes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemIdentifier', $data ?? [], null);
        $this->setIfExists('pricingList', $data ?? [], null);
        $this->setIfExists('maxSalesRetailPrice', $data ?? [], null);
        $this->setIfExists('minAdvtPrice', $data ?? [], null);
        $this->setIfExists('rebate', $data ?? [], null);
        $this->setIfExists('additionalAttributes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemIdentifier'] === null) {
            $invalidProperties[] = "'itemIdentifier' can't be null";
        }
        if ($this->container['pricingList'] === null) {
            $invalidProperties[] = "'pricingList' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets itemIdentifier
     *
     * @return \Walmart\Models\MP\US\Promotions\ItemIdentifierType
    
     */
    public function getItemIdentifier()
    {
        return $this->container['itemIdentifier'];
    }

    /**
     * Sets itemIdentifier
     *
     * @param \Walmart\Models\MP\US\Promotions\ItemIdentifierType $itemIdentifier itemIdentifier
     *
     * @return self
    
     */
    public function setItemIdentifier($itemIdentifier)
    {
        if (is_null($itemIdentifier)) {
            throw new \InvalidArgumentException('non-nullable itemIdentifier cannot be null');
        }

        $this->container['itemIdentifier'] = $itemIdentifier;
        return $this;
    }

    /**
     * Gets pricingList
     *
     * @return \Walmart\Models\MP\US\Promotions\PricingListType
    
     */
    public function getPricingList()
    {
        return $this->container['pricingList'];
    }

    /**
     * Sets pricingList
     *
     * @param \Walmart\Models\MP\US\Promotions\PricingListType $pricingList pricingList
     *
     * @return self
    
     */
    public function setPricingList($pricingList)
    {
        if (is_null($pricingList)) {
            throw new \InvalidArgumentException('non-nullable pricingList cannot be null');
        }

        $this->container['pricingList'] = $pricingList;
        return $this;
    }

    /**
     * Gets maxSalesRetailPrice
     *
     * @return \Walmart\Models\MP\US\Promotions\MoneyType|null
    
     */
    public function getMaxSalesRetailPrice()
    {
        return $this->container['maxSalesRetailPrice'];
    }

    /**
     * Sets maxSalesRetailPrice
     *
     * @param \Walmart\Models\MP\US\Promotions\MoneyType|null $maxSalesRetailPrice maxSalesRetailPrice
     *
     * @return self
    
     */
    public function setMaxSalesRetailPrice($maxSalesRetailPrice)
    {
        if (is_null($maxSalesRetailPrice)) {
            throw new \InvalidArgumentException('non-nullable maxSalesRetailPrice cannot be null');
        }

        $this->container['maxSalesRetailPrice'] = $maxSalesRetailPrice;
        return $this;
    }

    /**
     * Gets minAdvtPrice
     *
     * @return \Walmart\Models\MP\US\Promotions\MoneyType|null
    
     */
    public function getMinAdvtPrice()
    {
        return $this->container['minAdvtPrice'];
    }

    /**
     * Sets minAdvtPrice
     *
     * @param \Walmart\Models\MP\US\Promotions\MoneyType|null $minAdvtPrice minAdvtPrice
     *
     * @return self
    
     */
    public function setMinAdvtPrice($minAdvtPrice)
    {
        if (is_null($minAdvtPrice)) {
            throw new \InvalidArgumentException('non-nullable minAdvtPrice cannot be null');
        }

        $this->container['minAdvtPrice'] = $minAdvtPrice;
        return $this;
    }

    /**
     * Gets rebate
     *
     * @return \Walmart\Models\MP\US\Promotions\Rebate|null
    
     */
    public function getRebate()
    {
        return $this->container['rebate'];
    }

    /**
     * Sets rebate
     *
     * @param \Walmart\Models\MP\US\Promotions\Rebate|null $rebate rebate
     *
     * @return self
    
     */
    public function setRebate($rebate)
    {
        if (is_null($rebate)) {
            throw new \InvalidArgumentException('non-nullable rebate cannot be null');
        }

        $this->container['rebate'] = $rebate;
        return $this;
    }

    /**
     * Gets additionalAttributes
     *
     * @return \Walmart\Models\MP\US\Promotions\AdditionalAttributes|null
    
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     *
     * @param \Walmart\Models\MP\US\Promotions\AdditionalAttributes|null $additionalAttributes additionalAttributes
     *
     * @return self
    
     */
    public function setAdditionalAttributes($additionalAttributes)
    {
        if (is_null($additionalAttributes)) {
            throw new \InvalidArgumentException('non-nullable additionalAttributes cannot be null');
        }

        $this->container['additionalAttributes'] = $additionalAttributes;
        return $this;
    }
}

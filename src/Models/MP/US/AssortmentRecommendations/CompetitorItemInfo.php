<?php

/**
 * CompetitorItemInfo
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
 * Assortment Recommendations
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\AssortmentRecommendations;

use Walmart\Models\BaseModel;

/**
 * CompetitorItemInfo Class Doc Comment
 *
 * @category Class

 * @description Competitor's item information

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CompetitorItemInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CompetitorItemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemId' => 'string',
        'url' => 'string',
        'itemPrice' => '\Walmart\Models\MP\US\AssortmentRecommendations\Price',
        'shippingPrice' => '\Walmart\Models\MP\US\AssortmentRecommendations\Price'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemId' => null,
        'url' => null,
        'itemPrice' => null,
        'shippingPrice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemId' => false,
        'url' => false,
        'itemPrice' => false,
        'shippingPrice' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemId' => 'itemId',
        'url' => 'url',
        'itemPrice' => 'itemPrice',
        'shippingPrice' => 'shippingPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemId' => 'setItemId',
        'url' => 'setUrl',
        'itemPrice' => 'setItemPrice',
        'shippingPrice' => 'setShippingPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemId' => 'getItemId',
        'url' => 'getUrl',
        'itemPrice' => 'getItemPrice',
        'shippingPrice' => 'getShippingPrice'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('itemPrice', $data ?? [], null);
        $this->setIfExists('shippingPrice', $data ?? [], null);
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
     * Gets itemId
     *
     * @return string|null
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId Competitor item id.
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
    
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Competitor item url.
     *
     * @return self
    
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;
        return $this;
    }

    /**
     * Gets itemPrice
     *
     * @return \Walmart\Models\MP\US\AssortmentRecommendations\Price|null
    
     */
    public function getItemPrice()
    {
        return $this->container['itemPrice'];
    }

    /**
     * Sets itemPrice
     *
     * @param \Walmart\Models\MP\US\AssortmentRecommendations\Price|null $itemPrice itemPrice
     *
     * @return self
    
     */
    public function setItemPrice($itemPrice)
    {
        if (is_null($itemPrice)) {
            throw new \InvalidArgumentException('non-nullable itemPrice cannot be null');
        }

        $this->container['itemPrice'] = $itemPrice;
        return $this;
    }

    /**
     * Gets shippingPrice
     *
     * @return \Walmart\Models\MP\US\AssortmentRecommendations\Price|null
    
     */
    public function getShippingPrice()
    {
        return $this->container['shippingPrice'];
    }

    /**
     * Sets shippingPrice
     *
     * @param \Walmart\Models\MP\US\AssortmentRecommendations\Price|null $shippingPrice shippingPrice
     *
     * @return self
    
     */
    public function setShippingPrice($shippingPrice)
    {
        if (is_null($shippingPrice)) {
            throw new \InvalidArgumentException('non-nullable shippingPrice cannot be null');
        }

        $this->container['shippingPrice'] = $shippingPrice;
        return $this;
    }
}

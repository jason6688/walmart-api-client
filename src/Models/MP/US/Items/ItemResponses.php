<?php

/**
 * ItemResponses
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Models\BaseModel;

/**
 * ItemResponses Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ItemResponses extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'errors' => '\Walmart\Models\MP\US\Items\GatewayError[]',
        'itemResponse' => '\Walmart\Models\MP\US\Items\ItemResponse[]',
        'additionalAttributes' => '\Walmart\Models\MP\US\Items\NameValueAttributes',
        'totalItems' => 'int',
        'nextCursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'errors' => null,
        'itemResponse' => null,
        'additionalAttributes' => null,
        'totalItems' => 'int64',
        'nextCursor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'errors' => false,
        'itemResponse' => false,
        'additionalAttributes' => false,
        'totalItems' => false,
        'nextCursor' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'errors' => 'errors',
        'itemResponse' => 'ItemResponse',
        'additionalAttributes' => 'additionalAttributes',
        'totalItems' => 'totalItems',
        'nextCursor' => 'nextCursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'errors' => 'setErrors',
        'itemResponse' => 'setItemResponse',
        'additionalAttributes' => 'setAdditionalAttributes',
        'totalItems' => 'setTotalItems',
        'nextCursor' => 'setNextCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'errors' => 'getErrors',
        'itemResponse' => 'getItemResponse',
        'additionalAttributes' => 'getAdditionalAttributes',
        'totalItems' => 'getTotalItems',
        'nextCursor' => 'getNextCursor'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('itemResponse', $data ?? [], null);
        $this->setIfExists('additionalAttributes', $data ?? [], null);
        $this->setIfExists('totalItems', $data ?? [], null);
        $this->setIfExists('nextCursor', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemResponse'] === null) {
            $invalidProperties[] = "'itemResponse' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\MP\US\Items\GatewayError[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\US\Items\GatewayError[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }

    /**
     * Gets itemResponse
     *
     * @return \Walmart\Models\MP\US\Items\ItemResponse[]
    
     */
    public function getItemResponse()
    {
        return $this->container['itemResponse'];
    }

    /**
     * Sets itemResponse
     *
     * @param \Walmart\Models\MP\US\Items\ItemResponse[] $itemResponse Items included in the response list
     *
     * @return self
    
     */
    public function setItemResponse($itemResponse)
    {
        if (is_null($itemResponse)) {
            throw new \InvalidArgumentException('non-nullable itemResponse cannot be null');
        }

        $this->container['itemResponse'] = $itemResponse;
        return $this;
    }

    /**
     * Gets additionalAttributes
     *
     * @return \Walmart\Models\MP\US\Items\NameValueAttributes|null
    
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     *
     * @param \Walmart\Models\MP\US\Items\NameValueAttributes|null $additionalAttributes additionalAttributes
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

    /**
     * Gets totalItems
     *
     * @return int|null
    
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param int|null $totalItems Total items for the query
     *
     * @return self
    
     */
    public function setTotalItems($totalItems)
    {
        if (is_null($totalItems)) {
            throw new \InvalidArgumentException('non-nullable totalItems cannot be null');
        }

        $this->container['totalItems'] = $totalItems;
        return $this;
    }

    /**
     * Gets nextCursor
     *
     * @return string|null
    
     */
    public function getNextCursor()
    {
        return $this->container['nextCursor'];
    }

    /**
     * Sets nextCursor
     *
     * @param string|null $nextCursor Used for pagination to fetch the next set of items
     *
     * @return self
    
     */
    public function setNextCursor($nextCursor)
    {
        if (is_null($nextCursor)) {
            throw new \InvalidArgumentException('non-nullable nextCursor cannot be null');
        }

        $this->container['nextCursor'] = $nextCursor;
        return $this;
    }
}

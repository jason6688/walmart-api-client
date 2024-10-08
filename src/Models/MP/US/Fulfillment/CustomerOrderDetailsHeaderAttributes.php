<?php

/**
 * CustomerOrderDetailsHeaderAttributes
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
 * CustomerOrderDetailsHeaderAttributes Class Doc Comment
 *
 * @category Class

 * @description Header attributes

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class CustomerOrderDetailsHeaderAttributes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomerOrderDetailsHeaderAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'martId' => 'string',
        'buId' => 'string',
        'pageCount' => 'int',
        'totalCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'martId' => null,
        'buId' => null,
        'pageCount' => 'int32',
        'totalCount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'martId' => false,
        'buId' => false,
        'pageCount' => false,
        'totalCount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'martId' => 'martId',
        'buId' => 'buId',
        'pageCount' => 'pageCount',
        'totalCount' => 'totalCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'martId' => 'setMartId',
        'buId' => 'setBuId',
        'pageCount' => 'setPageCount',
        'totalCount' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'martId' => 'getMartId',
        'buId' => 'getBuId',
        'pageCount' => 'getPageCount',
        'totalCount' => 'getTotalCount'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('martId', $data ?? [], null);
        $this->setIfExists('buId', $data ?? [], null);
        $this->setIfExists('pageCount', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
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
     * Gets martId
     *
     * @return string|null
    
     */
    public function getMartId()
    {
        return $this->container['martId'];
    }

    /**
     * Sets martId
     *
     * @param string|null $martId martId passed in header
     *
     * @return self
    
     */
    public function setMartId($martId)
    {
        if (is_null($martId)) {
            throw new \InvalidArgumentException('non-nullable martId cannot be null');
        }

        $this->container['martId'] = $martId;
        return $this;
    }

    /**
     * Gets buId
     *
     * @return string|null
    
     */
    public function getBuId()
    {
        return $this->container['buId'];
    }

    /**
     * Sets buId
     *
     * @param string|null $buId buId passed in header
     *
     * @return self
    
     */
    public function setBuId($buId)
    {
        if (is_null($buId)) {
            throw new \InvalidArgumentException('non-nullable buId cannot be null');
        }

        $this->container['buId'] = $buId;
        return $this;
    }

    /**
     * Gets pageCount
     *
     * @return int|null
    
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param int|null $pageCount page count of the orders available with given filters
     *
     * @return self
    
     */
    public function setPageCount($pageCount)
    {
        if (is_null($pageCount)) {
            throw new \InvalidArgumentException('non-nullable pageCount cannot be null');
        }

        $this->container['pageCount'] = $pageCount;
        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
    
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount total count of orders available with given filters
     *
     * @return self
    
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }

        $this->container['totalCount'] = $totalCount;
        return $this;
    }
}

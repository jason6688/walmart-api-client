<?php

/**
 * MetaDataRequest
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
 * MetaDataRequest Class Doc Comment
 *
 * @category Class

 * @description Meta information for the request.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class MetaDataRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MetaDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'limit' => 'int',
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
        'limit' => 'int32',
        'nextCursor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'limit' => false,
        'nextCursor' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'limit' => 'limit',
        'nextCursor' => 'nextCursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'limit' => 'setLimit',
        'nextCursor' => 'setNextCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'limit' => 'getLimit',
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
        $this->setIfExists('limit', $data ?? [], 200);
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



        if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
            $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
        }


        if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
        }





        return $invalidProperties;
    }

    /**
     * Gets limit
     *
     * @return int|null
    
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Number of records expected in the request
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }


        if (($limit > 200)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling MetaDataRequest., must be smaller than or equal to 200.');
        }

        if (($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling MetaDataRequest., must be bigger than or equal to 1.');
        }




        $this->container['limit'] = $limit;
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
     * @param string|null $nextCursor Used for pagination when more than 200 records are retrieved. The nextCursor value of the response includes a marker which needs to be passed in next call which retrieves the next page of results.
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

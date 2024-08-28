<?php

/**
 * FeedRecordResponseJson
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
 * Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\Feeds;

use Walmart\Models\BaseModel;

/**
 * FeedRecordResponseJson Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedRecordResponseJson extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedRecordResponse_json';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'errors' => '\Walmart\Models\MP\CA\Feeds\GatewayError[]',
        'totalResults' => 'int',
        'offset' => 'int',
        'limit' => 'int',
        'results' => '\Walmart\Models\MP\CA\Feeds\ResultRecordJson'
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
        'totalResults' => 'int64',
        'offset' => 'int64',
        'limit' => 'int32',
        'results' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'errors' => false,
        'totalResults' => false,
        'offset' => false,
        'limit' => false,
        'results' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'errors' => 'errors',
        'totalResults' => 'totalResults',
        'offset' => 'offset',
        'limit' => 'limit',
        'results' => 'results'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'errors' => 'setErrors',
        'totalResults' => 'setTotalResults',
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'results' => 'setResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'errors' => 'getErrors',
        'totalResults' => 'getTotalResults',
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'results' => 'getResults'
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
        $this->setIfExists('totalResults', $data ?? [], null);
        $this->setIfExists('offset', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('results', $data ?? [], null);
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
     * Gets errors
     *
     * @return \Walmart\Models\MP\CA\Feeds\GatewayError[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\CA\Feeds\GatewayError[]|null $errors errors
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
     * Gets totalResults
     *
     * @return int|null
    
     */
    public function getTotalResults()
    {
        return $this->container['totalResults'];
    }

    /**
     * Sets totalResults
     *
     * @param int|null $totalResults Total number of feeds returned
     *
     * @return self
    
     */
    public function setTotalResults($totalResults)
    {
        if (is_null($totalResults)) {
            throw new \InvalidArgumentException('non-nullable totalResults cannot be null');
        }

        $this->container['totalResults'] = $totalResults;
        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
    
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset The object response to the starting number, where 0 is the first available
     *
     * @return self
    
     */
    public function setOffset($offset)
    {
        if (is_null($offset)) {
            throw new \InvalidArgumentException('non-nullable offset cannot be null');
        }

        $this->container['offset'] = $offset;
        return $this;
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
     * @param int|null $limit The number of items to be returned
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }

        $this->container['limit'] = $limit;
        return $this;
    }

    /**
     * Gets results
     *
     * @return \Walmart\Models\MP\CA\Feeds\ResultRecordJson|null
    
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \Walmart\Models\MP\CA\Feeds\ResultRecordJson|null $results results
     *
     * @return self
    
     */
    public function setResults($results)
    {
        if (is_null($results)) {
            throw new \InvalidArgumentException('non-nullable results cannot be null');
        }

        $this->container['results'] = $results;
        return $this;
    }
}

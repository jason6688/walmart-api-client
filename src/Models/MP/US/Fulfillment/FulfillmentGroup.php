<?php

/**
 * FulfillmentGroup
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
 * FulfillmentGroup Class Doc Comment
 *
 * @category Class

 * @description Fulfillment Group details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FulfillmentGroup extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentOptions' => '\Walmart\Models\MP\US\Fulfillment\FulfillmentOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentOptions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentOptions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentOptions' => 'fulfillmentOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentOptions' => 'setFulfillmentOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentOptions' => 'getFulfillmentOptions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentOptions', $data ?? [], null);
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
     * Gets fulfillmentOptions
     *
     * @return \Walmart\Models\MP\US\Fulfillment\FulfillmentOption[]|null
    
     */
    public function getFulfillmentOptions()
    {
        return $this->container['fulfillmentOptions'];
    }

    /**
     * Sets fulfillmentOptions
     *
     * @param \Walmart\Models\MP\US\Fulfillment\FulfillmentOption[]|null $fulfillmentOptions Fulfillment options details.
     *
     * @return self
    
     */
    public function setFulfillmentOptions($fulfillmentOptions)
    {
        if (is_null($fulfillmentOptions)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentOptions cannot be null');
        }

        $this->container['fulfillmentOptions'] = $fulfillmentOptions;
        return $this;
    }
}

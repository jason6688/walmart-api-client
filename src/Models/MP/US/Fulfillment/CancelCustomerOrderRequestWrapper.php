<?php

/**
 * CancelCustomerOrderRequestWrapper
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
 * CancelCustomerOrderRequestWrapper Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CancelCustomerOrderRequestWrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CancelCustomerOrderRequestWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'header' => '\Walmart\Models\MP\US\Fulfillment\CustomerOrderDetailsHeader',
        'payload' => '\Walmart\Models\MP\US\Fulfillment\CancelCustomerOrderRequestPayload'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'header' => null,
        'payload' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'header' => false,
        'payload' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'header' => 'header',
        'payload' => 'payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'header' => 'setHeader',
        'payload' => 'setPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'header' => 'getHeader',
        'payload' => 'getPayload'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('header', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['header'] === null) {
            $invalidProperties[] = "'header' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets header
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CustomerOrderDetailsHeader
    
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CustomerOrderDetailsHeader $header header
     *
     * @return self
    
     */
    public function setHeader($header)
    {
        if (is_null($header)) {
            throw new \InvalidArgumentException('non-nullable header cannot be null');
        }

        $this->container['header'] = $header;
        return $this;
    }

    /**
     * Gets payload
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CancelCustomerOrderRequestPayload|null
    
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CancelCustomerOrderRequestPayload|null $payload payload
     *
     * @return self
    
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }

        $this->container['payload'] = $payload;
        return $this;
    }
}

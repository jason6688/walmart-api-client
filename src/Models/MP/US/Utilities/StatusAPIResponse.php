<?php

/**
 * StatusAPIResponse
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
 * Utilities Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Utilities;

use Walmart\Models\BaseModel;

/**
 * StatusAPIResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class StatusAPIResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StatusAPIResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'apiStatuses' => '\Walmart\Models\MP\US\Utilities\StatusAPIResponseDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'apiStatuses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'apiStatuses' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'apiStatuses' => 'apiStatuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'apiStatuses' => 'setApiStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'apiStatuses' => 'getApiStatuses'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('apiStatuses', $data ?? [], null);
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
     * Gets apiStatuses
     *
     * @return \Walmart\Models\MP\US\Utilities\StatusAPIResponseDTO[]|null
    
     */
    public function getApiStatuses()
    {
        return $this->container['apiStatuses'];
    }

    /**
     * Sets apiStatuses
     *
     * @param \Walmart\Models\MP\US\Utilities\StatusAPIResponseDTO[]|null $apiStatuses A-List of all API statuses
     *
     * @return self
    
     */
    public function setApiStatuses($apiStatuses)
    {
        if (is_null($apiStatuses)) {
            throw new \InvalidArgumentException('non-nullable apiStatuses cannot be null');
        }

        $this->container['apiStatuses'] = $apiStatuses;
        return $this;
    }
}

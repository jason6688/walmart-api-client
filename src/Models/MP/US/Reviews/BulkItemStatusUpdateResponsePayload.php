<?php

/**
 * BulkItemStatusUpdateResponsePayload
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
 * Reviews Acceleration
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reviews;

use Walmart\Models\BaseModel;

/**
 * BulkItemStatusUpdateResponsePayload Class Doc Comment
 *
 * @category Class

 * @description Response payload.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class BulkItemStatusUpdateResponsePayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BulkItemStatusUpdateResponsePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'success' => '\Walmart\Models\MP\US\Reviews\Success',
        'failure' => '\Walmart\Models\MP\US\Reviews\Failure'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'success' => null,
        'failure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'success' => false,
        'failure' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'success' => 'success',
        'failure' => 'failure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'success' => 'setSuccess',
        'failure' => 'setFailure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'success' => 'getSuccess',
        'failure' => 'getFailure'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('success', $data ?? [], null);
        $this->setIfExists('failure', $data ?? [], null);
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
     * Gets success
     *
     * @return \Walmart\Models\MP\US\Reviews\Success|null
    
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param \Walmart\Models\MP\US\Reviews\Success|null $success success
     *
     * @return self
    
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }

        $this->container['success'] = $success;
        return $this;
    }

    /**
     * Gets failure
     *
     * @return \Walmart\Models\MP\US\Reviews\Failure|null
    
     */
    public function getFailure()
    {
        return $this->container['failure'];
    }

    /**
     * Sets failure
     *
     * @param \Walmart\Models\MP\US\Reviews\Failure|null $failure failure
     *
     * @return self
    
     */
    public function setFailure($failure)
    {
        if (is_null($failure)) {
            throw new \InvalidArgumentException('non-nullable failure cannot be null');
        }

        $this->container['failure'] = $failure;
        return $this;
    }
}

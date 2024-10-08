<?php

/**
 * Payload
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;

use Walmart\Models\BaseModel;

/**
 * Payload Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Payload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unpublishedCount' => 'string',
        'unpublishedValue' => 'string',
        'unpublishedReasonCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unpublishedCount' => null,
        'unpublishedValue' => null,
        'unpublishedReasonCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unpublishedCount' => false,
        'unpublishedValue' => false,
        'unpublishedReasonCode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'unpublishedCount' => 'unpublishedCount',
        'unpublishedValue' => 'unpublishedValue',
        'unpublishedReasonCode' => 'unpublishedReasonCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unpublishedCount' => 'setUnpublishedCount',
        'unpublishedValue' => 'setUnpublishedValue',
        'unpublishedReasonCode' => 'setUnpublishedReasonCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unpublishedCount' => 'getUnpublishedCount',
        'unpublishedValue' => 'getUnpublishedValue',
        'unpublishedReasonCode' => 'getUnpublishedReasonCode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('unpublishedCount', $data ?? [], null);
        $this->setIfExists('unpublishedValue', $data ?? [], null);
        $this->setIfExists('unpublishedReasonCode', $data ?? [], null);
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
     * Gets unpublishedCount
     *
     * @return string|null
    
     */
    public function getUnpublishedCount()
    {
        return $this->container['unpublishedCount'];
    }

    /**
     * Sets unpublishedCount
     *
     * @param string|null $unpublishedCount total count for unpublished Item
     *
     * @return self
    
     */
    public function setUnpublishedCount($unpublishedCount)
    {
        if (is_null($unpublishedCount)) {
            throw new \InvalidArgumentException('non-nullable unpublishedCount cannot be null');
        }

        $this->container['unpublishedCount'] = $unpublishedCount;
        return $this;
    }

    /**
     * Gets unpublishedValue
     *
     * @return string|null
    
     */
    public function getUnpublishedValue()
    {
        return $this->container['unpublishedValue'];
    }

    /**
     * Sets unpublishedValue
     *
     * @param string|null $unpublishedValue total value for unpublished Item
     *
     * @return self
    
     */
    public function setUnpublishedValue($unpublishedValue)
    {
        if (is_null($unpublishedValue)) {
            throw new \InvalidArgumentException('non-nullable unpublishedValue cannot be null');
        }

        $this->container['unpublishedValue'] = $unpublishedValue;
        return $this;
    }

    /**
     * Gets unpublishedReasonCode
     *
     * @return string|null
    
     */
    public function getUnpublishedReasonCode()
    {
        return $this->container['unpublishedReasonCode'];
    }

    /**
     * Sets unpublishedReasonCode
     *
     * @param string|null $unpublishedReasonCode the reason why item is unpublished
     *
     * @return self
    
     */
    public function setUnpublishedReasonCode($unpublishedReasonCode)
    {
        if (is_null($unpublishedReasonCode)) {
            throw new \InvalidArgumentException('non-nullable unpublishedReasonCode cannot be null');
        }

        $this->container['unpublishedReasonCode'] = $unpublishedReasonCode;
        return $this;
    }
}

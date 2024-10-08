<?php

/**
 * RangeFilterCriteria
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
 * Assortment Recommendations
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\AssortmentRecommendations;

use Walmart\Models\BaseModel;

/**
 * RangeFilterCriteria Class Doc Comment
 *
 * @category Class

 * @description Filter based on a range with RangeFilter. You must also pass a parameter along with any of the beginning or the ending points or both.  No parameter should be repeated.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class RangeFilterCriteria extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RangeFilterCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'parameter' => 'string',
        'from' => 'string',
        'to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'parameter' => null,
        'from' => null,
        'to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'parameter' => false,
        'from' => false,
        'to' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'parameter' => 'parameter',
        'from' => 'from',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'parameter' => 'setParameter',
        'from' => 'setFrom',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'parameter' => 'getParameter',
        'from' => 'getFrom',
        'to' => 'getTo'
    ];


    public const PARAMETER_PRICE = 'PRICE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParameterAllowableValues()
    {
        return [
            self::PARAMETER_PRICE,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('parameter', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getParameterAllowableValues();
        if (!is_null($this->container['parameter']) && !in_array($this->container['parameter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'parameter', must be one of '%s'",
                $this->container['parameter'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets parameter
     *
     * @return string|null
    
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param string|null $parameter To apply a range filter based on the predefined parameter.   | Attribute | Description | Data Type | | --- | ----------- | ------- | | PRICE | To filter based on the price. | string |
     *
     * @return self
    
     */
    public function setParameter($parameter)
    {
        if (is_null($parameter)) {
            throw new \InvalidArgumentException('non-nullable parameter cannot be null');
        }
        $allowedValues = $this->getParameterAllowableValues();
        if (!in_array($parameter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'parameter', must be one of '%s'",
                    $parameter,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['parameter'] = $parameter;
        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
    
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Filter range start
     *
     * @return self
    
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }

        $this->container['from'] = $from;
        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
    
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Filter range end
     *
     * @return self
    
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }

        $this->container['to'] = $to;
        return $this;
    }
}

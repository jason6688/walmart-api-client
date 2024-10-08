<?php

/**
 * PartnerConfigAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRateReplenishTimeWindow
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * PartnerConfigAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRateReplenishTimeWindow Class Doc Comment
 *
 * @category Class

 * @description A time period set for throttling of number of API calls

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PartnerConfigAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRateReplenishTimeWindow extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerConfig_anyOf_1_configuration_values_inner_throttleConfigurations_inner_rate_replenishTimeWindow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'value' => 'int',
        'unitOfMeasurement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'value' => 'int64',
        'unitOfMeasurement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'value' => false,
        'unitOfMeasurement' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'value' => 'value',
        'unitOfMeasurement' => 'unitOfMeasurement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'value' => 'setValue',
        'unitOfMeasurement' => 'setUnitOfMeasurement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'value' => 'getValue',
        'unitOfMeasurement' => 'getUnitOfMeasurement'
    ];


    public const UNIT_OF_MEASUREMENT_SECOND = 'SECOND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitOfMeasurementAllowableValues()
    {
        return [
            self::UNIT_OF_MEASUREMENT_SECOND,
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
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('unitOfMeasurement', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!is_null($this->container['unitOfMeasurement']) && !in_array($this->container['unitOfMeasurement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unitOfMeasurement', must be one of '%s'",
                $this->container['unitOfMeasurement'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets value
     *
     * @return int|null
    
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param int|null $value The number representing size of time window
     *
     * @return self
    
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;
        return $this;
    }

    /**
     * Gets unitOfMeasurement
     *
     * @return string|null
    
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unitOfMeasurement'];
    }

    /**
     * Sets unitOfMeasurement
     *
     * @param string|null $unitOfMeasurement The unit of measurement. Example: 'SECOND'
     *
     * @return self
    
     */
    public function setUnitOfMeasurement($unitOfMeasurement)
    {
        if (is_null($unitOfMeasurement)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasurement cannot be null');
        }
        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!in_array($unitOfMeasurement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unitOfMeasurement', must be one of '%s'",
                    $unitOfMeasurement,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['unitOfMeasurement'] = $unitOfMeasurement;
        return $this;
    }
}

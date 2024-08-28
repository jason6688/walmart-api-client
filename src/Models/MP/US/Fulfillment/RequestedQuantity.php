<?php

/**
 * RequestedQuantity
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
 * RequestedQuantity Class Doc Comment
 *
 * @category Class

 * @description Requested Quantity Information of an item.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RequestedQuantity extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RequestedQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'measurementValue' => 'int',
        'unitOfMeasure' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'measurementValue' => 'int32',
        'unitOfMeasure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'measurementValue' => false,
        'unitOfMeasure' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'measurementValue' => 'measurementValue',
        'unitOfMeasure' => 'unitOfMeasure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'measurementValue' => 'setMeasurementValue',
        'unitOfMeasure' => 'setUnitOfMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'measurementValue' => 'getMeasurementValue',
        'unitOfMeasure' => 'getUnitOfMeasure'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('measurementValue', $data ?? [], null);
        $this->setIfExists('unitOfMeasure', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['measurementValue'] === null) {
            $invalidProperties[] = "'measurementValue' can't be null";
        }



        if (($this->container['measurementValue'] < 1)) {
            $invalidProperties[] = "invalid value for 'measurementValue', must be bigger than or equal to 1.";
        }




        if ($this->container['unitOfMeasure'] === null) {
            $invalidProperties[] = "'unitOfMeasure' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets measurementValue
     *
     * @return int
    
     */
    public function getMeasurementValue()
    {
        return $this->container['measurementValue'];
    }

    /**
     * Sets measurementValue
     *
     * @param int $measurementValue Quantity of each item.
     *
     * @return self
    
     */
    public function setMeasurementValue($measurementValue)
    {
        if (is_null($measurementValue)) {
            throw new \InvalidArgumentException('non-nullable measurementValue cannot be null');
        }



        if (($measurementValue < 1)) {
            throw new \InvalidArgumentException('invalid value for $measurementValue when calling RequestedQuantity., must be bigger than or equal to 1.');
        }




        $this->container['measurementValue'] = $measurementValue;
        return $this;
    }

    /**
     * Gets unitOfMeasure
     *
     * @return string
    
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unitOfMeasure'];
    }

    /**
     * Sets unitOfMeasure
     *
     * @param string $unitOfMeasure Unit of quantity. Currently supported type : 'EA'
     *
     * @return self
    
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        if (is_null($unitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasure cannot be null');
        }

        $this->container['unitOfMeasure'] = $unitOfMeasure;
        return $this;
    }
}

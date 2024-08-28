<?php

/**
 * ShippingTemplateActivationStatus
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * ShippingTemplateActivationStatus Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingTemplateActivationStatus extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingTemplateActivationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'activationStatus' => 'string',
        'createdDate' => 'float',
        'modifiedDate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'activationStatus' => null,
        'createdDate' => null,
        'modifiedDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'activationStatus' => false,
        'createdDate' => false,
        'modifiedDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'activationStatus' => 'activationStatus',
        'createdDate' => 'createdDate',
        'modifiedDate' => 'modifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'activationStatus' => 'setActivationStatus',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'activationStatus' => 'getActivationStatus',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('activationStatus', $data ?? [], null);
        $this->setIfExists('createdDate', $data ?? [], null);
        $this->setIfExists('modifiedDate', $data ?? [], null);
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
     * Gets activationStatus
     *
     * @return string|null
    
     */
    public function getActivationStatus()
    {
        return $this->container['activationStatus'];
    }

    /**
     * Sets activationStatus
     *
     * @param string|null $activationStatus Shipping Template Activation Status, possible values can be NOT_ACTIVATED or ACTIVATED
     *
     * @return self
    
     */
    public function setActivationStatus($activationStatus)
    {
        if (is_null($activationStatus)) {
            throw new \InvalidArgumentException('non-nullable activationStatus cannot be null');
        }

        $this->container['activationStatus'] = $activationStatus;
        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return float|null
    
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param float|null $createdDate Activation Date
     *
     * @return self
    
     */
    public function setCreatedDate($createdDate)
    {
        if (is_null($createdDate)) {
            throw new \InvalidArgumentException('non-nullable createdDate cannot be null');
        }

        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return float|null
    
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param float|null $modifiedDate Activation Status Last Modified Date
     *
     * @return self
    
     */
    public function setModifiedDate($modifiedDate)
    {
        if (is_null($modifiedDate)) {
            throw new \InvalidArgumentException('non-nullable modifiedDate cannot be null');
        }

        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }
}

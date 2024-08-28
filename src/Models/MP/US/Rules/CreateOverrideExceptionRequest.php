<?php

/**
 * CreateOverrideExceptionRequest
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;

use Walmart\Models\BaseModel;

/**
 * CreateOverrideExceptionRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateOverrideExceptionRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateOverrideExceptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ruleHeader' => '\Walmart\Models\MP\US\Rules\RuleHeader',
        'rules' => '\Walmart\Models\MP\US\Rules\ExceptionInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ruleHeader' => null,
        'rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ruleHeader' => false,
        'rules' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ruleHeader' => 'ruleHeader',
        'rules' => 'rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ruleHeader' => 'setRuleHeader',
        'rules' => 'setRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ruleHeader' => 'getRuleHeader',
        'rules' => 'getRules'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('ruleHeader', $data ?? [], null);
        $this->setIfExists('rules', $data ?? [], null);
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
     * Gets ruleHeader
     *
     * @return \Walmart\Models\MP\US\Rules\RuleHeader|null
    
     */
    public function getRuleHeader()
    {
        return $this->container['ruleHeader'];
    }

    /**
     * Sets ruleHeader
     *
     * @param \Walmart\Models\MP\US\Rules\RuleHeader|null $ruleHeader ruleHeader
     *
     * @return self
    
     */
    public function setRuleHeader($ruleHeader)
    {
        if (is_null($ruleHeader)) {
            throw new \InvalidArgumentException('non-nullable ruleHeader cannot be null');
        }

        $this->container['ruleHeader'] = $ruleHeader;
        return $this;
    }

    /**
     * Gets rules
     *
     * @return \Walmart\Models\MP\US\Rules\ExceptionInfo|null
    
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \Walmart\Models\MP\US\Rules\ExceptionInfo|null $rules rules
     *
     * @return self
    
     */
    public function setRules($rules)
    {
        if (is_null($rules)) {
            throw new \InvalidArgumentException('non-nullable rules cannot be null');
        }

        $this->container['rules'] = $rules;
        return $this;
    }
}

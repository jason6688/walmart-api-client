<?php

/**
 * NameValueAttribute
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Models\BaseModel;

/**
 * NameValueAttribute Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class NameValueAttribute extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NameValueAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'type' => 'string',
        'isVariant' => 'bool',
        'variantResourceType' => 'string',
        'value' => '\Walmart\Models\MP\US\Items\GenericAttributeValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'type' => null,
        'isVariant' => null,
        'variantResourceType' => null,
        'value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'type' => false,
        'isVariant' => false,
        'variantResourceType' => false,
        'value' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'type' => 'type',
        'isVariant' => 'isVariant',
        'variantResourceType' => 'variantResourceType',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'isVariant' => 'setIsVariant',
        'variantResourceType' => 'setVariantResourceType',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'isVariant' => 'getIsVariant',
        'variantResourceType' => 'getVariantResourceType',
        'value' => 'getValue'
    ];


    public const TYPE_LOCALIZABLE_TEXT = 'LOCALIZABLE_TEXT';

    public const TYPE_STRING = 'STRING';

    public const TYPE_BOOLEAN = 'BOOLEAN';

    public const TYPE_INTEGER = 'INTEGER';

    public const TYPE_DECIMAL = 'DECIMAL';

    public const TYPE_DATE = 'DATE';

    public const TYPE_TIMESTAMP = 'TIMESTAMP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LOCALIZABLE_TEXT,
            self::TYPE_STRING,
            self::TYPE_BOOLEAN,
            self::TYPE_INTEGER,
            self::TYPE_DECIMAL,
            self::TYPE_DATE,
            self::TYPE_TIMESTAMP,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('isVariant', $data ?? [], null);
        $this->setIfExists('variantResourceType', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets name
     *
     * @return string
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets type
     *
     * @return string
    
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets isVariant
     *
     * @return bool|null
    
     */
    public function getIsVariant()
    {
        return $this->container['isVariant'];
    }

    /**
     * Sets isVariant
     *
     * @param bool|null $isVariant isVariant
     *
     * @return self
    
     */
    public function setIsVariant($isVariant)
    {
        if (is_null($isVariant)) {
            throw new \InvalidArgumentException('non-nullable isVariant cannot be null');
        }

        $this->container['isVariant'] = $isVariant;
        return $this;
    }

    /**
     * Gets variantResourceType
     *
     * @return string|null
    
     */
    public function getVariantResourceType()
    {
        return $this->container['variantResourceType'];
    }

    /**
     * Sets variantResourceType
     *
     * @param string|null $variantResourceType variantResourceType
     *
     * @return self
    
     */
    public function setVariantResourceType($variantResourceType)
    {
        if (is_null($variantResourceType)) {
            throw new \InvalidArgumentException('non-nullable variantResourceType cannot be null');
        }

        $this->container['variantResourceType'] = $variantResourceType;
        return $this;
    }

    /**
     * Gets value
     *
     * @return \Walmart\Models\MP\US\Items\GenericAttributeValue[]
    
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Walmart\Models\MP\US\Items\GenericAttributeValue[] $value value
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
}

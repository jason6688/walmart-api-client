<?php

/**
 * RangeFilter1
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
 * On-request Report Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\OnRequestReports;

use Walmart\Models\BaseModel;

/**
 * RangeFilter1 Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class RangeFilter1 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RangeFilter_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'rowFilterType' => 'string',
        'columnName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'from' => null,
        'to' => null,
        'rowFilterType' => null,
        'columnName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from' => false,
        'to' => false,
        'rowFilterType' => false,
        'columnName' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'from' => 'from',
        'to' => 'to',
        'rowFilterType' => 'rowFilterType',
        'columnName' => 'columnName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'rowFilterType' => 'setRowFilterType',
        'columnName' => 'setColumnName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'rowFilterType' => 'getRowFilterType',
        'columnName' => 'getColumnName'
    ];


    public const ROW_FILTER_TYPE_RANGE_FILTER = 'rangeFilter';

    public const ROW_FILTER_TYPE_ENUM_FILTER = 'enumFilter';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRowFilterTypeAllowableValues()
    {
        return [
            self::ROW_FILTER_TYPE_RANGE_FILTER,
            self::ROW_FILTER_TYPE_ENUM_FILTER,
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
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('rowFilterType', $data ?? [], null);
        $this->setIfExists('columnName', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rowFilterType'] === null) {
            $invalidProperties[] = "'rowFilterType' can't be null";
        }
        $allowedValues = $this->getRowFilterTypeAllowableValues();
        if (!is_null($this->container['rowFilterType']) && !in_array($this->container['rowFilterType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rowFilterType', must be one of '%s'",
                $this->container['rowFilterType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['columnName'] === null) {
            $invalidProperties[] = "'columnName' can't be null";
        }

        return $invalidProperties;
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

    /**
     * Gets rowFilterType
     *
     * @return string
    
     */
    public function getRowFilterType()
    {
        return $this->container['rowFilterType'];
    }

    /**
     * Sets rowFilterType
     *
     * @param string $rowFilterType Type of the filter
     *
     * @return self
    
     */
    public function setRowFilterType($rowFilterType)
    {
        if (is_null($rowFilterType)) {
            throw new \InvalidArgumentException('non-nullable rowFilterType cannot be null');
        }
        $allowedValues = $this->getRowFilterTypeAllowableValues();
        if (!in_array($rowFilterType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rowFilterType', must be one of '%s'",
                    $rowFilterType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['rowFilterType'] = $rowFilterType;
        return $this;
    }

    /**
     * Gets columnName
     *
     * @return string
    
     */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
     * Sets columnName
     *
     * @param string $columnName Column on which filter has to be applied
     *
     * @return self
    
     */
    public function setColumnName($columnName)
    {
        if (is_null($columnName)) {
            throw new \InvalidArgumentException('non-nullable columnName cannot be null');
        }

        $this->container['columnName'] = $columnName;
        return $this;
    }
}

<?php

/**
 * PartnerPriceResponse
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Prices;

use Walmart\Models\BaseModel;

/**
 * PartnerPriceResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PartnerPriceResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerPriceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'errors' => '\Walmart\Models\MP\MX\Prices\GatewayError[]',
        'statusCode' => 'int',
        'mart' => 'string',
        'sku' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'errors' => null,
        'statusCode' => 'int32',
        'mart' => null,
        'sku' => null,
        'message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'errors' => false,
        'statusCode' => false,
        'mart' => false,
        'sku' => false,
        'message' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'errors' => 'errors',
        'statusCode' => 'statusCode',
        'mart' => 'mart',
        'sku' => 'sku',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'errors' => 'setErrors',
        'statusCode' => 'setStatusCode',
        'mart' => 'setMart',
        'sku' => 'setSku',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'errors' => 'getErrors',
        'statusCode' => 'getStatusCode',
        'mart' => 'getMart',
        'sku' => 'getSku',
        'message' => 'getMessage'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('mart', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
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
     * Gets errors
     *
     * @return \Walmart\Models\MP\MX\Prices\GatewayError[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\MX\Prices\GatewayError[]|null $errors errors
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return int|null
    
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int|null $statusCode statusCode
     *
     * @return self
    
     */
    public function setStatusCode($statusCode)
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }

        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
     * Gets mart
     *
     * @return string|null
    
     */
    public function getMart()
    {
        return $this->container['mart'];
    }

    /**
     * Sets mart
     *
     * @param string|null $mart Marketplace name. Example: mart: 7
     *
     * @return self
    
     */
    public function setMart($mart)
    {
        if (is_null($mart)) {
            throw new \InvalidArgumentException('non-nullable mart cannot be null');
        }

        $this->container['mart'] = $mart;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku An arbitrary alphanumeric unique ID, specified by the seller, which identifies each item. This will be used by the seller in the XSD file to refer to each item.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
    
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message A message of acknowledgement for a price update
     *
     * @return self
    
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }

        $this->container['message'] = $message;
        return $this;
    }
}

<?php

/**
 * CreateSubscriptionRequestRecord
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
 * Notifications Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Notifications;

use Walmart\Models\BaseModel;

/**
 * CreateSubscriptionRequestRecord Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateSubscriptionRequestRecord extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateSubscriptionRequestRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'eventType' => 'string',
        'eventVersion' => 'string',
        'resourceName' => 'string',
        'eventUrl' => 'string',
        'authDetails' => '\Walmart\Models\MP\US\Notifications\AuthDetails',
        'headers' => '\Walmart\Models\MP\US\Notifications\Headers',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'eventType' => null,
        'eventVersion' => null,
        'resourceName' => null,
        'eventUrl' => null,
        'authDetails' => null,
        'headers' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'eventType' => false,
        'eventVersion' => false,
        'resourceName' => false,
        'eventUrl' => false,
        'authDetails' => false,
        'headers' => false,
        'status' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'eventType' => 'eventType',
        'eventVersion' => 'eventVersion',
        'resourceName' => 'resourceName',
        'eventUrl' => 'eventUrl',
        'authDetails' => 'authDetails',
        'headers' => 'headers',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'eventType' => 'setEventType',
        'eventVersion' => 'setEventVersion',
        'resourceName' => 'setResourceName',
        'eventUrl' => 'setEventUrl',
        'authDetails' => 'setAuthDetails',
        'headers' => 'setHeaders',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'eventType' => 'getEventType',
        'eventVersion' => 'getEventVersion',
        'resourceName' => 'getResourceName',
        'eventUrl' => 'getEventUrl',
        'authDetails' => 'getAuthDetails',
        'headers' => 'getHeaders',
        'status' => 'getStatus'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('eventType', $data ?? [], null);
        $this->setIfExists('eventVersion', $data ?? [], null);
        $this->setIfExists('resourceName', $data ?? [], null);
        $this->setIfExists('eventUrl', $data ?? [], null);
        $this->setIfExists('authDetails', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['eventVersion'] === null) {
            $invalidProperties[] = "'eventVersion' can't be null";
        }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['eventUrl'] === null) {
            $invalidProperties[] = "'eventUrl' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets eventType
     *
     * @return string
    
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string $eventType Event that you want to subscribe to. For all allowed eventType(s) see Event Payload section or use GET Event Types API
     *
     * @return self
    
     */
    public function setEventType($eventType)
    {
        if (is_null($eventType)) {
            throw new \InvalidArgumentException('non-nullable eventType cannot be null');
        }

        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
     * Gets eventVersion
     *
     * @return string
    
     */
    public function getEventVersion()
    {
        return $this->container['eventVersion'];
    }

    /**
     * Sets eventVersion
     *
     * @param string $eventVersion Version of the specific event type. For all eventVersion(s) for each eventType, see Event Payload section or use GET Event Types API
     *
     * @return self
    
     */
    public function setEventVersion($eventVersion)
    {
        if (is_null($eventVersion)) {
            throw new \InvalidArgumentException('non-nullable eventVersion cannot be null');
        }

        $this->container['eventVersion'] = $eventVersion;
        return $this;
    }

    /**
     * Gets resourceName
     *
     * @return string
    
     */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
     * Sets resourceName
     *
     * @param string $resourceName Delegated access scope that event type is mapped to. For all allowed resourceName(s) for each eventType, see Event Payload section or use GET Event Types API
     *
     * @return self
    
     */
    public function setResourceName($resourceName)
    {
        if (is_null($resourceName)) {
            throw new \InvalidArgumentException('non-nullable resourceName cannot be null');
        }

        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
     * Gets eventUrl
     *
     * @return string
    
     */
    public function getEventUrl()
    {
        return $this->container['eventUrl'];
    }

    /**
     * Sets eventUrl
     *
     * @param string $eventUrl Destination URL where notification will be received by seller
     *
     * @return self
    
     */
    public function setEventUrl($eventUrl)
    {
        if (is_null($eventUrl)) {
            throw new \InvalidArgumentException('non-nullable eventUrl cannot be null');
        }

        $this->container['eventUrl'] = $eventUrl;
        return $this;
    }

    /**
     * Gets authDetails
     *
     * @return \Walmart\Models\MP\US\Notifications\AuthDetails|null
    
     */
    public function getAuthDetails()
    {
        return $this->container['authDetails'];
    }

    /**
     * Sets authDetails
     *
     * @param \Walmart\Models\MP\US\Notifications\AuthDetails|null $authDetails authDetails
     *
     * @return self
    
     */
    public function setAuthDetails($authDetails)
    {
        if (is_null($authDetails)) {
            throw new \InvalidArgumentException('non-nullable authDetails cannot be null');
        }

        $this->container['authDetails'] = $authDetails;
        return $this;
    }

    /**
     * Gets headers
     *
     * @return \Walmart\Models\MP\US\Notifications\Headers|null
    
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \Walmart\Models\MP\US\Notifications\Headers|null $headers headers
     *
     * @return self
    
     */
    public function setHeaders($headers)
    {
        if (is_null($headers)) {
            throw new \InvalidArgumentException('non-nullable headers cannot be null');
        }

        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the subscription. Allowed values are ACTIVE or INACTIVE. To create subscription, use status = ACTIVE. Notification will be triggered only if subscription is in ACTIVE status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }
}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_garden_service.proto

namespace Google\Cloud\AIPlatform\V1\DeployRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The endpoint config to use for the deployment.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployRequest.EndpointConfig</code>
 */
class EndpointConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The user-specified display name of the endpoint. If not set, a
     * default name will be used.
     *
     * Generated from protobuf field <code>string endpoint_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $endpoint_display_name = '';
    /**
     * Optional. If true, the endpoint will be exposed through a dedicated
     * DNS [Endpoint.dedicated_endpoint_dns]. Your request to the dedicated DNS
     * will be isolated from other users' traffic and will have better
     * performance and reliability. Note: Once you enabled dedicated endpoint,
     * you won't be able to send request to the shared DNS
     * {region}-aiplatform.googleapis.com. The limitations will be removed soon.
     *
     * Generated from protobuf field <code>bool dedicated_endpoint_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $dedicated_endpoint_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint_display_name
     *           Optional. The user-specified display name of the endpoint. If not set, a
     *           default name will be used.
     *     @type bool $dedicated_endpoint_enabled
     *           Optional. If true, the endpoint will be exposed through a dedicated
     *           DNS [Endpoint.dedicated_endpoint_dns]. Your request to the dedicated DNS
     *           will be isolated from other users' traffic and will have better
     *           performance and reliability. Note: Once you enabled dedicated endpoint,
     *           you won't be able to send request to the shared DNS
     *           {region}-aiplatform.googleapis.com. The limitations will be removed soon.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelGardenService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The user-specified display name of the endpoint. If not set, a
     * default name will be used.
     *
     * Generated from protobuf field <code>string endpoint_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEndpointDisplayName()
    {
        return $this->endpoint_display_name;
    }

    /**
     * Optional. The user-specified display name of the endpoint. If not set, a
     * default name will be used.
     *
     * Generated from protobuf field <code>string endpoint_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_display_name = $var;

        return $this;
    }

    /**
     * Optional. If true, the endpoint will be exposed through a dedicated
     * DNS [Endpoint.dedicated_endpoint_dns]. Your request to the dedicated DNS
     * will be isolated from other users' traffic and will have better
     * performance and reliability. Note: Once you enabled dedicated endpoint,
     * you won't be able to send request to the shared DNS
     * {region}-aiplatform.googleapis.com. The limitations will be removed soon.
     *
     * Generated from protobuf field <code>bool dedicated_endpoint_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDedicatedEndpointEnabled()
    {
        return $this->dedicated_endpoint_enabled;
    }

    /**
     * Optional. If true, the endpoint will be exposed through a dedicated
     * DNS [Endpoint.dedicated_endpoint_dns]. Your request to the dedicated DNS
     * will be isolated from other users' traffic and will have better
     * performance and reliability. Note: Once you enabled dedicated endpoint,
     * you won't be able to send request to the shared DNS
     * {region}-aiplatform.googleapis.com. The limitations will be removed soon.
     *
     * Generated from protobuf field <code>bool dedicated_endpoint_enabled = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDedicatedEndpointEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->dedicated_endpoint_enabled = $var;

        return $this;
    }

}



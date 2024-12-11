<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configurations (e.g. inference timeout) that are applied on your endpoints.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ClientConnectionConfig</code>
 */
class ClientConnectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Customizable online prediction request timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration inference_timeout = 1;</code>
     */
    protected $inference_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $inference_timeout
     *           Customizable online prediction request timeout.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Customizable online prediction request timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration inference_timeout = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInferenceTimeout()
    {
        return $this->inference_timeout;
    }

    public function hasInferenceTimeout()
    {
        return isset($this->inference_timeout);
    }

    public function clearInferenceTimeout()
    {
        unset($this->inference_timeout);
    }

    /**
     * Customizable online prediction request timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration inference_timeout = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInferenceTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->inference_timeout = $var;

        return $this;
    }

}

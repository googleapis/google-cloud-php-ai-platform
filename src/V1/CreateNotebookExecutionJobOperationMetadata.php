<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata information for
 * [NotebookService.CreateNotebookExecutionJob][google.cloud.aiplatform.v1.NotebookService.CreateNotebookExecutionJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateNotebookExecutionJobOperationMetadata</code>
 */
class CreateNotebookExecutionJobOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    protected $generic_metadata = null;
    /**
     * A human-readable message that shows the intermediate progress details of
     * NotebookRuntime.
     *
     * Generated from protobuf field <code>string progress_message = 2;</code>
     */
    protected $progress_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           The operation generic information.
     *     @type string $progress_message
     *           A human-readable message that shows the intermediate progress details of
     *           NotebookRuntime.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookService::initOnce();
        parent::__construct($data);
    }

    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenericOperationMetadata|null
     */
    public function getGenericMetadata()
    {
        return $this->generic_metadata;
    }

    public function hasGenericMetadata()
    {
        return isset($this->generic_metadata);
    }

    public function clearGenericMetadata()
    {
        unset($this->generic_metadata);
    }

    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $var
     * @return $this
     */
    public function setGenericMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenericOperationMetadata::class);
        $this->generic_metadata = $var;

        return $this;
    }

    /**
     * A human-readable message that shows the intermediate progress details of
     * NotebookRuntime.
     *
     * Generated from protobuf field <code>string progress_message = 2;</code>
     * @return string
     */
    public function getProgressMessage()
    {
        return $this->progress_message;
    }

    /**
     * A human-readable message that shows the intermediate progress details of
     * NotebookRuntime.
     *
     * Generated from protobuf field <code>string progress_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProgressMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->progress_message = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for exact match metric - returns 1 if prediction and reference exactly
 * matches, otherwise 0.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExactMatchSpec</code>
 */
class ExactMatchSpec extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

}


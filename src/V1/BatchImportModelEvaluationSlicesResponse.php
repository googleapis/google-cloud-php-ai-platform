<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [ModelService.BatchImportModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.BatchImportModelEvaluationSlices]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchImportModelEvaluationSlicesResponse</code>
 */
class BatchImportModelEvaluationSlicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. List of imported [ModelEvaluationSlice.name][google.cloud.aiplatform.v1.ModelEvaluationSlice.name].
     *
     * Generated from protobuf field <code>repeated string imported_model_evaluation_slices = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $imported_model_evaluation_slices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $imported_model_evaluation_slices
     *           Output only. List of imported [ModelEvaluationSlice.name][google.cloud.aiplatform.v1.ModelEvaluationSlice.name].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. List of imported [ModelEvaluationSlice.name][google.cloud.aiplatform.v1.ModelEvaluationSlice.name].
     *
     * Generated from protobuf field <code>repeated string imported_model_evaluation_slices = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImportedModelEvaluationSlices()
    {
        return $this->imported_model_evaluation_slices;
    }

    /**
     * Output only. List of imported [ModelEvaluationSlice.name][google.cloud.aiplatform.v1.ModelEvaluationSlice.name].
     *
     * Generated from protobuf field <code>repeated string imported_model_evaluation_slices = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImportedModelEvaluationSlices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->imported_model_evaluation_slices = $arr;

        return $this;
    }

}

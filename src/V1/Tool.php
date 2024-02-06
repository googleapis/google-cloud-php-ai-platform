<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Tool details that the model may use to generate response.
 * A `Tool` is a piece of code that enables the system to interact with
 * external systems to perform an action, or set of actions, outside of
 * knowledge and scope of the model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Tool</code>
 */
class Tool extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. One or more function declarations to be passed to the model along
     * with the current user query. Model may decide to call a subset of these
     * functions by populating [FunctionCall][content.part.function_call] in the
     * response. User should provide a
     * [FunctionResponse][content.part.function_response] for each function call
     * in the next turn. Based on the function responses, Model will generate the
     * final response back to the user. Maximum 64 function declarations can be
     * provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $function_declarations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\FunctionDeclaration>|\Google\Protobuf\Internal\RepeatedField $function_declarations
     *           Optional. One or more function declarations to be passed to the model along
     *           with the current user query. Model may decide to call a subset of these
     *           functions by populating [FunctionCall][content.part.function_call] in the
     *           response. User should provide a
     *           [FunctionResponse][content.part.function_response] for each function call
     *           in the next turn. Based on the function responses, Model will generate the
     *           final response back to the user. Maximum 64 function declarations can be
     *           provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Tool::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. One or more function declarations to be passed to the model along
     * with the current user query. Model may decide to call a subset of these
     * functions by populating [FunctionCall][content.part.function_call] in the
     * response. User should provide a
     * [FunctionResponse][content.part.function_response] for each function call
     * in the next turn. Based on the function responses, Model will generate the
     * final response back to the user. Maximum 64 function declarations can be
     * provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFunctionDeclarations()
    {
        return $this->function_declarations;
    }

    /**
     * Optional. One or more function declarations to be passed to the model along
     * with the current user query. Model may decide to call a subset of these
     * functions by populating [FunctionCall][content.part.function_call] in the
     * response. User should provide a
     * [FunctionResponse][content.part.function_response] for each function call
     * in the next turn. Based on the function responses, Model will generate the
     * final response back to the user. Maximum 64 function declarations can be
     * provided.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FunctionDeclaration function_declarations = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\FunctionDeclaration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFunctionDeclarations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FunctionDeclaration::class);
        $this->function_declarations = $arr;

        return $this;
    }

}

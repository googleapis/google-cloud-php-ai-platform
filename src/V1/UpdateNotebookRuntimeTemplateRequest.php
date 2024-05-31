<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [NotebookService.UpdateNotebookRuntimeTemplate][google.cloud.aiplatform.v1.NotebookService.UpdateNotebookRuntimeTemplate].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateNotebookRuntimeTemplateRequest</code>
 */
class UpdateNotebookRuntimeTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The NotebookRuntimeTemplate to update.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $notebook_runtime_template = null;
    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Input format:
     * `{paths: "${updated_filed}"}` Updatable fields:
     *   * `encryption_spec.kms_key_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebookRuntimeTemplate Required. The NotebookRuntimeTemplate to update.
     * @param \Google\Protobuf\FieldMask                          $updateMask              Required. The update mask applies to the resource.
     *                                                                                     For the `FieldMask` definition, see
     *                                                                                     [google.protobuf.FieldMask][google.protobuf.FieldMask]. Input format:
     *                                                                                     `{paths: "${updated_filed}"}` Updatable fields:
     *
     *                                                                                     * `encryption_spec.kms_key_name`
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateNotebookRuntimeTemplateRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebookRuntimeTemplate, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setNotebookRuntimeTemplate($notebookRuntimeTemplate)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebook_runtime_template
     *           Required. The NotebookRuntimeTemplate to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource.
     *           For the `FieldMask` definition, see
     *           [google.protobuf.FieldMask][google.protobuf.FieldMask]. Input format:
     *           `{paths: "${updated_filed}"}` Updatable fields:
     *             * `encryption_spec.kms_key_name`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The NotebookRuntimeTemplate to update.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate|null
     */
    public function getNotebookRuntimeTemplate()
    {
        return $this->notebook_runtime_template;
    }

    public function hasNotebookRuntimeTemplate()
    {
        return isset($this->notebook_runtime_template);
    }

    public function clearNotebookRuntimeTemplate()
    {
        unset($this->notebook_runtime_template);
    }

    /**
     * Required. The NotebookRuntimeTemplate to update.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $var
     * @return $this
     */
    public function setNotebookRuntimeTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate::class);
        $this->notebook_runtime_template = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Input format:
     * `{paths: "${updated_filed}"}` Updatable fields:
     *   * `encryption_spec.kms_key_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask applies to the resource.
     * For the `FieldMask` definition, see
     * [google.protobuf.FieldMask][google.protobuf.FieldMask]. Input format:
     * `{paths: "${updated_filed}"}` Updatable fields:
     *   * `encryption_spec.kms_key_name`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Vertex AI Feature Store provides a centralized repository for organizing,
 * storing, and serving ML features. The Featurestore is a top-level container
 * for your features and their values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Featurestore</code>
 */
class Featurestore extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the Featurestore. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when this Featurestore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this Featurestore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. The labels with user-defined metadata to organize your
     * Featurestore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one Featurestore(System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Config for online storage resources. The field should not
     * co-exist with the field of `OnlineStoreReplicationConfig`. If both of it
     * and OnlineStoreReplicationConfig are unset, the feature store will not have
     * an online store and cannot be used for online serving.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.OnlineServingConfig online_serving_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $online_serving_config = null;
    /**
     * Output only. State of the featurestore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. TTL in days for feature values that will be stored in online
     * serving storage. The Feature Store online storage periodically removes
     * obsolete feature values older than `online_storage_ttl_days` since the
     * feature generation time. Note that `online_storage_ttl_days` should be less
     * than or equal to `offline_storage_ttl_days` for each EntityType under a
     * featurestore. If not set, default to 4000 days
     *
     * Generated from protobuf field <code>int32 online_storage_ttl_days = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $online_storage_ttl_days = 0;
    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * both of the online and offline data storage will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encryption_spec = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = false;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the Featurestore. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Featurestore was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Featurestore was last updated.
     *     @type string $etag
     *           Optional. Used to perform consistent read-modify-write updates. If not set,
     *           a blind "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your
     *           Featurestore.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           No more than 64 user labels can be associated with one Featurestore(System
     *           labels are excluded)."
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable.
     *     @type \Google\Cloud\AIPlatform\V1\Featurestore\OnlineServingConfig $online_serving_config
     *           Optional. Config for online storage resources. The field should not
     *           co-exist with the field of `OnlineStoreReplicationConfig`. If both of it
     *           and OnlineStoreReplicationConfig are unset, the feature store will not have
     *           an online store and cannot be used for online serving.
     *     @type int $state
     *           Output only. State of the featurestore.
     *     @type int $online_storage_ttl_days
     *           Optional. TTL in days for feature values that will be stored in online
     *           serving storage. The Feature Store online storage periodically removes
     *           obsolete feature values older than `online_storage_ttl_days` since the
     *           feature generation time. Note that `online_storage_ttl_days` should be less
     *           than or equal to `offline_storage_ttl_days` for each EntityType under a
     *           featurestore. If not set, default to 4000 days
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Optional. Customer-managed encryption key spec for data storage. If set,
     *           both of the online and offline data storage will be secured by this key.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Featurestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the Featurestore. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the Featurestore. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Featurestore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this Featurestore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Featurestore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this Featurestore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * Featurestore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one Featurestore(System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * Featurestore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one Featurestore(System
     * labels are excluded)."
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Config for online storage resources. The field should not
     * co-exist with the field of `OnlineStoreReplicationConfig`. If both of it
     * and OnlineStoreReplicationConfig are unset, the feature store will not have
     * an online store and cannot be used for online serving.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.OnlineServingConfig online_serving_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\Featurestore\OnlineServingConfig|null
     */
    public function getOnlineServingConfig()
    {
        return $this->online_serving_config;
    }

    public function hasOnlineServingConfig()
    {
        return isset($this->online_serving_config);
    }

    public function clearOnlineServingConfig()
    {
        unset($this->online_serving_config);
    }

    /**
     * Optional. Config for online storage resources. The field should not
     * co-exist with the field of `OnlineStoreReplicationConfig`. If both of it
     * and OnlineStoreReplicationConfig are unset, the feature store will not have
     * an online store and cannot be used for online serving.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.OnlineServingConfig online_serving_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\Featurestore\OnlineServingConfig $var
     * @return $this
     */
    public function setOnlineServingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Featurestore\OnlineServingConfig::class);
        $this->online_serving_config = $var;

        return $this;
    }

    /**
     * Output only. State of the featurestore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the featurestore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Featurestore.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Featurestore\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. TTL in days for feature values that will be stored in online
     * serving storage. The Feature Store online storage periodically removes
     * obsolete feature values older than `online_storage_ttl_days` since the
     * feature generation time. Note that `online_storage_ttl_days` should be less
     * than or equal to `offline_storage_ttl_days` for each EntityType under a
     * featurestore. If not set, default to 4000 days
     *
     * Generated from protobuf field <code>int32 online_storage_ttl_days = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getOnlineStorageTtlDays()
    {
        return $this->online_storage_ttl_days;
    }

    /**
     * Optional. TTL in days for feature values that will be stored in online
     * serving storage. The Feature Store online storage periodically removes
     * obsolete feature values older than `online_storage_ttl_days` since the
     * feature generation time. Note that `online_storage_ttl_days` should be less
     * than or equal to `offline_storage_ttl_days` for each EntityType under a
     * featurestore. If not set, default to 4000 days
     *
     * Generated from protobuf field <code>int32 online_storage_ttl_days = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setOnlineStorageTtlDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->online_storage_ttl_days = $var;

        return $this;
    }

    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * both of the online and offline data storage will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * both of the online and offline data storage will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_view_sync.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeatureViewSync is a representation of sync operation which copies data from
 * data source to Feature View in Online Store.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureViewSync</code>
 */
class FeatureViewSync extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $run_time = null;
    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $final_status = null;
    /**
     * Output only. Summary of the sync job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureViewSync.SyncSummary sync_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sync_summary = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = false;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Name of the FeatureViewSync. Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this FeatureViewSync is created. Creation of a
     *           FeatureViewSync means that the job is pending / waiting for sufficient
     *           resources but may not have started the actual data transfer yet.
     *     @type \Google\Type\Interval $run_time
     *           Output only. Time when this FeatureViewSync is finished.
     *     @type \Google\Rpc\Status $final_status
     *           Output only. Final status of the FeatureViewSync.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureViewSync\SyncSummary $sync_summary
     *           Output only. Summary of the sync job.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureViewSync::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Type\Interval|null
     */
    public function getRunTime()
    {
        return $this->run_time;
    }

    public function hasRunTime()
    {
        return isset($this->run_time);
    }

    public function clearRunTime()
    {
        unset($this->run_time);
    }

    /**
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->run_time = $var;

        return $this;
    }

    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getFinalStatus()
    {
        return $this->final_status;
    }

    public function hasFinalStatus()
    {
        return isset($this->final_status);
    }

    public function clearFinalStatus()
    {
        unset($this->final_status);
    }

    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setFinalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->final_status = $var;

        return $this;
    }

    /**
     * Output only. Summary of the sync job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureViewSync.SyncSummary sync_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureViewSync\SyncSummary|null
     */
    public function getSyncSummary()
    {
        return $this->sync_summary;
    }

    public function hasSyncSummary()
    {
        return isset($this->sync_summary);
    }

    public function clearSyncSummary()
    {
        unset($this->sync_summary);
    }

    /**
     * Output only. Summary of the sync job.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureViewSync.SyncSummary sync_summary = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureViewSync\SyncSummary $var
     * @return $this
     */
    public function setSyncSummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureViewSync\SyncSummary::class);
        $this->sync_summary = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>bool satisfies_pzi = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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


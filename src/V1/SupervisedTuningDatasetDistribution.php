<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tuning_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataset distribution for Supervised Tuning.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SupervisedTuningDatasetDistribution</code>
 */
class SupervisedTuningDatasetDistribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Sum of a given population of values.
     *
     * Generated from protobuf field <code>int64 sum = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sum = 0;
    /**
     * Output only. Sum of a given population of values that are billable.
     *
     * Generated from protobuf field <code>int64 billable_sum = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billable_sum = 0;
    /**
     * Output only. The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $min = 0.0;
    /**
     * Output only. The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $max = 0.0;
    /**
     * Output only. The arithmetic mean of the values in the population.
     *
     * Generated from protobuf field <code>double mean = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $mean = 0.0;
    /**
     * Output only. The median of the values in the population.
     *
     * Generated from protobuf field <code>double median = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $median = 0.0;
    /**
     * Output only. The 5th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p5 = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $p5 = 0.0;
    /**
     * Output only. The 95th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p95 = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $p95 = 0.0;
    /**
     * Output only. Defines the histogram bucket.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SupervisedTuningDatasetDistribution.DatasetBucket buckets = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $buckets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sum
     *           Output only. Sum of a given population of values.
     *     @type int|string $billable_sum
     *           Output only. Sum of a given population of values that are billable.
     *     @type float $min
     *           Output only. The minimum of the population values.
     *     @type float $max
     *           Output only. The maximum of the population values.
     *     @type float $mean
     *           Output only. The arithmetic mean of the values in the population.
     *     @type float $median
     *           Output only. The median of the values in the population.
     *     @type float $p5
     *           Output only. The 5th percentile of the values in the population.
     *     @type float $p95
     *           Output only. The 95th percentile of the values in the population.
     *     @type array<\Google\Cloud\AIPlatform\V1\SupervisedTuningDatasetDistribution\DatasetBucket>|\Google\Protobuf\Internal\RepeatedField $buckets
     *           Output only. Defines the histogram bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TuningJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Sum of a given population of values.
     *
     * Generated from protobuf field <code>int64 sum = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Output only. Sum of a given population of values.
     *
     * Generated from protobuf field <code>int64 sum = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkInt64($var);
        $this->sum = $var;

        return $this;
    }

    /**
     * Output only. Sum of a given population of values that are billable.
     *
     * Generated from protobuf field <code>int64 billable_sum = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBillableSum()
    {
        return $this->billable_sum;
    }

    /**
     * Output only. Sum of a given population of values that are billable.
     *
     * Generated from protobuf field <code>int64 billable_sum = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBillableSum($var)
    {
        GPBUtil::checkInt64($var);
        $this->billable_sum = $var;

        return $this;
    }

    /**
     * Output only. The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Output only. The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;

        return $this;
    }

    /**
     * Output only. The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Output only. The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;

        return $this;
    }

    /**
     * Output only. The arithmetic mean of the values in the population.
     *
     * Generated from protobuf field <code>double mean = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * Output only. The arithmetic mean of the values in the population.
     *
     * Generated from protobuf field <code>double mean = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setMean($var)
    {
        GPBUtil::checkDouble($var);
        $this->mean = $var;

        return $this;
    }

    /**
     * Output only. The median of the values in the population.
     *
     * Generated from protobuf field <code>double median = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * Output only. The median of the values in the population.
     *
     * Generated from protobuf field <code>double median = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setMedian($var)
    {
        GPBUtil::checkDouble($var);
        $this->median = $var;

        return $this;
    }

    /**
     * Output only. The 5th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p5 = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Output only. The 5th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p5 = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setP5($var)
    {
        GPBUtil::checkDouble($var);
        $this->p5 = $var;

        return $this;
    }

    /**
     * Output only. The 95th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p95 = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getP95()
    {
        return $this->p95;
    }

    /**
     * Output only. The 95th percentile of the values in the population.
     *
     * Generated from protobuf field <code>double p95 = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setP95($var)
    {
        GPBUtil::checkDouble($var);
        $this->p95 = $var;

        return $this;
    }

    /**
     * Output only. Defines the histogram bucket.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SupervisedTuningDatasetDistribution.DatasetBucket buckets = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuckets()
    {
        return $this->buckets;
    }

    /**
     * Output only. Defines the histogram bucket.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.SupervisedTuningDatasetDistribution.DatasetBucket buckets = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\SupervisedTuningDatasetDistribution\DatasetBucket>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuckets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\SupervisedTuningDatasetDistribution\DatasetBucket::class);
        $this->buckets = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/reservation_affinity.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A ReservationAffinity can be used to configure a Vertex AI resource (e.g., a
 * DeployedModel) to draw its Compute Engine resources from a Shared
 * Reservation, or exclusively from on-demand capacity.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReservationAffinity</code>
 */
class ReservationAffinity extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Specifies the reservation affinity type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReservationAffinity.Type reservation_affinity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $reservation_affinity_type = 0;
    /**
     * Optional. Corresponds to the label key of a reservation resource. To target
     * a SPECIFIC_RESERVATION by name, use
     * `compute.googleapis.com/reservation-name` as the key and specify the name
     * of your reservation as its value.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $key = '';
    /**
     * Optional. Corresponds to the label values of a reservation resource. This
     * must be the full resource name of the reservation.
     *
     * Generated from protobuf field <code>repeated string values = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reservation_affinity_type
     *           Required. Specifies the reservation affinity type.
     *     @type string $key
     *           Optional. Corresponds to the label key of a reservation resource. To target
     *           a SPECIFIC_RESERVATION by name, use
     *           `compute.googleapis.com/reservation-name` as the key and specify the name
     *           of your reservation as its value.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           Optional. Corresponds to the label values of a reservation resource. This
     *           must be the full resource name of the reservation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ReservationAffinity::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Specifies the reservation affinity type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReservationAffinity.Type reservation_affinity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getReservationAffinityType()
    {
        return $this->reservation_affinity_type;
    }

    /**
     * Required. Specifies the reservation affinity type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ReservationAffinity.Type reservation_affinity_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setReservationAffinityType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\ReservationAffinity\Type::class);
        $this->reservation_affinity_type = $var;

        return $this;
    }

    /**
     * Optional. Corresponds to the label key of a reservation resource. To target
     * a SPECIFIC_RESERVATION by name, use
     * `compute.googleapis.com/reservation-name` as the key and specify the name
     * of your reservation as its value.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Optional. Corresponds to the label key of a reservation resource. To target
     * a SPECIFIC_RESERVATION by name, use
     * `compute.googleapis.com/reservation-name` as the key and specify the name
     * of your reservation as its value.
     *
     * Generated from protobuf field <code>string key = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Optional. Corresponds to the label values of a reservation resource. This
     * must be the full resource name of the reservation.
     *
     * Generated from protobuf field <code>repeated string values = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Optional. Corresponds to the label values of a reservation resource. This
     * must be the full resource name of the reservation.
     *
     * Generated from protobuf field <code>repeated string values = 3 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}


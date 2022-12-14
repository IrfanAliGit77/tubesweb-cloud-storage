<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A wrapper of repeated TelephonyDtmf digits.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.TelephonyDtmfEvents</code>
 */
class TelephonyDtmfEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * A sequence of TelephonyDtmf digits.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TelephonyDtmf dtmf_events = 1;</code>
     */
    private $dtmf_events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $dtmf_events
     *           A sequence of TelephonyDtmf digits.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A sequence of TelephonyDtmf digits.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TelephonyDtmf dtmf_events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDtmfEvents()
    {
        return $this->dtmf_events;
    }

    /**
     * A sequence of TelephonyDtmf digits.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.TelephonyDtmf dtmf_events = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDtmfEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\V2\TelephonyDtmf::class);
        $this->dtmf_events = $arr;

        return $this;
    }

}


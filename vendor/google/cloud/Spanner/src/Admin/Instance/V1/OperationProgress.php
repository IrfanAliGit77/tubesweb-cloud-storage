<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/common.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates progress related information for a Cloud Spanner long
 * running instance operations.
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.OperationProgress</code>
 */
class OperationProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * Percent completion of the operation.
     * Values are between 0 and 100 inclusive.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     */
    private $progress_percent = 0;
    /**
     * Time the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * If set, the time at which this operation failed or was completed
     * successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $progress_percent
     *           Percent completion of the operation.
     *           Values are between 0 and 100 inclusive.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Time the request was received.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           If set, the time at which this operation failed or was completed
     *           successfully.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Percent completion of the operation.
     * Values are between 0 and 100 inclusive.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @return int
     */
    public function getProgressPercent()
    {
        return $this->progress_percent;
    }

    /**
     * Percent completion of the operation.
     * Values are between 0 and 100 inclusive.
     *
     * Generated from protobuf field <code>int32 progress_percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProgressPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress_percent = $var;

        return $this;
    }

    /**
     * Time the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Time the request was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * If set, the time at which this operation failed or was completed
     * successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * If set, the time at which this operation failed or was completed
     * successfully.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}


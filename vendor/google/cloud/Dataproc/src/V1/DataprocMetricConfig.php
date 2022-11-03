<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataproc metric config.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.DataprocMetricConfig</code>
 */
class DataprocMetricConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Metrics sources to enable.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.DataprocMetricConfig.Metric metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataproc\V1\DataprocMetricConfig\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Required. Metrics sources to enable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Metrics sources to enable.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.DataprocMetricConfig.Metric metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Required. Metrics sources to enable.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.DataprocMetricConfig.Metric metrics = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Dataproc\V1\DataprocMetricConfig\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\DataprocMetricConfig\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

}


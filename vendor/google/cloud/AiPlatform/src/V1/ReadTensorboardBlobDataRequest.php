<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [TensorboardService.ReadTensorboardBlobData][google.cloud.aiplatform.v1.TensorboardService.ReadTensorboardBlobData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadTensorboardBlobDataRequest</code>
 */
class ReadTensorboardBlobDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the TensorboardTimeSeries to list Blobs.
     * Format:
     * 'projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}'
     *
     * Generated from protobuf field <code>string time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $time_series = '';
    /**
     * IDs of the blobs to read.
     *
     * Generated from protobuf field <code>repeated string blob_ids = 2;</code>
     */
    private $blob_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $time_series
     *           Required. The resource name of the TensorboardTimeSeries to list Blobs.
     *           Format:
     *           'projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}'
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $blob_ids
     *           IDs of the blobs to read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the TensorboardTimeSeries to list Blobs.
     * Format:
     * 'projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}'
     *
     * Generated from protobuf field <code>string time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }

    /**
     * Required. The resource name of the TensorboardTimeSeries to list Blobs.
     * Format:
     * 'projects/{project}/locations/{location}/tensorboards/{tensorboard}/experiments/{experiment}/runs/{run}/timeSeries/{time_series}'
     *
     * Generated from protobuf field <code>string time_series = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTimeSeries($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_series = $var;

        return $this;
    }

    /**
     * IDs of the blobs to read.
     *
     * Generated from protobuf field <code>repeated string blob_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlobIds()
    {
        return $this->blob_ids;
    }

    /**
     * IDs of the blobs to read.
     *
     * Generated from protobuf field <code>repeated string blob_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlobIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blob_ids = $arr;

        return $this;
    }

}


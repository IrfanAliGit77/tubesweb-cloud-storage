<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for storing transformation details.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TransformationDetailsStorageConfig</code>
 */
class TransformationDetailsStorageConfig extends \Google\Protobuf\Internal\Message
{
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $table
     *           The BigQuery table in which to store the output. This may be an existing
     *           table or in a new table in an existing dataset.
     *           If table_id is not set a new one will be generated for you with the
     *           following format:
     *           dlp_googleapis_transformation_details_yyyy_mm_dd_[dlp_job_id]. Pacific
     *           time zone will be used for generating the date details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The BigQuery table in which to store the output. This may be an existing
     * table or in a new table in an existing dataset.
     * If table_id is not set a new one will be generated for you with the
     * following format:
     * dlp_googleapis_transformation_details_yyyy_mm_dd_[dlp_job_id]. Pacific
     * time zone will be used for generating the date details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getTable()
    {
        return $this->readOneof(1);
    }

    public function hasTable()
    {
        return $this->hasOneof(1);
    }

    /**
     * The BigQuery table in which to store the output. This may be an existing
     * table or in a new table in an existing dataset.
     * If table_id is not set a new one will be generated for you with the
     * following format:
     * dlp_googleapis_transformation_details_yyyy_mm_dd_[dlp_job_id]. Pacific
     * time zone will be used for generating the date details.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}


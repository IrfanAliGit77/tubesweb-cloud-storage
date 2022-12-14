<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1beta1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the GetDataPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datapolicies.v1beta1.GetDataPolicyRequest</code>
 */
class GetDataPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the requested data policy. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the requested data policy. Format is
     *           `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datapolicies\V1Beta1\Datapolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the requested data policy. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the requested data policy. Format is
     * `projects/{project_number}/locations/{location_id}/dataPolicies/{data_policy_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


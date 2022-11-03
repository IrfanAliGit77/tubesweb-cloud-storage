<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1beta/workflows.proto

namespace Google\Cloud\Workflows\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the
 * [ListWorkflows][google.cloud.workflows.v1beta.Workflows.ListWorkflows]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1beta.ListWorkflowsResponse</code>
 */
class ListWorkflowsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The workflows which match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.v1beta.Workflow workflows = 1;</code>
     */
    private $workflows;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Workflows\V1beta\Workflow>|\Google\Protobuf\Internal\RepeatedField $workflows
     *           The workflows which match the request.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unreachable resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The workflows which match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.v1beta.Workflow workflows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflows()
    {
        return $this->workflows;
    }

    /**
     * The workflows which match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.workflows.v1beta.Workflow workflows = 1;</code>
     * @param array<\Google\Cloud\Workflows\V1beta\Workflow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Workflows\V1beta\Workflow::class);
        $this->workflows = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unreachable resources.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AwsClusters.GenerateAwsAccessToken` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GenerateAwsAccessTokenRequest</code>
 */
class GenerateAwsAccessTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource to authenticate to.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $aws_cluster = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $aws_cluster
     *           Required. The name of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource to authenticate to.
     *           `AwsCluster` names are formatted as
     *           `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource to authenticate to.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAwsCluster()
    {
        return $this->aws_cluster;
    }

    /**
     * Required. The name of the [AwsCluster][google.cloud.gkemulticloud.v1.AwsCluster] resource to authenticate to.
     * `AwsCluster` names are formatted as
     * `projects/<project-id>/locations/<region>/awsClusters/<cluster-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string aws_cluster = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAwsCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->aws_cluster = $var;

        return $this;
    }

}

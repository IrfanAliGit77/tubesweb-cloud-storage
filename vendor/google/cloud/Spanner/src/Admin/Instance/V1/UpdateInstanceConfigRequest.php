<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [UpdateInstanceConfigRequest][InstanceAdmin.UpdateInstanceConfigRequest].
 *
 * Generated from protobuf message <code>google.spanner.admin.instance.v1.UpdateInstanceConfigRequest</code>
 */
class UpdateInstanceConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The user instance config to update, which must always include the
     * instance config name. Otherwise, only fields mentioned in
     * [update_mask][google.spanner.admin.instance.v1.UpdateInstanceConfigRequest.update_mask]
     * need be included. To prevent conflicts of concurrent updates,
     * [etag][google.spanner.admin.instance.v1.InstanceConfig.reconciling] can
     * be used.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_config = null;
    /**
     * Required. A mask specifying which fields in
     * [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] should be
     * updated. The field mask must always be specified; this prevents any future
     * fields in [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig]
     * from being erased accidentally by clients that do not know about them. Only
     * display_name and labels can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * An option to validate, but not actually execute, a request,
     * and provide the same response.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig $instance_config
     *           Required. The user instance config to update, which must always include the
     *           instance config name. Otherwise, only fields mentioned in
     *           [update_mask][google.spanner.admin.instance.v1.UpdateInstanceConfigRequest.update_mask]
     *           need be included. To prevent conflicts of concurrent updates,
     *           [etag][google.spanner.admin.instance.v1.InstanceConfig.reconciling] can
     *           be used.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A mask specifying which fields in
     *           [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] should be
     *           updated. The field mask must always be specified; this prevents any future
     *           fields in [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig]
     *           from being erased accidentally by clients that do not know about them. Only
     *           display_name and labels can be updated.
     *     @type bool $validate_only
     *           An option to validate, but not actually execute, a request,
     *           and provide the same response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The user instance config to update, which must always include the
     * instance config name. Otherwise, only fields mentioned in
     * [update_mask][google.spanner.admin.instance.v1.UpdateInstanceConfigRequest.update_mask]
     * need be included. To prevent conflicts of concurrent updates,
     * [etag][google.spanner.admin.instance.v1.InstanceConfig.reconciling] can
     * be used.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig|null
     */
    public function getInstanceConfig()
    {
        return $this->instance_config;
    }

    public function hasInstanceConfig()
    {
        return isset($this->instance_config);
    }

    public function clearInstanceConfig()
    {
        unset($this->instance_config);
    }

    /**
     * Required. The user instance config to update, which must always include the
     * instance config name. Otherwise, only fields mentioned in
     * [update_mask][google.spanner.admin.instance.v1.UpdateInstanceConfigRequest.update_mask]
     * need be included. To prevent conflicts of concurrent updates,
     * [etag][google.spanner.admin.instance.v1.InstanceConfig.reconciling] can
     * be used.
     *
     * Generated from protobuf field <code>.google.spanner.admin.instance.v1.InstanceConfig instance_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig $var
     * @return $this
     */
    public function setInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig::class);
        $this->instance_config = $var;

        return $this;
    }

    /**
     * Required. A mask specifying which fields in
     * [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] should be
     * updated. The field mask must always be specified; this prevents any future
     * fields in [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig]
     * from being erased accidentally by clients that do not know about them. Only
     * display_name and labels can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. A mask specifying which fields in
     * [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig] should be
     * updated. The field mask must always be specified; this prevents any future
     * fields in [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig]
     * from being erased accidentally by clients that do not know about them. Only
     * display_name and labels can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * An option to validate, but not actually execute, a request,
     * and provide the same response.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * An option to validate, but not actually execute, a request,
     * and provide the same response.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}


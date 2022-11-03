<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A spoke represents a connection between your Google Cloud network resources
 * and a non-Google-Cloud network.
 * When you create a spoke, you associate it with a hub. You must also identify
 * a value for exactly one of the following fields:
 * * linked_vpn_tunnels
 * * linked_interconnect_attachments
 * * linked_router_appliance_instances
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.Spoke</code>
 */
class Spoke extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    private $hub = '';
    /**
     * VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17;</code>
     */
    private $linked_vpn_tunnels = null;
    /**
     * VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18;</code>
     */
    private $linked_interconnect_attachments = null;
    /**
     * Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19;</code>
     */
    private $linked_router_appliance_instances = null;
    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique across all
     * spoke resources. If a spoke is deleted and another with the same name is
     * created, the new spoke is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $unique_id = '';
    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The name of the spoke. Spoke names must be unique. They use the
     *           following form:
     *               `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the spoke was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the spoke was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional labels in key:value format. For more information about labels, see
     *           [Requirements for
     *           labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *     @type string $description
     *           An optional description of the spoke.
     *     @type string $hub
     *           Immutable. The name of the hub that this spoke is attached to.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels $linked_vpn_tunnels
     *           VPN tunnels that are associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments $linked_interconnect_attachments
     *           VLAN attachments that are associated with the spoke.
     *     @type \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances $linked_router_appliance_instances
     *           Router appliance instances that are associated with the spoke.
     *     @type string $unique_id
     *           Output only. The Google-generated UUID for the spoke. This value is unique across all
     *           spoke resources. If a spoke is deleted and another with the same name is
     *           created, the new spoke is assigned a different unique_id.
     *     @type int $state
     *           Output only. The current lifecycle state of this spoke.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The name of the spoke. Spoke names must be unique. They use the
     * following form:
     *     `projects/{project_number}/locations/{region}/spokes/{spoke_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the spoke was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the spoke was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional labels in key:value format. For more information about labels, see
     * [Requirements for
     * labels](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements).
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of the spoke.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Immutable. The name of the hub that this spoke is attached to.
     *
     * Generated from protobuf field <code>string hub = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHub($var)
    {
        GPBUtil::checkString($var, True);
        $this->hub = $var;

        return $this;
    }

    /**
     * VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17;</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels|null
     */
    public function getLinkedVpnTunnels()
    {
        return $this->linked_vpn_tunnels;
    }

    public function hasLinkedVpnTunnels()
    {
        return isset($this->linked_vpn_tunnels);
    }

    public function clearLinkedVpnTunnels()
    {
        unset($this->linked_vpn_tunnels);
    }

    /**
     * VPN tunnels that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedVpnTunnels linked_vpn_tunnels = 17;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels $var
     * @return $this
     */
    public function setLinkedVpnTunnels($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedVpnTunnels::class);
        $this->linked_vpn_tunnels = $var;

        return $this;
    }

    /**
     * VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18;</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments|null
     */
    public function getLinkedInterconnectAttachments()
    {
        return $this->linked_interconnect_attachments;
    }

    public function hasLinkedInterconnectAttachments()
    {
        return isset($this->linked_interconnect_attachments);
    }

    public function clearLinkedInterconnectAttachments()
    {
        unset($this->linked_interconnect_attachments);
    }

    /**
     * VLAN attachments that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachments linked_interconnect_attachments = 18;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments $var
     * @return $this
     */
    public function setLinkedInterconnectAttachments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedInterconnectAttachments::class);
        $this->linked_interconnect_attachments = $var;

        return $this;
    }

    /**
     * Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19;</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances|null
     */
    public function getLinkedRouterApplianceInstances()
    {
        return $this->linked_router_appliance_instances;
    }

    public function hasLinkedRouterApplianceInstances()
    {
        return isset($this->linked_router_appliance_instances);
    }

    public function clearLinkedRouterApplianceInstances()
    {
        unset($this->linked_router_appliance_instances);
    }

    /**
     * Router appliance instances that are associated with the spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstances linked_router_appliance_instances = 19;</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances $var
     * @return $this
     */
    public function setLinkedRouterApplianceInstances($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\LinkedRouterApplianceInstances::class);
        $this->linked_router_appliance_instances = $var;

        return $this;
    }

    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique across all
     * spoke resources. If a spoke is deleted and another with the same name is
     * created, the new spoke is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Output only. The Google-generated UUID for the spoke. This value is unique across all
     * spoke resources. If a spoke is deleted and another with the same name is
     * created, the new spoke is assigned a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current lifecycle state of this spoke.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.State state = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\State::class);
        $this->state = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LocationPolicyLocation</code>
 */
class LocationPolicyLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Constraints that the caller requires on the result distribution in this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicyLocationConstraints constraints = 3909174;</code>
     */
    private $constraints = null;
    /**
     * Preference for a given location. Set to either ALLOW or DENY.
     * Check the Preference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string preference = 150781147;</code>
     */
    private $preference = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\LocationPolicyLocationConstraints $constraints
     *           Constraints that the caller requires on the result distribution in this zone.
     *     @type string $preference
     *           Preference for a given location. Set to either ALLOW or DENY.
     *           Check the Preference enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Constraints that the caller requires on the result distribution in this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicyLocationConstraints constraints = 3909174;</code>
     * @return \Google\Cloud\Compute\V1\LocationPolicyLocationConstraints|null
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    public function hasConstraints()
    {
        return isset($this->constraints);
    }

    public function clearConstraints()
    {
        unset($this->constraints);
    }

    /**
     * Constraints that the caller requires on the result distribution in this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicyLocationConstraints constraints = 3909174;</code>
     * @param \Google\Cloud\Compute\V1\LocationPolicyLocationConstraints $var
     * @return $this
     */
    public function setConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\LocationPolicyLocationConstraints::class);
        $this->constraints = $var;

        return $this;
    }

    /**
     * Preference for a given location. Set to either ALLOW or DENY.
     * Check the Preference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string preference = 150781147;</code>
     * @return string
     */
    public function getPreference()
    {
        return isset($this->preference) ? $this->preference : '';
    }

    public function hasPreference()
    {
        return isset($this->preference);
    }

    public function clearPreference()
    {
        unset($this->preference);
    }

    /**
     * Preference for a given location. Set to either ALLOW or DENY.
     * Check the Preference enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string preference = 150781147;</code>
     * @param string $var
     * @return $this
     */
    public function setPreference($var)
    {
        GPBUtil::checkString($var, True);
        $this->preference = $var;

        return $this;
    }

}


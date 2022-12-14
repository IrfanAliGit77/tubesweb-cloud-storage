<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\TargetInstance;

use UnexpectedValueException;

/**
 * Must have a value of NO_NAT. Protocol forwarding delivers packets while preserving the destination IP address of the forwarding rule referencing the target instance.
 *
 * Protobuf type <code>google.cloud.compute.v1.TargetInstance.NatPolicy</code>
 */
class NatPolicy
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_NAT_POLICY = 0;</code>
     */
    const UNDEFINED_NAT_POLICY = 0;
    /**
     * No NAT performed.
     *
     * Generated from protobuf enum <code>NO_NAT = 161455491;</code>
     */
    const NO_NAT = 161455491;

    private static $valueToName = [
        self::UNDEFINED_NAT_POLICY => 'UNDEFINED_NAT_POLICY',
        self::NO_NAT => 'NO_NAT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}



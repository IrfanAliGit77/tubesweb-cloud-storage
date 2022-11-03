<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PacketIntervals;

use UnexpectedValueException;

/**
 * From how long ago in the past these intervals were observed.
 *
 * Protobuf type <code>google.cloud.compute.v1.PacketIntervals.Duration</code>
 */
class Duration
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_DURATION = 0;</code>
     */
    const UNDEFINED_DURATION = 0;
    /**
     * Generated from protobuf enum <code>DURATION_UNSPECIFIED = 529071340;</code>
     */
    const DURATION_UNSPECIFIED = 529071340;
    /**
     * Generated from protobuf enum <code>HOUR = 2223588;</code>
     */
    const HOUR = 2223588;
    /**
     * From BfdSession object creation time.
     *
     * Generated from protobuf enum <code>MAX = 76100;</code>
     */
    const MAX = 76100;
    /**
     * Generated from protobuf enum <code>MINUTE = 126786068;</code>
     */
    const MINUTE = 126786068;

    private static $valueToName = [
        self::UNDEFINED_DURATION => 'UNDEFINED_DURATION',
        self::DURATION_UNSPECIFIED => 'DURATION_UNSPECIFIED',
        self::HOUR => 'HOUR',
        self::MAX => 'MAX',
        self::MINUTE => 'MINUTE',
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



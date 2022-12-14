<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2\ListRuntimesResponse;

use UnexpectedValueException;

/**
 * The various stages that a runtime can be in.
 *
 * Protobuf type <code>google.cloud.functions.v2.ListRuntimesResponse.RuntimeStage</code>
 */
class RuntimeStage
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>RUNTIME_STAGE_UNSPECIFIED = 0;</code>
     */
    const RUNTIME_STAGE_UNSPECIFIED = 0;
    /**
     * The runtime is in development.
     *
     * Generated from protobuf enum <code>DEVELOPMENT = 1;</code>
     */
    const DEVELOPMENT = 1;
    /**
     * The runtime is in the Alpha stage.
     *
     * Generated from protobuf enum <code>ALPHA = 2;</code>
     */
    const ALPHA = 2;
    /**
     * The runtime is in the Beta stage.
     *
     * Generated from protobuf enum <code>BETA = 3;</code>
     */
    const BETA = 3;
    /**
     * The runtime is generally available.
     *
     * Generated from protobuf enum <code>GA = 4;</code>
     */
    const GA = 4;
    /**
     * The runtime is deprecated.
     *
     * Generated from protobuf enum <code>DEPRECATED = 5;</code>
     */
    const DEPRECATED = 5;
    /**
     * The runtime is no longer supported.
     *
     * Generated from protobuf enum <code>DECOMMISSIONED = 6;</code>
     */
    const DECOMMISSIONED = 6;

    private static $valueToName = [
        self::RUNTIME_STAGE_UNSPECIFIED => 'RUNTIME_STAGE_UNSPECIFIED',
        self::DEVELOPMENT => 'DEVELOPMENT',
        self::ALPHA => 'ALPHA',
        self::BETA => 'BETA',
        self::GA => 'GA',
        self::DEPRECATED => 'DEPRECATED',
        self::DECOMMISSIONED => 'DECOMMISSIONED',
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



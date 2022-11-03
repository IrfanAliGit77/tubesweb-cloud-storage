<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use UnexpectedValueException;

/**
 * Indicates whether DeviceService (HTTP) is enabled or disabled for the
 * registry. See the field description for details.
 *
 * Protobuf type <code>google.cloud.iot.v1.HttpState</code>
 */
class HttpState
{
    /**
     * No HTTP state specified. If not specified, DeviceService will be
     * enabled by default.
     *
     * Generated from protobuf enum <code>HTTP_STATE_UNSPECIFIED = 0;</code>
     */
    const HTTP_STATE_UNSPECIFIED = 0;
    /**
     * Enables DeviceService (HTTP) service for the registry.
     *
     * Generated from protobuf enum <code>HTTP_ENABLED = 1;</code>
     */
    const HTTP_ENABLED = 1;
    /**
     * Disables DeviceService (HTTP) service for the registry.
     *
     * Generated from protobuf enum <code>HTTP_DISABLED = 2;</code>
     */
    const HTTP_DISABLED = 2;

    private static $valueToName = [
        self::HTTP_STATE_UNSPECIFIED => 'HTTP_STATE_UNSPECIFIED',
        self::HTTP_ENABLED => 'HTTP_ENABLED',
        self::HTTP_DISABLED => 'HTTP_DISABLED',
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

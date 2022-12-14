<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnections/v1/app_connections_service.proto

namespace Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Gateway;

use UnexpectedValueException;

/**
 * Enum listing possible gateway hosting options.
 *
 * Protobuf type <code>google.cloud.beyondcorp.appconnections.v1.AppConnection.Gateway.Type</code>
 */
class Type
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Gateway hosted in a GCP regional managed instance group.
     *
     * Generated from protobuf enum <code>GCP_REGIONAL_MIG = 1;</code>
     */
    const GCP_REGIONAL_MIG = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::GCP_REGIONAL_MIG => 'GCP_REGIONAL_MIG',
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



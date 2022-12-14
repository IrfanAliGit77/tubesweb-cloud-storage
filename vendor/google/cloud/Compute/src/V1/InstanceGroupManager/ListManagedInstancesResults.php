<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceGroupManager;

use UnexpectedValueException;

/**
 * Pagination behavior of the listManagedInstances API method for this managed instance group.
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceGroupManager.ListManagedInstancesResults</code>
 */
class ListManagedInstancesResults
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LIST_MANAGED_INSTANCES_RESULTS = 0;</code>
     */
    const UNDEFINED_LIST_MANAGED_INSTANCES_RESULTS = 0;
    /**
     * (Default) Pagination is disabled for the group's listManagedInstances API method. maxResults and pageToken query parameters are ignored and all instances are returned in a single response.
     *
     * Generated from protobuf enum <code>PAGELESS = 32183464;</code>
     */
    const PAGELESS = 32183464;
    /**
     * Pagination is enabled for the group's listManagedInstances API method. maxResults and pageToken query parameters are respected.
     *
     * Generated from protobuf enum <code>PAGINATED = 40190637;</code>
     */
    const PAGINATED = 40190637;

    private static $valueToName = [
        self::UNDEFINED_LIST_MANAGED_INSTANCES_RESULTS => 'UNDEFINED_LIST_MANAGED_INSTANCES_RESULTS',
        self::PAGELESS => 'PAGELESS',
        self::PAGINATED => 'PAGINATED',
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



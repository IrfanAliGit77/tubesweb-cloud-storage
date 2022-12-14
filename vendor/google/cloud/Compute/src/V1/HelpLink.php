<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a URL link.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HelpLink</code>
 */
class HelpLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes what the link offers.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * The URL of the link.
     *
     * Generated from protobuf field <code>optional string url = 116079;</code>
     */
    private $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           Describes what the link offers.
     *     @type string $url
     *           The URL of the link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes what the link offers.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Describes what the link offers.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
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
     * The URL of the link.
     *
     * Generated from protobuf field <code>optional string url = 116079;</code>
     * @return string
     */
    public function getUrl()
    {
        return isset($this->url) ? $this->url : '';
    }

    public function hasUrl()
    {
        return isset($this->url);
    }

    public function clearUrl()
    {
        unset($this->url);
    }

    /**
     * The URL of the link.
     *
     * Generated from protobuf field <code>optional string url = 116079;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}


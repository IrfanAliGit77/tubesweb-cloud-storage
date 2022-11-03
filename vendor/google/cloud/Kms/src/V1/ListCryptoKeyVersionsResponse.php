<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeyManagementService.ListCryptoKeyVersions][google.cloud.kms.v1.KeyManagementService.ListCryptoKeyVersions].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.ListCryptoKeyVersionsResponse</code>
 */
class ListCryptoKeyVersionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.CryptoKeyVersion crypto_key_versions = 1;</code>
     */
    private $crypto_key_versions;
    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCryptoKeyVersionsRequest.page_token][google.cloud.kms.v1.ListCryptoKeyVersionsRequest.page_token]
     * to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * The total number of
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] that matched the
     * query.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    private $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Kms\V1\CryptoKeyVersion>|\Google\Protobuf\Internal\RepeatedField $crypto_key_versions
     *           The list of [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion].
     *     @type string $next_page_token
     *           A token to retrieve next page of results. Pass this value in
     *           [ListCryptoKeyVersionsRequest.page_token][google.cloud.kms.v1.ListCryptoKeyVersionsRequest.page_token]
     *           to retrieve the next page of results.
     *     @type int $total_size
     *           The total number of
     *           [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] that matched the
     *           query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.CryptoKeyVersion crypto_key_versions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCryptoKeyVersions()
    {
        return $this->crypto_key_versions;
    }

    /**
     * The list of [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.CryptoKeyVersion crypto_key_versions = 1;</code>
     * @param array<\Google\Cloud\Kms\V1\CryptoKeyVersion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCryptoKeyVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Kms\V1\CryptoKeyVersion::class);
        $this->crypto_key_versions = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCryptoKeyVersionsRequest.page_token][google.cloud.kms.v1.ListCryptoKeyVersionsRequest.page_token]
     * to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results. Pass this value in
     * [ListCryptoKeyVersionsRequest.page_token][google.cloud.kms.v1.ListCryptoKeyVersionsRequest.page_token]
     * to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The total number of
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] that matched the
     * query.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of
     * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] that matched the
     * query.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}


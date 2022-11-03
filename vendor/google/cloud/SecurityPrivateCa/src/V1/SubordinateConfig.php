<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a subordinate CA's issuers. This is either a resource name to a
 * known issuing [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority], or a PEM issuer certificate chain.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.SubordinateConfig</code>
 */
class SubordinateConfig extends \Google\Protobuf\Internal\Message
{
    protected $subordinate_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $certificate_authority
     *           Required. This can refer to a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that was used to create a
     *           subordinate [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]. This field is used for information
     *           and usability purposes only. The resource name is in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *     @type \Google\Cloud\Security\PrivateCA\V1\SubordinateConfig\SubordinateConfigChain $pem_issuer_chain
     *           Required. Contains the PEM certificate chain for the issuers of this
     *           [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority], but not pem certificate for this CA itself.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. This can refer to a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that was used to create a
     * subordinate [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]. This field is used for information
     * and usability purposes only. The resource name is in the format
     * `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string certificate_authority = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCertificateAuthority()
    {
        return $this->readOneof(1);
    }

    public function hasCertificateAuthority()
    {
        return $this->hasOneof(1);
    }

    /**
     * Required. This can refer to a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] that was used to create a
     * subordinate [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]. This field is used for information
     * and usability purposes only. The resource name is in the format
     * `projects/&#42;&#47;locations/&#42;&#47;caPools/&#42;&#47;certificateAuthorities/&#42;`.
     *
     * Generated from protobuf field <code>string certificate_authority = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateAuthority($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Required. Contains the PEM certificate chain for the issuers of this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority], but not pem certificate for this CA itself.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubordinateConfig.SubordinateConfigChain pem_issuer_chain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\SubordinateConfig\SubordinateConfigChain|null
     */
    public function getPemIssuerChain()
    {
        return $this->readOneof(2);
    }

    public function hasPemIssuerChain()
    {
        return $this->hasOneof(2);
    }

    /**
     * Required. Contains the PEM certificate chain for the issuers of this
     * [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority], but not pem certificate for this CA itself.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubordinateConfig.SubordinateConfigChain pem_issuer_chain = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\SubordinateConfig\SubordinateConfigChain $var
     * @return $this
     */
    public function setPemIssuerChain($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\SubordinateConfig\SubordinateConfigChain::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSubordinateConfig()
    {
        return $this->whichOneof("subordinate_config");
    }

}


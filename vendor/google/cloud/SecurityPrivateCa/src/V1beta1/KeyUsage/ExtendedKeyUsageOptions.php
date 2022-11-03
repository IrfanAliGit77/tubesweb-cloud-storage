<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\KeyUsage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [KeyUsage.ExtendedKeyUsageOptions][google.cloud.security.privateca.v1beta1.KeyUsage.ExtendedKeyUsageOptions] has fields that correspond to
 * certain common OIDs that could be specified as an extended key usage value.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.KeyUsage.ExtendedKeyUsageOptions</code>
 */
class ExtendedKeyUsageOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.1. Officially described as "TLS WWW
     * server authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool server_auth = 1;</code>
     */
    private $server_auth = false;
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.2. Officially described as "TLS WWW
     * client authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool client_auth = 2;</code>
     */
    private $client_auth = false;
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.3. Officially described as "Signing of
     * downloadable executable code client authentication".
     *
     * Generated from protobuf field <code>bool code_signing = 3;</code>
     */
    private $code_signing = false;
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.4. Officially described as "Email
     * protection".
     *
     * Generated from protobuf field <code>bool email_protection = 4;</code>
     */
    private $email_protection = false;
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.8. Officially described as "Binding
     * the hash of an object to a time".
     *
     * Generated from protobuf field <code>bool time_stamping = 5;</code>
     */
    private $time_stamping = false;
    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.9. Officially described as "Signing
     * OCSP responses".
     *
     * Generated from protobuf field <code>bool ocsp_signing = 6;</code>
     */
    private $ocsp_signing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $server_auth
     *           Corresponds to OID 1.3.6.1.5.5.7.3.1. Officially described as "TLS WWW
     *           server authentication", though regularly used for non-WWW TLS.
     *     @type bool $client_auth
     *           Corresponds to OID 1.3.6.1.5.5.7.3.2. Officially described as "TLS WWW
     *           client authentication", though regularly used for non-WWW TLS.
     *     @type bool $code_signing
     *           Corresponds to OID 1.3.6.1.5.5.7.3.3. Officially described as "Signing of
     *           downloadable executable code client authentication".
     *     @type bool $email_protection
     *           Corresponds to OID 1.3.6.1.5.5.7.3.4. Officially described as "Email
     *           protection".
     *     @type bool $time_stamping
     *           Corresponds to OID 1.3.6.1.5.5.7.3.8. Officially described as "Binding
     *           the hash of an object to a time".
     *     @type bool $ocsp_signing
     *           Corresponds to OID 1.3.6.1.5.5.7.3.9. Officially described as "Signing
     *           OCSP responses".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.1. Officially described as "TLS WWW
     * server authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool server_auth = 1;</code>
     * @return bool
     */
    public function getServerAuth()
    {
        return $this->server_auth;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.1. Officially described as "TLS WWW
     * server authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool server_auth = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setServerAuth($var)
    {
        GPBUtil::checkBool($var);
        $this->server_auth = $var;

        return $this;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.2. Officially described as "TLS WWW
     * client authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool client_auth = 2;</code>
     * @return bool
     */
    public function getClientAuth()
    {
        return $this->client_auth;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.2. Officially described as "TLS WWW
     * client authentication", though regularly used for non-WWW TLS.
     *
     * Generated from protobuf field <code>bool client_auth = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setClientAuth($var)
    {
        GPBUtil::checkBool($var);
        $this->client_auth = $var;

        return $this;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.3. Officially described as "Signing of
     * downloadable executable code client authentication".
     *
     * Generated from protobuf field <code>bool code_signing = 3;</code>
     * @return bool
     */
    public function getCodeSigning()
    {
        return $this->code_signing;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.3. Officially described as "Signing of
     * downloadable executable code client authentication".
     *
     * Generated from protobuf field <code>bool code_signing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCodeSigning($var)
    {
        GPBUtil::checkBool($var);
        $this->code_signing = $var;

        return $this;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.4. Officially described as "Email
     * protection".
     *
     * Generated from protobuf field <code>bool email_protection = 4;</code>
     * @return bool
     */
    public function getEmailProtection()
    {
        return $this->email_protection;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.4. Officially described as "Email
     * protection".
     *
     * Generated from protobuf field <code>bool email_protection = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmailProtection($var)
    {
        GPBUtil::checkBool($var);
        $this->email_protection = $var;

        return $this;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.8. Officially described as "Binding
     * the hash of an object to a time".
     *
     * Generated from protobuf field <code>bool time_stamping = 5;</code>
     * @return bool
     */
    public function getTimeStamping()
    {
        return $this->time_stamping;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.8. Officially described as "Binding
     * the hash of an object to a time".
     *
     * Generated from protobuf field <code>bool time_stamping = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setTimeStamping($var)
    {
        GPBUtil::checkBool($var);
        $this->time_stamping = $var;

        return $this;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.9. Officially described as "Signing
     * OCSP responses".
     *
     * Generated from protobuf field <code>bool ocsp_signing = 6;</code>
     * @return bool
     */
    public function getOcspSigning()
    {
        return $this->ocsp_signing;
    }

    /**
     * Corresponds to OID 1.3.6.1.5.5.7.3.9. Officially described as "Signing
     * OCSP responses".
     *
     * Generated from protobuf field <code>bool ocsp_signing = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setOcspSigning($var)
    {
        GPBUtil::checkBool($var);
        $this->ocsp_signing = $var;

        return $this;
    }

}


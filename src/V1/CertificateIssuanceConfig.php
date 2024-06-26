<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_issuance_config.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CertificateIssuanceConfig specifies how to issue and manage a certificate.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CertificateIssuanceConfig</code>
 */
class CertificateIssuanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-defined name of the certificate issuance config.
     * CertificateIssuanceConfig names must be unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The creation timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last update timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Set of labels associated with a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * One or more paragraphs of text description of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Required. The CA that issues the workload certificate. It includes the CA
     * address, type, authentication to CA service, etc.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.CertificateAuthorityConfig certificate_authority_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $certificate_authority_config = null;
    /**
     * Required. Workload certificate lifetime requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lifetime = null;
    /**
     * Required. Specifies the percentage of elapsed time of the certificate
     * lifetime to wait before renewing the certificate. Must be a number between
     * 1-99, inclusive.
     *
     * Generated from protobuf field <code>int32 rotation_window_percentage = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rotation_window_percentage = 0;
    /**
     * Required. The key algorithm to use when generating the private key.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.KeyAlgorithm key_algorithm = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key_algorithm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A user-defined name of the certificate issuance config.
     *           CertificateIssuanceConfig names must be unique globally and match pattern
     *           `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation timestamp of a CertificateIssuanceConfig.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update timestamp of a CertificateIssuanceConfig.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Set of labels associated with a CertificateIssuanceConfig.
     *     @type string $description
     *           One or more paragraphs of text description of a CertificateIssuanceConfig.
     *     @type \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\CertificateAuthorityConfig $certificate_authority_config
     *           Required. The CA that issues the workload certificate. It includes the CA
     *           address, type, authentication to CA service, etc.
     *     @type \Google\Protobuf\Duration $lifetime
     *           Required. Workload certificate lifetime requested.
     *     @type int $rotation_window_percentage
     *           Required. Specifies the percentage of elapsed time of the certificate
     *           lifetime to wait before renewing the certificate. Must be a number between
     *           1-99, inclusive.
     *     @type int $key_algorithm
     *           Required. The key algorithm to use when generating the private key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateIssuanceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-defined name of the certificate issuance config.
     * CertificateIssuanceConfig names must be unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A user-defined name of the certificate issuance config.
     * CertificateIssuanceConfig names must be unique globally and match pattern
     * `projects/&#42;&#47;locations/&#42;&#47;certificateIssuanceConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The creation timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The creation timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last update timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last update timestamp of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Set of labels associated with a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set of labels associated with a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * One or more paragraphs of text description of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * One or more paragraphs of text description of a CertificateIssuanceConfig.
     *
     * Generated from protobuf field <code>string description = 5;</code>
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
     * Required. The CA that issues the workload certificate. It includes the CA
     * address, type, authentication to CA service, etc.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.CertificateAuthorityConfig certificate_authority_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\CertificateAuthorityConfig|null
     */
    public function getCertificateAuthorityConfig()
    {
        return $this->certificate_authority_config;
    }

    public function hasCertificateAuthorityConfig()
    {
        return isset($this->certificate_authority_config);
    }

    public function clearCertificateAuthorityConfig()
    {
        unset($this->certificate_authority_config);
    }

    /**
     * Required. The CA that issues the workload certificate. It includes the CA
     * address, type, authentication to CA service, etc.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.CertificateAuthorityConfig certificate_authority_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\CertificateAuthorityConfig $var
     * @return $this
     */
    public function setCertificateAuthorityConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\CertificateAuthorityConfig::class);
        $this->certificate_authority_config = $var;

        return $this;
    }

    /**
     * Required. Workload certificate lifetime requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function hasLifetime()
    {
        return isset($this->lifetime);
    }

    public function clearLifetime()
    {
        unset($this->lifetime);
    }

    /**
     * Required. Workload certificate lifetime requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lifetime = $var;

        return $this;
    }

    /**
     * Required. Specifies the percentage of elapsed time of the certificate
     * lifetime to wait before renewing the certificate. Must be a number between
     * 1-99, inclusive.
     *
     * Generated from protobuf field <code>int32 rotation_window_percentage = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getRotationWindowPercentage()
    {
        return $this->rotation_window_percentage;
    }

    /**
     * Required. Specifies the percentage of elapsed time of the certificate
     * lifetime to wait before renewing the certificate. Must be a number between
     * 1-99, inclusive.
     *
     * Generated from protobuf field <code>int32 rotation_window_percentage = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setRotationWindowPercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->rotation_window_percentage = $var;

        return $this;
    }

    /**
     * Required. The key algorithm to use when generating the private key.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.KeyAlgorithm key_algorithm = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getKeyAlgorithm()
    {
        return $this->key_algorithm;
    }

    /**
     * Required. The key algorithm to use when generating the private key.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.CertificateIssuanceConfig.KeyAlgorithm key_algorithm = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setKeyAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\KeyAlgorithm::class);
        $this->key_algorithm = $var;

        return $this;
    }

}


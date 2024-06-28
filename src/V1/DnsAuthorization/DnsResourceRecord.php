<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1\DnsAuthorization;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The structure describing the DNS Resource Record that needs to be added
 * to DNS configuration for the authorization to be usable by
 * certificate.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.DnsAuthorization.DnsResourceRecord</code>
 */
class DnsResourceRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Fully qualified name of the DNS Resource Record.
     * e.g. `_acme-challenge.example.com`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Type of the DNS Resource Record.
     * Currently always set to "CNAME".
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = '';
    /**
     * Output only. Data of the DNS Resource Record.
     *
     * Generated from protobuf field <code>string data = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Fully qualified name of the DNS Resource Record.
     *           e.g. `_acme-challenge.example.com`
     *     @type string $type
     *           Output only. Type of the DNS Resource Record.
     *           Currently always set to "CNAME".
     *     @type string $data
     *           Output only. Data of the DNS Resource Record.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Fully qualified name of the DNS Resource Record.
     * e.g. `_acme-challenge.example.com`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Fully qualified name of the DNS Resource Record.
     * e.g. `_acme-challenge.example.com`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Type of the DNS Resource Record.
     * Currently always set to "CNAME".
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type of the DNS Resource Record.
     * Currently always set to "CNAME".
     *
     * Generated from protobuf field <code>string type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Data of the DNS Resource Record.
     *
     * Generated from protobuf field <code>string data = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Output only. Data of the DNS Resource Record.
     *
     * Generated from protobuf field <code>string data = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

}



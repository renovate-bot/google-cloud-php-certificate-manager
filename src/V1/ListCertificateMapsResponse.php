<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListCertificateMaps` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.ListCertificateMapsResponse</code>
 */
class ListCertificateMapsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of certificate maps for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap certificate_maps = 1;</code>
     */
    private $certificate_maps;
    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CertificateManager\V1\CertificateMap>|\Google\Protobuf\Internal\RepeatedField $certificate_maps
     *           A list of certificate maps for the parent resource.
     *     @type string $next_page_token
     *           If there might be more results than those appearing in this response, then
     *           `next_page_token` is included. To get the next set of results, call this
     *           method again using the value of `next_page_token` as `page_token`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of certificate maps for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap certificate_maps = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificateMaps()
    {
        return $this->certificate_maps;
    }

    /**
     * A list of certificate maps for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.CertificateMap certificate_maps = 1;</code>
     * @param array<\Google\Cloud\CertificateManager\V1\CertificateMap>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificateMaps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\CertificateMap::class);
        $this->certificate_maps = $arr;

        return $this;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
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
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}


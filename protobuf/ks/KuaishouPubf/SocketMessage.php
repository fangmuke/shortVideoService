<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ks.proto

namespace KuaishouPubf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 消息主体包
 *
 * Generated from protobuf message <code>kuaishouPubf.SocketMessage</code>
 */
class SocketMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.kuaishouPubf.PayloadType payloadType = 1;</code>
     */
    protected $payloadType = 0;
    /**
     * Generated from protobuf field <code>.kuaishouPubf.CompressionType compressionType = 2;</code>
     */
    protected $compressionType = 0;
    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     */
    protected $payload = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $payloadType
     *     @type int $compressionType
     *     @type string $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ks::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.kuaishouPubf.PayloadType payloadType = 1;</code>
     * @return int
     */
    public function getPayloadType()
    {
        return $this->payloadType;
    }

    /**
     * Generated from protobuf field <code>.kuaishouPubf.PayloadType payloadType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPayloadType($var)
    {
        GPBUtil::checkEnum($var, \KuaishouPubf\PayloadType::class);
        $this->payloadType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.kuaishouPubf.CompressionType compressionType = 2;</code>
     * @return int
     */
    public function getCompressionType()
    {
        return $this->compressionType;
    }

    /**
     * Generated from protobuf field <code>.kuaishouPubf.CompressionType compressionType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCompressionType($var)
    {
        GPBUtil::checkEnum($var, \KuaishouPubf\CompressionType::class);
        $this->compressionType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}


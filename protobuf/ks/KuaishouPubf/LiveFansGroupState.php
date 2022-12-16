<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ks.proto

namespace KuaishouPubf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kuaishouPubf.LiveFansGroupState</code>
 */
class LiveFansGroupState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 intimacyLevel = 1;</code>
     */
    protected $intimacyLevel = 0;
    /**
     * Generated from protobuf field <code>uint32 enterRoomSpecialEffect = 2;</code>
     */
    protected $enterRoomSpecialEffect = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $intimacyLevel
     *     @type int $enterRoomSpecialEffect
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ks::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 intimacyLevel = 1;</code>
     * @return int
     */
    public function getIntimacyLevel()
    {
        return $this->intimacyLevel;
    }

    /**
     * Generated from protobuf field <code>uint32 intimacyLevel = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIntimacyLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->intimacyLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 enterRoomSpecialEffect = 2;</code>
     * @return int
     */
    public function getEnterRoomSpecialEffect()
    {
        return $this->enterRoomSpecialEffect;
    }

    /**
     * Generated from protobuf field <code>uint32 enterRoomSpecialEffect = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEnterRoomSpecialEffect($var)
    {
        GPBUtil::checkUint32($var);
        $this->enterRoomSpecialEffect = $var;

        return $this;
    }

}

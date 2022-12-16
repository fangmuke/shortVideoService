<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.MatchAgainstScoreMessage</code>
 */
class MatchAgainstScoreMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     */
    protected $common = null;
    /**
     * Generated from protobuf field <code>.douyin.Against against = 2;</code>
     */
    protected $against = null;
    /**
     * Generated from protobuf field <code>uint32 matchStatus = 3;</code>
     */
    protected $matchStatus = 0;
    /**
     * Generated from protobuf field <code>uint32 displayStatus = 4;</code>
     */
    protected $displayStatus = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Douyin\Common $common
     *     @type \Douyin\Against $against
     *     @type int $matchStatus
     *     @type int $displayStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     * @return \Douyin\Common|null
     */
    public function getCommon()
    {
        return $this->common;
    }

    public function hasCommon()
    {
        return isset($this->common);
    }

    public function clearCommon()
    {
        unset($this->common);
    }

    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     * @param \Douyin\Common $var
     * @return $this
     */
    public function setCommon($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Common::class);
        $this->common = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Against against = 2;</code>
     * @return \Douyin\Against|null
     */
    public function getAgainst()
    {
        return $this->against;
    }

    public function hasAgainst()
    {
        return isset($this->against);
    }

    public function clearAgainst()
    {
        unset($this->against);
    }

    /**
     * Generated from protobuf field <code>.douyin.Against against = 2;</code>
     * @param \Douyin\Against $var
     * @return $this
     */
    public function setAgainst($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Against::class);
        $this->against = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 matchStatus = 3;</code>
     * @return int
     */
    public function getMatchStatus()
    {
        return $this->matchStatus;
    }

    /**
     * Generated from protobuf field <code>uint32 matchStatus = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->matchStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 displayStatus = 4;</code>
     * @return int
     */
    public function getDisplayStatus()
    {
        return $this->displayStatus;
    }

    /**
     * Generated from protobuf field <code>uint32 displayStatus = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDisplayStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->displayStatus = $var;

        return $this;
    }

}

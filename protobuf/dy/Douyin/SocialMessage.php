<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.SocialMessage</code>
 */
class SocialMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     */
    protected $common = null;
    /**
     * Generated from protobuf field <code>.douyin.User user = 2;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>uint64 shareType = 3;</code>
     */
    protected $shareType = 0;
    /**
     * Generated from protobuf field <code>uint64 action = 4;</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>string shareTarget = 5;</code>
     */
    protected $shareTarget = '';
    /**
     * Generated from protobuf field <code>uint64 followCount = 6;</code>
     */
    protected $followCount = 0;
    /**
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 7;</code>
     */
    protected $publicAreaCommon = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Douyin\Common $common
     *     @type \Douyin\User $user
     *     @type int|string $shareType
     *     @type int|string $action
     *     @type string $shareTarget
     *     @type int|string $followCount
     *     @type \Douyin\PublicAreaCommon $publicAreaCommon
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
     * Generated from protobuf field <code>.douyin.User user = 2;</code>
     * @return \Douyin\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.douyin.User user = 2;</code>
     * @param \Douyin\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Douyin\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 shareType = 3;</code>
     * @return int|string
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * Generated from protobuf field <code>uint64 shareType = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShareType($var)
    {
        GPBUtil::checkUint64($var);
        $this->shareType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 action = 4;</code>
     * @return int|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>uint64 action = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkUint64($var);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string shareTarget = 5;</code>
     * @return string
     */
    public function getShareTarget()
    {
        return $this->shareTarget;
    }

    /**
     * Generated from protobuf field <code>string shareTarget = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setShareTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->shareTarget = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 followCount = 6;</code>
     * @return int|string
     */
    public function getFollowCount()
    {
        return $this->followCount;
    }

    /**
     * Generated from protobuf field <code>uint64 followCount = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFollowCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->followCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 7;</code>
     * @return \Douyin\PublicAreaCommon|null
     */
    public function getPublicAreaCommon()
    {
        return $this->publicAreaCommon;
    }

    public function hasPublicAreaCommon()
    {
        return isset($this->publicAreaCommon);
    }

    public function clearPublicAreaCommon()
    {
        unset($this->publicAreaCommon);
    }

    /**
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 7;</code>
     * @param \Douyin\PublicAreaCommon $var
     * @return $this
     */
    public function setPublicAreaCommon($var)
    {
        GPBUtil::checkMessage($var, \Douyin\PublicAreaCommon::class);
        $this->publicAreaCommon = $var;

        return $this;
    }

}


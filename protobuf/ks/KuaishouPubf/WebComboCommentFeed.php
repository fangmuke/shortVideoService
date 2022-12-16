<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ks.proto

namespace KuaishouPubf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>kuaishouPubf.WebComboCommentFeed</code>
 */
class WebComboCommentFeed extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string content = 2;</code>
     */
    protected $content = '';
    /**
     * Generated from protobuf field <code>uint32 comboCount = 3;</code>
     */
    protected $comboCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $content
     *     @type int $comboCount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ks::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 comboCount = 3;</code>
     * @return int
     */
    public function getComboCount()
    {
        return $this->comboCount;
    }

    /**
     * Generated from protobuf field <code>uint32 comboCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setComboCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->comboCount = $var;

        return $this;
    }

}


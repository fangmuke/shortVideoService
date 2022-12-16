<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.Against</code>
 */
class Against extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string leftName = 1;</code>
     */
    protected $leftName = '';
    /**
     * Generated from protobuf field <code>.douyin.Image leftLogo = 2;</code>
     */
    protected $leftLogo = null;
    /**
     * Generated from protobuf field <code>string leftGoal = 3;</code>
     */
    protected $leftGoal = '';
    /**
     *  LeftPlayersList leftPlayersList = 4;
     *  LeftGoalStageDetail leftGoalStageDetail = 5;
     *
     * Generated from protobuf field <code>string rightName = 6;</code>
     */
    protected $rightName = '';
    /**
     * Generated from protobuf field <code>.douyin.Image rightLogo = 7;</code>
     */
    protected $rightLogo = null;
    /**
     * Generated from protobuf field <code>string rightGoal = 8;</code>
     */
    protected $rightGoal = '';
    /**
     *  RightPlayersList rightPlayersList  = 9;
     *  RightGoalStageDetail rightGoalStageDetail = 10;
     *
     * Generated from protobuf field <code>uint64 timestamp = 11;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>uint64 version = 12;</code>
     */
    protected $version = 0;
    /**
     * Generated from protobuf field <code>uint64 leftTeamId = 13;</code>
     */
    protected $leftTeamId = 0;
    /**
     * Generated from protobuf field <code>uint64 rightTeamId = 14;</code>
     */
    protected $rightTeamId = 0;
    /**
     * Generated from protobuf field <code>uint64 diffSei2absSecond = 15;</code>
     */
    protected $diffSei2absSecond = 0;
    /**
     * Generated from protobuf field <code>uint32 finalGoalStage = 16;</code>
     */
    protected $finalGoalStage = 0;
    /**
     * Generated from protobuf field <code>uint32 currentGoalStage = 17;</code>
     */
    protected $currentGoalStage = 0;
    /**
     * Generated from protobuf field <code>uint32 leftScoreAddition = 18;</code>
     */
    protected $leftScoreAddition = 0;
    /**
     * Generated from protobuf field <code>uint32 rightScoreAddition = 19;</code>
     */
    protected $rightScoreAddition = 0;
    /**
     * Generated from protobuf field <code>uint64 leftGoalInt = 20;</code>
     */
    protected $leftGoalInt = 0;
    /**
     * Generated from protobuf field <code>uint64 rightGoalInt = 21;</code>
     */
    protected $rightGoalInt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $leftName
     *     @type \Douyin\Image $leftLogo
     *     @type string $leftGoal
     *     @type string $rightName
     *            LeftPlayersList leftPlayersList = 4;
     *            LeftGoalStageDetail leftGoalStageDetail = 5;
     *     @type \Douyin\Image $rightLogo
     *     @type string $rightGoal
     *     @type int|string $timestamp
     *            RightPlayersList rightPlayersList  = 9;
     *            RightGoalStageDetail rightGoalStageDetail = 10;
     *     @type int|string $version
     *     @type int|string $leftTeamId
     *     @type int|string $rightTeamId
     *     @type int|string $diffSei2absSecond
     *     @type int $finalGoalStage
     *     @type int $currentGoalStage
     *     @type int $leftScoreAddition
     *     @type int $rightScoreAddition
     *     @type int|string $leftGoalInt
     *     @type int|string $rightGoalInt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string leftName = 1;</code>
     * @return string
     */
    public function getLeftName()
    {
        return $this->leftName;
    }

    /**
     * Generated from protobuf field <code>string leftName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLeftName($var)
    {
        GPBUtil::checkString($var, True);
        $this->leftName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image leftLogo = 2;</code>
     * @return \Douyin\Image|null
     */
    public function getLeftLogo()
    {
        return $this->leftLogo;
    }

    public function hasLeftLogo()
    {
        return isset($this->leftLogo);
    }

    public function clearLeftLogo()
    {
        unset($this->leftLogo);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image leftLogo = 2;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setLeftLogo($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->leftLogo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string leftGoal = 3;</code>
     * @return string
     */
    public function getLeftGoal()
    {
        return $this->leftGoal;
    }

    /**
     * Generated from protobuf field <code>string leftGoal = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLeftGoal($var)
    {
        GPBUtil::checkString($var, True);
        $this->leftGoal = $var;

        return $this;
    }

    /**
     *  LeftPlayersList leftPlayersList = 4;
     *  LeftGoalStageDetail leftGoalStageDetail = 5;
     *
     * Generated from protobuf field <code>string rightName = 6;</code>
     * @return string
     */
    public function getRightName()
    {
        return $this->rightName;
    }

    /**
     *  LeftPlayersList leftPlayersList = 4;
     *  LeftGoalStageDetail leftGoalStageDetail = 5;
     *
     * Generated from protobuf field <code>string rightName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRightName($var)
    {
        GPBUtil::checkString($var, True);
        $this->rightName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image rightLogo = 7;</code>
     * @return \Douyin\Image|null
     */
    public function getRightLogo()
    {
        return $this->rightLogo;
    }

    public function hasRightLogo()
    {
        return isset($this->rightLogo);
    }

    public function clearRightLogo()
    {
        unset($this->rightLogo);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image rightLogo = 7;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setRightLogo($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->rightLogo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rightGoal = 8;</code>
     * @return string
     */
    public function getRightGoal()
    {
        return $this->rightGoal;
    }

    /**
     * Generated from protobuf field <code>string rightGoal = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRightGoal($var)
    {
        GPBUtil::checkString($var, True);
        $this->rightGoal = $var;

        return $this;
    }

    /**
     *  RightPlayersList rightPlayersList  = 9;
     *  RightGoalStageDetail rightGoalStageDetail = 10;
     *
     * Generated from protobuf field <code>uint64 timestamp = 11;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     *  RightPlayersList rightPlayersList  = 9;
     *  RightGoalStageDetail rightGoalStageDetail = 10;
     *
     * Generated from protobuf field <code>uint64 timestamp = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 version = 12;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>uint64 version = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 leftTeamId = 13;</code>
     * @return int|string
     */
    public function getLeftTeamId()
    {
        return $this->leftTeamId;
    }

    /**
     * Generated from protobuf field <code>uint64 leftTeamId = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLeftTeamId($var)
    {
        GPBUtil::checkUint64($var);
        $this->leftTeamId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rightTeamId = 14;</code>
     * @return int|string
     */
    public function getRightTeamId()
    {
        return $this->rightTeamId;
    }

    /**
     * Generated from protobuf field <code>uint64 rightTeamId = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRightTeamId($var)
    {
        GPBUtil::checkUint64($var);
        $this->rightTeamId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 diffSei2absSecond = 15;</code>
     * @return int|string
     */
    public function getDiffSei2AbsSecond()
    {
        return $this->diffSei2absSecond;
    }

    /**
     * Generated from protobuf field <code>uint64 diffSei2absSecond = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiffSei2AbsSecond($var)
    {
        GPBUtil::checkUint64($var);
        $this->diffSei2absSecond = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 finalGoalStage = 16;</code>
     * @return int
     */
    public function getFinalGoalStage()
    {
        return $this->finalGoalStage;
    }

    /**
     * Generated from protobuf field <code>uint32 finalGoalStage = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFinalGoalStage($var)
    {
        GPBUtil::checkUint32($var);
        $this->finalGoalStage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 currentGoalStage = 17;</code>
     * @return int
     */
    public function getCurrentGoalStage()
    {
        return $this->currentGoalStage;
    }

    /**
     * Generated from protobuf field <code>uint32 currentGoalStage = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentGoalStage($var)
    {
        GPBUtil::checkUint32($var);
        $this->currentGoalStage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 leftScoreAddition = 18;</code>
     * @return int
     */
    public function getLeftScoreAddition()
    {
        return $this->leftScoreAddition;
    }

    /**
     * Generated from protobuf field <code>uint32 leftScoreAddition = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setLeftScoreAddition($var)
    {
        GPBUtil::checkUint32($var);
        $this->leftScoreAddition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rightScoreAddition = 19;</code>
     * @return int
     */
    public function getRightScoreAddition()
    {
        return $this->rightScoreAddition;
    }

    /**
     * Generated from protobuf field <code>uint32 rightScoreAddition = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setRightScoreAddition($var)
    {
        GPBUtil::checkUint32($var);
        $this->rightScoreAddition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 leftGoalInt = 20;</code>
     * @return int|string
     */
    public function getLeftGoalInt()
    {
        return $this->leftGoalInt;
    }

    /**
     * Generated from protobuf field <code>uint64 leftGoalInt = 20;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLeftGoalInt($var)
    {
        GPBUtil::checkUint64($var);
        $this->leftGoalInt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 rightGoalInt = 21;</code>
     * @return int|string
     */
    public function getRightGoalInt()
    {
        return $this->rightGoalInt;
    }

    /**
     * Generated from protobuf field <code>uint64 rightGoalInt = 21;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRightGoalInt($var)
    {
        GPBUtil::checkUint64($var);
        $this->rightGoalInt = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 礼物消息
 *
 * Generated from protobuf message <code>douyin.GiftMessage</code>
 */
class GiftMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.douyin.Common common = 1;</code>
     */
    protected $common = null;
    /**
     * Generated from protobuf field <code>uint64 giftId = 2;</code>
     */
    protected $giftId = 0;
    /**
     * Generated from protobuf field <code>uint64 fanTicketCount = 3;</code>
     */
    protected $fanTicketCount = 0;
    /**
     * Generated from protobuf field <code>uint64 groupCount = 4;</code>
     */
    protected $groupCount = 0;
    /**
     * Generated from protobuf field <code>uint64 repeatCount = 5;</code>
     */
    protected $repeatCount = 0;
    /**
     * Generated from protobuf field <code>uint64 comboCount = 6;</code>
     */
    protected $comboCount = 0;
    /**
     * Generated from protobuf field <code>.douyin.User user = 7;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>.douyin.User toUser = 8;</code>
     */
    protected $toUser = null;
    /**
     * Generated from protobuf field <code>uint32 repeatEnd = 9;</code>
     */
    protected $repeatEnd = 0;
    /**
     * Generated from protobuf field <code>.douyin.TextEffect textEffect = 10;</code>
     */
    protected $textEffect = null;
    /**
     * Generated from protobuf field <code>uint64 groupId = 11;</code>
     */
    protected $groupId = 0;
    /**
     * Generated from protobuf field <code>uint64 incomeTaskgifts = 12;</code>
     */
    protected $incomeTaskgifts = 0;
    /**
     * Generated from protobuf field <code>uint64 roomFanTicketCount = 13;</code>
     */
    protected $roomFanTicketCount = 0;
    /**
     * Generated from protobuf field <code>.douyin.GiftIMPriority priority = 14;</code>
     */
    protected $priority = null;
    /**
     * Generated from protobuf field <code>.douyin.GiftStruct gift = 15;</code>
     */
    protected $gift = null;
    /**
     * Generated from protobuf field <code>string logId = 16;</code>
     */
    protected $logId = '';
    /**
     * Generated from protobuf field <code>uint64 sendType = 17;</code>
     */
    protected $sendType = 0;
    /**
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 18;</code>
     */
    protected $publicAreaCommon = null;
    /**
     * Generated from protobuf field <code>.douyin.Text trayDisplayText = 19;</code>
     */
    protected $trayDisplayText = null;
    /**
     * Generated from protobuf field <code>uint64 bannedDisplayEffects = 20;</code>
     */
    protected $bannedDisplayEffects = 0;
    /**
     *  GiftTrayInfo trayInfo = 21;
     *  AssetEffectMixInfo assetEffectMixInfo = 22;
     *
     * Generated from protobuf field <code>bool displayForSelf = 25;</code>
     */
    protected $displayForSelf = false;
    /**
     * Generated from protobuf field <code>string interactGiftInfo = 26;</code>
     */
    protected $interactGiftInfo = '';
    /**
     * Generated from protobuf field <code>string diyItemInfo = 27;</code>
     */
    protected $diyItemInfo = '';
    /**
     * Generated from protobuf field <code>repeated uint64 minAssetSetList = 28;</code>
     */
    private $minAssetSetList;
    /**
     * Generated from protobuf field <code>uint64 totalCount = 29;</code>
     */
    protected $totalCount = 0;
    /**
     * Generated from protobuf field <code>uint32 clientGiftSource = 30;</code>
     */
    protected $clientGiftSource = 0;
    /**
     *  AnchorGiftData anchorGift = 31;
     *
     * Generated from protobuf field <code>repeated uint64 toUserIdsList = 32;</code>
     */
    private $toUserIdsList;
    /**
     * Generated from protobuf field <code>uint64 sendTime = 33;</code>
     */
    protected $sendTime = 0;
    /**
     * Generated from protobuf field <code>uint64 forceDisplayEffects = 34;</code>
     */
    protected $forceDisplayEffects = 0;
    /**
     * Generated from protobuf field <code>string traceId = 35;</code>
     */
    protected $traceId = '';
    /**
     * Generated from protobuf field <code>uint64 effectDisplayTs = 36;</code>
     */
    protected $effectDisplayTs = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Douyin\Common $common
     *     @type int|string $giftId
     *     @type int|string $fanTicketCount
     *     @type int|string $groupCount
     *     @type int|string $repeatCount
     *     @type int|string $comboCount
     *     @type \Douyin\User $user
     *     @type \Douyin\User $toUser
     *     @type int $repeatEnd
     *     @type \Douyin\TextEffect $textEffect
     *     @type int|string $groupId
     *     @type int|string $incomeTaskgifts
     *     @type int|string $roomFanTicketCount
     *     @type \Douyin\GiftIMPriority $priority
     *     @type \Douyin\GiftStruct $gift
     *     @type string $logId
     *     @type int|string $sendType
     *     @type \Douyin\PublicAreaCommon $publicAreaCommon
     *     @type \Douyin\Text $trayDisplayText
     *     @type int|string $bannedDisplayEffects
     *     @type bool $displayForSelf
     *            GiftTrayInfo trayInfo = 21;
     *            AssetEffectMixInfo assetEffectMixInfo = 22;
     *     @type string $interactGiftInfo
     *     @type string $diyItemInfo
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $minAssetSetList
     *     @type int|string $totalCount
     *     @type int $clientGiftSource
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $toUserIdsList
     *            AnchorGiftData anchorGift = 31;
     *     @type int|string $sendTime
     *     @type int|string $forceDisplayEffects
     *     @type string $traceId
     *     @type int|string $effectDisplayTs
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
     * Generated from protobuf field <code>uint64 giftId = 2;</code>
     * @return int|string
     */
    public function getGiftId()
    {
        return $this->giftId;
    }

    /**
     * Generated from protobuf field <code>uint64 giftId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGiftId($var)
    {
        GPBUtil::checkUint64($var);
        $this->giftId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 fanTicketCount = 3;</code>
     * @return int|string
     */
    public function getFanTicketCount()
    {
        return $this->fanTicketCount;
    }

    /**
     * Generated from protobuf field <code>uint64 fanTicketCount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFanTicketCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->fanTicketCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 groupCount = 4;</code>
     * @return int|string
     */
    public function getGroupCount()
    {
        return $this->groupCount;
    }

    /**
     * Generated from protobuf field <code>uint64 groupCount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->groupCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 repeatCount = 5;</code>
     * @return int|string
     */
    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    /**
     * Generated from protobuf field <code>uint64 repeatCount = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRepeatCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->repeatCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 comboCount = 6;</code>
     * @return int|string
     */
    public function getComboCount()
    {
        return $this->comboCount;
    }

    /**
     * Generated from protobuf field <code>uint64 comboCount = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setComboCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->comboCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.User user = 7;</code>
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
     * Generated from protobuf field <code>.douyin.User user = 7;</code>
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
     * Generated from protobuf field <code>.douyin.User toUser = 8;</code>
     * @return \Douyin\User|null
     */
    public function getToUser()
    {
        return $this->toUser;
    }

    public function hasToUser()
    {
        return isset($this->toUser);
    }

    public function clearToUser()
    {
        unset($this->toUser);
    }

    /**
     * Generated from protobuf field <code>.douyin.User toUser = 8;</code>
     * @param \Douyin\User $var
     * @return $this
     */
    public function setToUser($var)
    {
        GPBUtil::checkMessage($var, \Douyin\User::class);
        $this->toUser = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 repeatEnd = 9;</code>
     * @return int
     */
    public function getRepeatEnd()
    {
        return $this->repeatEnd;
    }

    /**
     * Generated from protobuf field <code>uint32 repeatEnd = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRepeatEnd($var)
    {
        GPBUtil::checkUint32($var);
        $this->repeatEnd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.TextEffect textEffect = 10;</code>
     * @return \Douyin\TextEffect|null
     */
    public function getTextEffect()
    {
        return $this->textEffect;
    }

    public function hasTextEffect()
    {
        return isset($this->textEffect);
    }

    public function clearTextEffect()
    {
        unset($this->textEffect);
    }

    /**
     * Generated from protobuf field <code>.douyin.TextEffect textEffect = 10;</code>
     * @param \Douyin\TextEffect $var
     * @return $this
     */
    public function setTextEffect($var)
    {
        GPBUtil::checkMessage($var, \Douyin\TextEffect::class);
        $this->textEffect = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 groupId = 11;</code>
     * @return int|string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Generated from protobuf field <code>uint64 groupId = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint64($var);
        $this->groupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 incomeTaskgifts = 12;</code>
     * @return int|string
     */
    public function getIncomeTaskgifts()
    {
        return $this->incomeTaskgifts;
    }

    /**
     * Generated from protobuf field <code>uint64 incomeTaskgifts = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIncomeTaskgifts($var)
    {
        GPBUtil::checkUint64($var);
        $this->incomeTaskgifts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 roomFanTicketCount = 13;</code>
     * @return int|string
     */
    public function getRoomFanTicketCount()
    {
        return $this->roomFanTicketCount;
    }

    /**
     * Generated from protobuf field <code>uint64 roomFanTicketCount = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomFanTicketCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->roomFanTicketCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.GiftIMPriority priority = 14;</code>
     * @return \Douyin\GiftIMPriority|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * Generated from protobuf field <code>.douyin.GiftIMPriority priority = 14;</code>
     * @param \Douyin\GiftIMPriority $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkMessage($var, \Douyin\GiftIMPriority::class);
        $this->priority = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.GiftStruct gift = 15;</code>
     * @return \Douyin\GiftStruct|null
     */
    public function getGift()
    {
        return $this->gift;
    }

    public function hasGift()
    {
        return isset($this->gift);
    }

    public function clearGift()
    {
        unset($this->gift);
    }

    /**
     * Generated from protobuf field <code>.douyin.GiftStruct gift = 15;</code>
     * @param \Douyin\GiftStruct $var
     * @return $this
     */
    public function setGift($var)
    {
        GPBUtil::checkMessage($var, \Douyin\GiftStruct::class);
        $this->gift = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string logId = 16;</code>
     * @return string
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * Generated from protobuf field <code>string logId = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setLogId($var)
    {
        GPBUtil::checkString($var, True);
        $this->logId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sendType = 17;</code>
     * @return int|string
     */
    public function getSendType()
    {
        return $this->sendType;
    }

    /**
     * Generated from protobuf field <code>uint64 sendType = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSendType($var)
    {
        GPBUtil::checkUint64($var);
        $this->sendType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 18;</code>
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
     * Generated from protobuf field <code>.douyin.PublicAreaCommon publicAreaCommon = 18;</code>
     * @param \Douyin\PublicAreaCommon $var
     * @return $this
     */
    public function setPublicAreaCommon($var)
    {
        GPBUtil::checkMessage($var, \Douyin\PublicAreaCommon::class);
        $this->publicAreaCommon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Text trayDisplayText = 19;</code>
     * @return \Douyin\Text|null
     */
    public function getTrayDisplayText()
    {
        return $this->trayDisplayText;
    }

    public function hasTrayDisplayText()
    {
        return isset($this->trayDisplayText);
    }

    public function clearTrayDisplayText()
    {
        unset($this->trayDisplayText);
    }

    /**
     * Generated from protobuf field <code>.douyin.Text trayDisplayText = 19;</code>
     * @param \Douyin\Text $var
     * @return $this
     */
    public function setTrayDisplayText($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Text::class);
        $this->trayDisplayText = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bannedDisplayEffects = 20;</code>
     * @return int|string
     */
    public function getBannedDisplayEffects()
    {
        return $this->bannedDisplayEffects;
    }

    /**
     * Generated from protobuf field <code>uint64 bannedDisplayEffects = 20;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBannedDisplayEffects($var)
    {
        GPBUtil::checkUint64($var);
        $this->bannedDisplayEffects = $var;

        return $this;
    }

    /**
     *  GiftTrayInfo trayInfo = 21;
     *  AssetEffectMixInfo assetEffectMixInfo = 22;
     *
     * Generated from protobuf field <code>bool displayForSelf = 25;</code>
     * @return bool
     */
    public function getDisplayForSelf()
    {
        return $this->displayForSelf;
    }

    /**
     *  GiftTrayInfo trayInfo = 21;
     *  AssetEffectMixInfo assetEffectMixInfo = 22;
     *
     * Generated from protobuf field <code>bool displayForSelf = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisplayForSelf($var)
    {
        GPBUtil::checkBool($var);
        $this->displayForSelf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string interactGiftInfo = 26;</code>
     * @return string
     */
    public function getInteractGiftInfo()
    {
        return $this->interactGiftInfo;
    }

    /**
     * Generated from protobuf field <code>string interactGiftInfo = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setInteractGiftInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->interactGiftInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string diyItemInfo = 27;</code>
     * @return string
     */
    public function getDiyItemInfo()
    {
        return $this->diyItemInfo;
    }

    /**
     * Generated from protobuf field <code>string diyItemInfo = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setDiyItemInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->diyItemInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 minAssetSetList = 28;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMinAssetSetList()
    {
        return $this->minAssetSetList;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 minAssetSetList = 28;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMinAssetSetList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->minAssetSetList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 totalCount = 29;</code>
     * @return int|string
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * Generated from protobuf field <code>uint64 totalCount = 29;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->totalCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clientGiftSource = 30;</code>
     * @return int
     */
    public function getClientGiftSource()
    {
        return $this->clientGiftSource;
    }

    /**
     * Generated from protobuf field <code>uint32 clientGiftSource = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setClientGiftSource($var)
    {
        GPBUtil::checkUint32($var);
        $this->clientGiftSource = $var;

        return $this;
    }

    /**
     *  AnchorGiftData anchorGift = 31;
     *
     * Generated from protobuf field <code>repeated uint64 toUserIdsList = 32;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getToUserIdsList()
    {
        return $this->toUserIdsList;
    }

    /**
     *  AnchorGiftData anchorGift = 31;
     *
     * Generated from protobuf field <code>repeated uint64 toUserIdsList = 32;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setToUserIdsList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->toUserIdsList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 sendTime = 33;</code>
     * @return int|string
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * Generated from protobuf field <code>uint64 sendTime = 33;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSendTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->sendTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 forceDisplayEffects = 34;</code>
     * @return int|string
     */
    public function getForceDisplayEffects()
    {
        return $this->forceDisplayEffects;
    }

    /**
     * Generated from protobuf field <code>uint64 forceDisplayEffects = 34;</code>
     * @param int|string $var
     * @return $this
     */
    public function setForceDisplayEffects($var)
    {
        GPBUtil::checkUint64($var);
        $this->forceDisplayEffects = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string traceId = 35;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->traceId;
    }

    /**
     * Generated from protobuf field <code>string traceId = 35;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->traceId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 effectDisplayTs = 36;</code>
     * @return int|string
     */
    public function getEffectDisplayTs()
    {
        return $this->effectDisplayTs;
    }

    /**
     * Generated from protobuf field <code>uint64 effectDisplayTs = 36;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEffectDisplayTs($var)
    {
        GPBUtil::checkUint64($var);
        $this->effectDisplayTs = $var;

        return $this;
    }

}


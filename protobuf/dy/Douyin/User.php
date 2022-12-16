<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint64 shortId = 2;</code>
     */
    protected $shortId = 0;
    /**
     * Generated from protobuf field <code>string nickName = 3;</code>
     */
    protected $nickName = '';
    /**
     * Generated from protobuf field <code>uint32 gender = 4;</code>
     */
    protected $gender = 0;
    /**
     * Generated from protobuf field <code>string Signature = 5;</code>
     */
    protected $Signature = '';
    /**
     * Generated from protobuf field <code>uint32 Level = 6;</code>
     */
    protected $Level = 0;
    /**
     * Generated from protobuf field <code>uint64 Birthday = 7;</code>
     */
    protected $Birthday = 0;
    /**
     * Generated from protobuf field <code>string Telephone = 8;</code>
     */
    protected $Telephone = '';
    /**
     * Generated from protobuf field <code>.douyin.Image AvatarThumb = 9;</code>
     */
    protected $AvatarThumb = null;
    /**
     * Generated from protobuf field <code>.douyin.Image AvatarMedium = 10;</code>
     */
    protected $AvatarMedium = null;
    /**
     * Generated from protobuf field <code>.douyin.Image AvatarLarge = 11;</code>
     */
    protected $AvatarLarge = null;
    /**
     * Generated from protobuf field <code>bool Verified = 12;</code>
     */
    protected $Verified = false;
    /**
     * Generated from protobuf field <code>uint32 Experience = 13;</code>
     */
    protected $Experience = 0;
    /**
     * Generated from protobuf field <code>string city = 14;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>int32 Status = 15;</code>
     */
    protected $Status = 0;
    /**
     * Generated from protobuf field <code>uint64 CreateTime = 16;</code>
     */
    protected $CreateTime = 0;
    /**
     * Generated from protobuf field <code>uint64 ModifyTime = 17;</code>
     */
    protected $ModifyTime = 0;
    /**
     * Generated from protobuf field <code>uint32 Secret = 18;</code>
     */
    protected $Secret = 0;
    /**
     * Generated from protobuf field <code>string ShareQrcodeUri = 19;</code>
     */
    protected $ShareQrcodeUri = '';
    /**
     * Generated from protobuf field <code>uint32 IncomeSharePercent = 20;</code>
     */
    protected $IncomeSharePercent = 0;
    /**
     * Generated from protobuf field <code>repeated .douyin.Image BadgeImageList = 21;</code>
     */
    private $BadgeImageList;
    /**
     *  FollowInfo FollowInfo = 22;
     *  PayGrade PayGrade = 23;
     *  FansClub FansClub = 24;
     *  Border Border = 25;
     *
     * Generated from protobuf field <code>string SpecialId = 26;</code>
     */
    protected $SpecialId = '';
    /**
     * Generated from protobuf field <code>.douyin.Image AvatarBorder = 27;</code>
     */
    protected $AvatarBorder = null;
    /**
     * Generated from protobuf field <code>.douyin.Image Medal = 28;</code>
     */
    protected $Medal = null;
    /**
     * Generated from protobuf field <code>repeated .douyin.Image RealTimeIconsList = 29;</code>
     */
    private $RealTimeIconsList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type int|string $shortId
     *     @type string $nickName
     *     @type int $gender
     *     @type string $Signature
     *     @type int $Level
     *     @type int|string $Birthday
     *     @type string $Telephone
     *     @type \Douyin\Image $AvatarThumb
     *     @type \Douyin\Image $AvatarMedium
     *     @type \Douyin\Image $AvatarLarge
     *     @type bool $Verified
     *     @type int $Experience
     *     @type string $city
     *     @type int $Status
     *     @type int|string $CreateTime
     *     @type int|string $ModifyTime
     *     @type int $Secret
     *     @type string $ShareQrcodeUri
     *     @type int $IncomeSharePercent
     *     @type array<\Douyin\Image>|\Google\Protobuf\Internal\RepeatedField $BadgeImageList
     *     @type string $SpecialId
     *            FollowInfo FollowInfo = 22;
     *            PayGrade PayGrade = 23;
     *            FansClub FansClub = 24;
     *            Border Border = 25;
     *     @type \Douyin\Image $AvatarBorder
     *     @type \Douyin\Image $Medal
     *     @type array<\Douyin\Image>|\Google\Protobuf\Internal\RepeatedField $RealTimeIconsList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 shortId = 2;</code>
     * @return int|string
     */
    public function getShortId()
    {
        return $this->shortId;
    }

    /**
     * Generated from protobuf field <code>uint64 shortId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setShortId($var)
    {
        GPBUtil::checkUint64($var);
        $this->shortId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickName($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gender = 4;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>uint32 gender = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkUint32($var);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Signature = 5;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Generated from protobuf field <code>string Signature = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->Signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 6;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 Birthday = 7;</code>
     * @return int|string
     */
    public function getBirthday()
    {
        return $this->Birthday;
    }

    /**
     * Generated from protobuf field <code>uint64 Birthday = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBirthday($var)
    {
        GPBUtil::checkUint64($var);
        $this->Birthday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Telephone = 8;</code>
     * @return string
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * Generated from protobuf field <code>string Telephone = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTelephone($var)
    {
        GPBUtil::checkString($var, True);
        $this->Telephone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarThumb = 9;</code>
     * @return \Douyin\Image|null
     */
    public function getAvatarThumb()
    {
        return $this->AvatarThumb;
    }

    public function hasAvatarThumb()
    {
        return isset($this->AvatarThumb);
    }

    public function clearAvatarThumb()
    {
        unset($this->AvatarThumb);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarThumb = 9;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setAvatarThumb($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->AvatarThumb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarMedium = 10;</code>
     * @return \Douyin\Image|null
     */
    public function getAvatarMedium()
    {
        return $this->AvatarMedium;
    }

    public function hasAvatarMedium()
    {
        return isset($this->AvatarMedium);
    }

    public function clearAvatarMedium()
    {
        unset($this->AvatarMedium);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarMedium = 10;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setAvatarMedium($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->AvatarMedium = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarLarge = 11;</code>
     * @return \Douyin\Image|null
     */
    public function getAvatarLarge()
    {
        return $this->AvatarLarge;
    }

    public function hasAvatarLarge()
    {
        return isset($this->AvatarLarge);
    }

    public function clearAvatarLarge()
    {
        unset($this->AvatarLarge);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarLarge = 11;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setAvatarLarge($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->AvatarLarge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Verified = 12;</code>
     * @return bool
     */
    public function getVerified()
    {
        return $this->Verified;
    }

    /**
     * Generated from protobuf field <code>bool Verified = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->Verified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Experience = 13;</code>
     * @return int
     */
    public function getExperience()
    {
        return $this->Experience;
    }

    /**
     * Generated from protobuf field <code>uint32 Experience = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setExperience($var)
    {
        GPBUtil::checkUint32($var);
        $this->Experience = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 14;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Generated from protobuf field <code>int32 Status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->Status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 CreateTime = 16;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * Generated from protobuf field <code>uint64 CreateTime = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ModifyTime = 17;</code>
     * @return int|string
     */
    public function getModifyTime()
    {
        return $this->ModifyTime;
    }

    /**
     * Generated from protobuf field <code>uint64 ModifyTime = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModifyTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->ModifyTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Secret = 18;</code>
     * @return int
     */
    public function getSecret()
    {
        return $this->Secret;
    }

    /**
     * Generated from protobuf field <code>uint32 Secret = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkUint32($var);
        $this->Secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ShareQrcodeUri = 19;</code>
     * @return string
     */
    public function getShareQrcodeUri()
    {
        return $this->ShareQrcodeUri;
    }

    /**
     * Generated from protobuf field <code>string ShareQrcodeUri = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setShareQrcodeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->ShareQrcodeUri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IncomeSharePercent = 20;</code>
     * @return int
     */
    public function getIncomeSharePercent()
    {
        return $this->IncomeSharePercent;
    }

    /**
     * Generated from protobuf field <code>uint32 IncomeSharePercent = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setIncomeSharePercent($var)
    {
        GPBUtil::checkUint32($var);
        $this->IncomeSharePercent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .douyin.Image BadgeImageList = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBadgeImageList()
    {
        return $this->BadgeImageList;
    }

    /**
     * Generated from protobuf field <code>repeated .douyin.Image BadgeImageList = 21;</code>
     * @param array<\Douyin\Image>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBadgeImageList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Douyin\Image::class);
        $this->BadgeImageList = $arr;

        return $this;
    }

    /**
     *  FollowInfo FollowInfo = 22;
     *  PayGrade PayGrade = 23;
     *  FansClub FansClub = 24;
     *  Border Border = 25;
     *
     * Generated from protobuf field <code>string SpecialId = 26;</code>
     * @return string
     */
    public function getSpecialId()
    {
        return $this->SpecialId;
    }

    /**
     *  FollowInfo FollowInfo = 22;
     *  PayGrade PayGrade = 23;
     *  FansClub FansClub = 24;
     *  Border Border = 25;
     *
     * Generated from protobuf field <code>string SpecialId = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setSpecialId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpecialId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarBorder = 27;</code>
     * @return \Douyin\Image|null
     */
    public function getAvatarBorder()
    {
        return $this->AvatarBorder;
    }

    public function hasAvatarBorder()
    {
        return isset($this->AvatarBorder);
    }

    public function clearAvatarBorder()
    {
        unset($this->AvatarBorder);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image AvatarBorder = 27;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setAvatarBorder($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->AvatarBorder = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.douyin.Image Medal = 28;</code>
     * @return \Douyin\Image|null
     */
    public function getMedal()
    {
        return $this->Medal;
    }

    public function hasMedal()
    {
        return isset($this->Medal);
    }

    public function clearMedal()
    {
        unset($this->Medal);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image Medal = 28;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setMedal($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->Medal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .douyin.Image RealTimeIconsList = 29;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRealTimeIconsList()
    {
        return $this->RealTimeIconsList;
    }

    /**
     * Generated from protobuf field <code>repeated .douyin.Image RealTimeIconsList = 29;</code>
     * @param array<\Douyin\Image>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRealTimeIconsList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Douyin\Image::class);
        $this->RealTimeIconsList = $arr;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dy.proto

namespace Douyin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>douyin.TextPieceImage</code>
 */
class TextPieceImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.douyin.Image image = 1;</code>
     */
    protected $image = null;
    /**
     * Generated from protobuf field <code>float scalingRate = 2;</code>
     */
    protected $scalingRate = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Douyin\Image $image
     *     @type float $scalingRate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dy::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image image = 1;</code>
     * @return \Douyin\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Generated from protobuf field <code>.douyin.Image image = 1;</code>
     * @param \Douyin\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Douyin\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float scalingRate = 2;</code>
     * @return float
     */
    public function getScalingRate()
    {
        return $this->scalingRate;
    }

    /**
     * Generated from protobuf field <code>float scalingRate = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScalingRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->scalingRate = $var;

        return $this;
    }

}


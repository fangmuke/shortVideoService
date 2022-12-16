<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ks.proto

namespace KuaishouPubf;

use UnexpectedValueException;

/**
 * Protobuf type <code>kuaishouPubf.DisplayType</code>
 */
class DisplayType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_DISPLAY_TYPE = 0;</code>
     */
    const UNKNOWN_DISPLAY_TYPE = 0;
    /**
     * Generated from protobuf enum <code>COMMENT = 1;</code>
     */
    const COMMENT = 1;
    /**
     * Generated from protobuf enum <code>ALERT = 2;</code>
     */
    const ALERT = 2;
    /**
     * Generated from protobuf enum <code>TOAST = 3;</code>
     */
    const TOAST = 3;

    private static $valueToName = [
        self::UNKNOWN_DISPLAY_TYPE => 'UNKNOWN_DISPLAY_TYPE',
        self::COMMENT => 'COMMENT',
        self::ALERT => 'ALERT',
        self::TOAST => 'TOAST',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


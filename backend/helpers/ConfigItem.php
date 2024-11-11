<?php

namespace backend\helpers;

class ConfigItem
{
    const CONFIG_AUTO_SEQ_NO = 1;
    const CONFIG_AUTO_CLOSE_WO = 2;
    const CONFIG_ENABLE_BACKUP_SCHEDULE = 3;

    private static $data = [
        1 => 'เปิดใช้งานเลขที่เอกสารแบบอัตโนมัติ',
        2 => 'ปิดใบสั่งงานทันทีเมื่อเปิดใบสั่งงาน',
        3 => 'เปิดการช่วงเวลาสำหรับสำรองข้อมูล'
    ];

    private static $dataobj = [
        ['id'=>1,'name' => 'เปิดใช้งานเลขที่เอกสารแบบอัตโนมัติ'],
        ['id'=>2,'name' => 'ปิดใบสั่งงานทันทีเมื่อเปิดใบสั่งงาน'],
        ['id'=>3,'name' => 'เปิดการช่วงเวลาสำหรับสำรองข้อมูล'],
    ];
    public static function asArray()
    {
        return self::$data;
    }
    public static function asArrayObject()
    {
        return self::$dataobj;
    }
    public static function getTypeById($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }
    public static function getTypeByName($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }
}

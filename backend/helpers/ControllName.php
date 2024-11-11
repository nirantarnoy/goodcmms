<?php

namespace backend\helpers;

class ControllName
{
    private static $data = [
        'site'=>'ภาพรวมระบบ',
         'plant' => 'สถานประกอบการ',
        'department' => 'ฝ่าย',
        'section' => 'แผนก',
        'warehouse' => 'สโตร์',
        'location' => 'ล๊อค',
        'section' => 'แผนก',
        'unit' => 'หน่วยนับ',
        'worktype' => 'ประเภทงาน',
        'assetgroup' => 'ประเภทเครื่องจักร/อุปกรณ์',
        'asset' => 'เครื่องจักร/อุปกรณ์',
        'assetlocation' => 'ทำเลที่ตั้ง',
        'failure' => 'ข้อผิดพลาด',
        'tasklist' => 'งาน',
        'pmschedule' => 'วางแผนงาน',
        'usergroup' => 'กลุ่มผู้ใช้งาน',
        'user' => 'ผู้ใช้งาน',
        'workorder' => 'ใบแจ้งซ่อม',
        'workrequest' => 'ใบร้องขอแจ้งซ่อม',
        'material' => 'อะไหล่/spare part',
    ];


    public static function getTypeById($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }

}

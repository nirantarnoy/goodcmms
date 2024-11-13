<?php

namespace backend\helpers;

class YesNo
{
    private static $data = [
        '0' => 'ปิดใช้งาน',
        '1' => 'ใช้งาน'
    ];

    private static $dataobj = [
        ['id'=>'0','name' => 'ปิดใช้งาน'],
        ['id'=>'1','name' => 'ใช้งาน']
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
    public static function getTypeByNameHtml($idx)
    {
        if (isset(self::$data[$idx])) {
            if($idx == 0){
                return  '<div class="badge badge-secondary">'.self::$data[$idx].'</div>';
            }else if($idx == 1){
                return  '<div class="badge badge-success">'.self::$data[$idx].'</div>';
            }

        }

        return 'Unknown Type';
    }


    private static $dataYesNo = [
        '0' => 'No',
        '1' => 'Yes'
    ];

    public static function getYesNoByHtml($idx)
    {
        if (isset(self::$dataYesNo[$idx])) {
            if($idx == 0){
                return  '<div class="badge badge-secondary">'.self::$dataYesNo[$idx].'</div>';
            }else if($idx == 1){
                return  '<div class="badge badge-success">'.self::$dataYesNo[$idx].'</div>';
            }

        }

        return 'Unknown Type';
    }
}

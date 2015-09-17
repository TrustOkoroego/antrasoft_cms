<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/17/15
 * Time: 1:15 AM
 */

namespace App\antrasoft\helper;


class AdminHelper {
    public function __construct()
    {

    }

    public static function getPrivileges($list=null)
    {
        if($list==null)
        {
            return '';
        }

        $pr = explode(',',$list);
        return $pr;
    }

} 
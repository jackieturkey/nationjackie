<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26
 * Time: 11:34
 */
namespace  App;

use Illuminate\Database\Eloquent\Model;

class Member extends  Model
{
    public  static function getMember()
    {
        return 'you are dog';
    }
}
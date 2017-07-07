<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 07.07.2017
 * Time: 14:49
 */

namespace app\models;


use yii\db\ActiveRecord;

class Menu extends ActiveRecord
{

    public static function tableName(){
    return "menu";
    }


}
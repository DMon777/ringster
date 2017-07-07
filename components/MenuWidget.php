<?php

namespace app\components;
use yii\base\Widget;
use app\models\Menu;


class MenuWidget extends Widget
{


    public function run()
    {
        $menu = Menu::find()->asArray()->orderBy('menu_order')->all();
        return $this->render('menu',['menu' => $menu]);
    }

}
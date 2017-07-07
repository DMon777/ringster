<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>


<ul class="nav navbar-nav navbar-right">

    <?foreach ($menu as $key=>$val):?>
        <li> <?=Html::a($val['title'],Url::to([$val['url']]));?> </li>


    <?endforeach;?>
<!--    -->
<!--    <li> --><?//=Html::a('Home',Url::home());?><!-- </li>-->
<!--    <li> --><?//=Html::a('About',Url::to(['about']));?><!-- </li>-->
<!--    <li> --><?//=Html::a('Gallery',Url::to(['gallery']));?><!-- </li>-->
<!--    <li> --><?//=Html::a('Blog',Url::to(['blog']));?><!-- </li>-->
<!--    <li> --><?//=Html::a('Contact Us',Url::to(['contact-us']));?><!-- </li>-->
</ul>
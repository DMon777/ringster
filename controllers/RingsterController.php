<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 05.07.2017
 * Time: 14:44
 */

namespace app\controllers;

use yii\web\Controller;

class RingsterController extends Controller
{

    public function actionMain()
    {
        $this->layout = 'home-template';
        $this->view->title = "home";
        return $this->render('main');
    }

    public function actionAbout()
    {
        $this->layout = 'page-template';
        $this->view->title = "about";
        return $this->render('about');
    }

    public function actionGallery()
    {
        $this->layout = 'page-template';
        $this->view->title = "gallery";
        return $this->render('gallery');
    }

    public function actionBlog()
    {
        $this->layout = 'page-template';
        $this->view->title = "blog";
        return $this->render('blog');
    }

    public function actionContactUs()
    {
        $this->layout = 'page-template';
        $this->view->title = "contact us";
        return $this->render('contact-us');
    }


}
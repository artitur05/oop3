<?php
namespace blog\controllers;

class IndexController extends FuncController
{



    public function actionIndex() {
        echo $this->render('index');
    }


}
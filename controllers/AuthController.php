<?php


namespace blog\controllers;


class AuthController extends Controller
{
    public function runAction($action)
    {
        $method = 'action' . ucfirst($action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            die('404 нет такого экшена');
        }
    }

    function actionLogin() {
        var_dump($_POST);
    }

    function actonLogout() {}
}
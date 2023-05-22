<?php


namespace blog\controllers;


use blog\app\Render;

class Controller extends Render
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

}
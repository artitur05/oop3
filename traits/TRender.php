<?php

namespace blog\traits;

trait TRender
{
    public function render($template, $params = [])
    {
        return $this->renderTemplate('layouts/main', [
            'menu' => $this->renderTemplate('menu', $params),
            'content' => $this->renderTemplate($template, $params)
        ]);

    }

    public function renderTemplate($template, $params = [])
    {
        ob_start();
        extract($params);
        include '../views/' . $template . '.php';
        return ob_get_clean();
    }
}
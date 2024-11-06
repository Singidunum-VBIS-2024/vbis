<?php

namespace app\core;

class View
{
    public function render($viewName, $layoutName, $params)
    {
        $layoutName = $this->renderLayout($layoutName);
        $view = $this->renderPartialView($viewName, $params);

        return str_replace("{{ RENDER_VIEW }}", $view, $layoutName);
    }

    public function renderLayout($layoutName)
    {
        ob_start();
        include_once __DIR__ . "/../views/layout/$layoutName.php";
        return ob_get_clean();
    }
    public function renderPartialView($viewName, $params)
    {
        if($params !== null){
            foreach ($params as $key => $value) {
                $$key = $value;
            }
        }

        ob_start();
        include_once __DIR__ . "/../views/$viewName.php";
        return ob_get_clean();
    }
}
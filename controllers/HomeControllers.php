<?php

namespace app\controllers;

use app\core\BaseControllers;

class HomeControllers extends BaseControllers
{

    public function home()
    {
        $this->view->render('home', 'main', null);
    }
    public function about()
    {

        $this->view->render('home', 'main', null);
    }
}
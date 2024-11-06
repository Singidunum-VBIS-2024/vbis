<?php

namespace app\core;

class BaseControllers
{
    public View  $view;

    public  function __construct()
    {
        $this->view = new View();
    }

}
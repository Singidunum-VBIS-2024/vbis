<?php
namespace app\controllers;

use app\core\BaseControllers;
use app\models\UserModels;
use Couchbase\User;

class UserControllers extends BaseControllers
{

    public function readUser()
    {
        $model = new UserModels();
        $model->email = 'mihajlo.patricevic.22@gmail.com';
        $model->firstName = 'Mihajlo';
        $model->lastName = 'Patricevic';


        $this-> view->render('getUser', 'main', $model);
    }

}
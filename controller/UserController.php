<?php
/**
 * Created by PhpStorm.
 * User: fudi
 * Date: 2018/12/14
 * Time: 16:01
 */

namespace DL\Controller;


class UserController
{
    public function actionInfo()
    {
        echo json_encode(['name' => 'liujie', 'age' => 20]);
    }

    public function actionOrder()
    {
        
    }

    public function actionVersion()
    {
        echo '1.6';
    }

    public function actionCity()
    {
        echo 'cd1.1';
    }

    public function actionNow()
    {

    }
}
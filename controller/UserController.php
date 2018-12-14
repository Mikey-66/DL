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
}
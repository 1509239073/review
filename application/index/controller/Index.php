<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
// use app\index\model\User as UserModel;
use think\facade\Config;
use think\facade\Cache;
use think\facade\Session;
use think\facade\Request;

class Index
{

    public function index()
    {
        echo phpinfo();
    }
    public function getOne()
    {
        echo 1;
    }
    public function getTwo()
    {
        echo 2;
    }

    public function million_data_test()
    {
        //$usersList = Db::name('test')->field('id,name,time')->select();
        //dump($usersList);
        Db::transaction(function () {
            $str = '';
            for ($i = 0; $i < 1000000; $i++) {
                $tmp = random_self(6);
                $str .= "('" . $tmp . "','" . date('Y-m-d H:i:s', time()) . "'),";


            }
            //$insertSql = 'insert into test (name,time) values'.rtrim($str,',');
            //Db::execute($insertSql);
            //$usersList = Db::name('test')->field('id,name,time')->select();
            // dump($usersList);
        });
        // 
        // echo 2;


    }
}

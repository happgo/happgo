<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/19
 * Time  : 15:28
 */

namespace App\Home\Controller;

use App\Home\Model\User;
use Happgo\Db\DbPool;

class Index
{
    public function index()
    {
        $res = User::find(1);

        return ['msg' => $res];
    }
}
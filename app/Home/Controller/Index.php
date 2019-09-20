<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/19
 * Time  : 15:28
 */

namespace App\Home\Controller;

use Happgo\Db\DbPool;

class Index
{
    public function index()
    {
        $connect = DbPool::getInstance()->get();
        $stmt = $connect->prepare('SELECT * FROM h_user WHERE id = ?');
        if ($stmt == false) {
            var_dump($connect->errno, $connect->error);
        }
        $res = $stmt->execute([1]);//绑定参数 执行sql
        DbPool::getInstance()->release($connect);//释放回收链接
        return ['msg' => $res];
    }
}
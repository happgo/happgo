<?php declare(strict_types=1);
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/10
 * Time  : 15:24
 */

namespace App;


use Happgo\Bean\Annotation\Bean;
use Happgo\Framework\HappgoApplication;

/**
 * 启动
 * Class Run
 * @author 张伯发 2019/9/10 15:52
 */
class Application extends HappgoApplication
{
    public function beforeInit()
    {
        parent::beforeInit();
        date_default_timezone_set('Asia/Shanghai');
    }

}
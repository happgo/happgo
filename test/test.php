<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/20
 * Time  : 23:12
 */

require_once "/Users/xiao/Desktop/code/happgo-app/test/Container.php";
require_once "/Users/xiao/Desktop/code/happgo-app/test/CountA.php";
require_once "/Users/xiao/Desktop/code/happgo-app/test/CountB.php";
require_once "/Users/xiao/Desktop/code/happgo-app/test/CountC.php";


use TestHappy\Container;
use TestHappy\CountB;



$countB = Container::getInstance(CountB::class, [10]);
$countB->sum();



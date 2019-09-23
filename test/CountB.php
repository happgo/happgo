<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/20
 * Time  : 23:08
 */

namespace TestHappy;


class CountB
{

    public $count = 1;

    public function __construct(CountA $a, $count)
    {
        $this->count += $a->count + $count;
    }

    public function sum()
    {
        echo $this->count . '     ';
    }

}
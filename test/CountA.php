<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/20
 * Time  : 23:08
 */

namespace TestHappy;


class CountA
{
    public $count = 80;
    public function __construct(CountC $c)
    {
        $this->count += $c->count;
    }

}
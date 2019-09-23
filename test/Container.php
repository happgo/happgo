<?php
/**
 * Created by IntelliJ IDEA
 * Author: 张伯发
 * Date  : 2019/9/20
 * Time  : 22:55
 */
namespace TestHappy;


class Container
{

    public static function getInstance($className, $params = [])
    {
        $reflector = new \ReflectionClass($className);

        $constructor = $reflector->getConstructor();

        $d_params = [];
        if ($constructor) {
            foreach ($constructor->getParameters() as $param) {
                $class = $param->getClass();
                if ($class) {
                    $d_params[] = self::getInstance($class->name);
                }
            }
        }
        $d_params = array_merge($d_params, $params);

        return $reflector->newInstanceArgs($d_params);


    }
}
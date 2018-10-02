<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/2
 */

namespace App\Kernel;

class App
{
    //确定此类是否已经被引入进来了
    public static $classMap = [];
    /**
     * 框架的启动函数
     * @return string
     */
    public static function run()
    {
        $route = new Router();
    }

    /**
     * 类的自动加载
     * @param $class [需要加载的类的名字]
     * @return bool
     */
    public static function load($class)
    {
        $class = format($class);
        // 避免重复引入
        if(isset($classMap[$class])) {
            return true;
        }
        $filePath =APP.'/'.$class.'.php';
        if(is_file($filePath)) {
            require_once $filePath;
            self::$classMap[$class] = $class;
        } else {
            return false;
        }
    }
}

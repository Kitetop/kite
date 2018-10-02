<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/2
 */

namespace App;

use App\Kernel\App;

define('ROOT_PATH', str_replace('\\', '/', __DIR__));
// 核心的函数库文件
define('KERNEL', ROOT_PATH . '/../app/kernel');
//控制器等所处目录
define('APP', ROOT_PATH . '/../app');
// 调试模式
define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}
// 加载框架的核心的文件、启动框架
require_once KERNEL . '/App.php';
App::run();
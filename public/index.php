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
define('KERNEL', ROOT_PATH . '/../app/Kernel');
//控制器等所处目录
define('APP',ROOT_PATH.'/../app');
define('ROOT', ROOT_PATH . '/..');
// 调试模式
define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}
// 加载公用的函数库
require_once ROOT . '/kite/Commons/format.php';
// 加载框架的核心的文件、启动框架
require_once KERNEL . '/App.php';
// 加载第三发类库
require_once ROOT.'/vendor/autoload.php';
//类的自动加载
spl_autoload_register('\App\Kernel\App::load');
App::run();
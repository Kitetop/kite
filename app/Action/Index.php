<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/5
 */

namespace App\Action;
use Kite\Action\Action;

/**
 * 测试Action类
 * Class index
 * @package App\Action
 */
class Index extends Action
{
    protected function doGet()
    {
        $service =  $this->Service('Index');
        $service->name = 'Kitetop';
        $service->password = 'mumu';
        $service->run();
    }
}
<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/5
 */

namespace Kite\Action;

/**
 * 处理Action的基础类
 * Class BaseAction
 * @package Kite\Action
 */
class BaseAction
{
    public $params = [];
    public $actionMessage = [];
    public function execute()
    {
        echo 'This is BaseAction execute function';
    }
}
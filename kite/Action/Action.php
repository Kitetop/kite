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
 * @param $method [请求的方法类型]
 */
class Action
{
    protected $params = [];
    protected $actionMessage = [];

    public function __construct($actionMessage,$params)
    {
        $this->actionMessage = $actionMessage;
        $this->params = $params;
    }

    public function execute($method)
    {
        $func = 'do' . ucfirst(strtolower($method));
        $this->$func();
    }

    protected function doGet()
    {

    }
    protected function doPost()
    {

    }
    protected function doDelete()
    {

    }
    protected function doPatch()
    {

    }
}
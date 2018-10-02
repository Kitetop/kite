<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/3
 */

namespace Kite\Http\Website;

/**
 * 路由表配置管理
 * Class BaseRouter
 * @package Kite\Http\Website
 */
class BaseRouter
{
    /**
     * @var 路由的配置信息
     */
    private $routers;
    private $config;
    /**
     * @var 发起请求的路由信息
     */
    private $router = [];
    /**
     * BaseRouter constructor.
     * 1. 隐藏index.php
     * 2. 获取URL的参数部分
     * 3. 返回对应控制器以及方法
     */
    public function __construct(array $routers,$config)
    {
        $this->routers = $routers;
        $this->config = $config;
    }

    /**
     * 取得路由的信息
     * @return 发起请求的路由信息
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * 解析路由
     * @return
     */
    public function analyseRouter()
    {

    }
}
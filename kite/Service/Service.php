<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/8
 */

namespace Kite\Service;


abstract class Service
{
    public $params = [];
    /**
     * @var array [全局的配置信息]
     */
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function run()
    {
        $this->execute();
    }

    /**
     * 在服务内部调用其他服务
     * @param String $name
     * @param array $params
     * @throws
     * @return Service
     */
    public function call(string $name, array $params)
    {
        $path = APP . '/Service/' . $name . '.php';
        if (is_file(str_replace('\\', '/', $path))) {
            require_once $path;
            $class = 'App\\Service\\' . $name;
            $service = new $class($this->config);
            $service->params = $params;
            return $service->execute();
        } else {
            throw new \Exception('This Service is Invalid');
        }
    }

    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    public function __get($name)
    {
        return $this->params[$name];
    }

    /**
     * @return mixed [抽象的方法，需要子类进行重写]
     */
    abstract protected function execute();
}
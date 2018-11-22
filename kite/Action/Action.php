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
abstract class Action
{
    protected $params = [];
    protected $actionMessage = [];
    /**
     * @var array [全局的配置信息]
     */
    protected $config = [];

    public function __construct($actionMessage, $params, $config)
    {
        $this->actionMessage = $actionMessage;
        $this->params = $params;
        $this->config = $config;
    }

    public function execute($method)
    {
        $func = 'do' . ucfirst(strtolower($method));
        $this->$func();
    }

    /**
     * 返回对应的Service对象
     * @return Service
     * @throws [调用的服务是否存在]
     */

    public function Service(string $name)
    {
        $path = APP . '/Service/' . $name . '.php';
        if (is_file(str_replace('\\', '/', $path))) {
            require_once $path;
            $class = 'App\\Service\\'.$name;
            return new $class($this->config);
        } else {
            throw new \Exception('This Service is Invalid');
        }
    }

    /*
 * 表单验证,默认对输入内容验证
 *
 * @param array $rule 验证规则
 * @return array
 */
    protected function validate(array $rules)
    {
        $data = $this->request->only(array_keys($rules));
        $validator = new Validator($rules, $data);
        if (false === $validator->make()) {
            throw new \Exception($validator->lastError(), 400);
        }

        $this->props = $this->validatedData = $validator->validatedData();
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

<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/11/26
 */

namespace Kite\Model;


Abstract class AbstractModel
{
    protected $config = [];
    /**
     * @var 数据库对象
     */
    protected $model;
    /**
     * @var 表名
     */
    protected $table;
    /**
     * @var 查询的结果集
     */
    protected $row;

    public function __construct($dbType, $query = null)
    {
        $this->init($dbType, $query);
    }

    protected function config($dbType)
    {
        if (isset($dbType)) {
            $config = require APP . '/Config/dev.php';
            $this->config = $config[$dbType];
            return $this->config;
        } else {
            throw new \Exception('DataBase type can not be null', 500);
        }
    }

    /**
     * @param $dbType
     * @throws \Exception
     * model 的前置操作，初始化，得到对应的数据库对象
     */
    protected function init($dbType, $query)
    {
        $this->config($dbType);
        $this->model = $this->connect($dbType, $this->config);
        $this->table = $this->table();
        if (isset($query)) {
            $this->row = $this->select($query);
        }
    }

    /**
     * @param $dbType 数据库类型
     * @param array $config 配置信息
     * @throws
     * @return mixed 对应的数据库对象
     */
    protected function connect($dbType, array $config)
    {
        $class = 'Kite\\Model\\' . $dbType . '\\' . $dbType;
        if (class_exists($class)) {
            $db = new $class($config);
            $db->connect();
            return $db;
        } else {
            throw new \Exception('This model is not exit',500);
        }
    }

    /**
     * @param array $query 需要查询的位置条件
     * @return mixed 查询到的结果集
     */
    protected function select(array $query)
    {
        return $this->model->select($query,$this->table);
    }

    /**
     * @return bool 判断查询的结果集是否为空
     */
    public function exist()
    {
        if(isset($this->row)) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * @return mixed 操作的表名或者集合名
     */
    abstract protected function table();
}

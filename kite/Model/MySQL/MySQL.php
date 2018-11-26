<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/11/26
 */

namespace Kite\Model\MySQL;


final class MySQL
{
    private $dsn;
    private $user;
    private $password;
    /**
     * @var PDO object
     */
    private $pdo;
    /**
     * @var 数据库的操作语句
     */
    private $query;
    private $table;
    private $which;
    private $where;
    private $order = 'asc';
    private $group;

    public function __construct(array $config)
    {
        $this->dsn = $config['dsn'];
        $this->user = $config['user'];
        $this->password = $config['password'];
    }

    public function connect()
    {
        try {
            $this->pdo = new \PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage(), 500);
        }
    }

    public function select($table, $which = '*', $where = null, $order = 'asc',$group = null)
    {
        unset($this->query);
        $this->table = $table;
        $this->which = $which;
        $this->where = $where;
        $this->order = $order;
        $this->group = $group;
        $this->query = 'select ';
    }

    public function table($table)
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function create()
    {

    }

    public function execute()
    {

    }

    public function which()
    {

    }

    public function where(array $where)
    {

    }

    public function whereRows(array $whereRows)
    {

    }

    public function group(array $group)
    {

    }

    public function order(array $order)
    {

    }
}
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
    private $table;
    /**
     * @var LibPDO object
     */
    private $pdo;
    /**
     * @var 数据库的操作语句
     */
    protected $query = '';

    public function __construct(array $config)
    {
        $this->dsn = $config['dsn'];
        $this->user = $config['user'];
        $this->password = $config['password'];
    }
    
    public function connect($table)
    {
        try {
            $this->table = $table;
            $this->pdo = new \PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage(), 500);
        }
    }

    public function select()
    {
        $this->query = 'select * from ' . $this->table;
        return $this;
    }

    public function update()
    {
        $this->query = 'update ' . $this->table . 'set' . $this->query . ' ';
        return $this;
    }

    public function delete()
    {
        $this->query = 'delete from ' . $this->table . $this->query . ' ';
        return $this;
    }

    public function create()
    {
        $this->query = 'insert into ' . $this->table . $this->query . ' ';
    }

    public function execute()
    {

    }

    public function which()
    {

    }

    #################################################
    #                  查询构造器                    #
    #                  构造SQL语句                  #
    ###############################################
    public function where(array $where)
    {
        $res = LibPDO::getInstance()->parseWhere($where);
        $this->query .= $this->query . $res;
        return $this;
    }

    public function group(array $group)
    {

    }

    public function order(array $order)
    {

    }
}
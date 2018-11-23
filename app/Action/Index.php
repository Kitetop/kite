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
    protected $getRules = [
        'name' => [
            'desc' => '分页页码',
            'message' => 'id不能为空',
            'rules' => ['required'],
        ],
        'username' => [
            'desc' => '用户名',
            'message' => '用户名不能为空',
            'rules' => ['required']
        ]
    ];
    protected function doGet()
    {
        //dump($this->getRules);
        $this->validate($this->getRules);
        $this->code(201);
        $this->response($this->params);
    }
}
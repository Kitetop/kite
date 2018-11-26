<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/8
 */

namespace App\Service;


use Kite\Service\AbstractService;
use App\Model\Index as ModelIndex;

class Index extends AbstractService
{
    protected function execute()
    {
        $model = new ModelIndex('MySQL',['Cphone' => '13']);
        var_dump($model);
        exit();
        $service = $this->call('Test',[
            'username' => $this->username,
        ]);
        return $service;
    }
}
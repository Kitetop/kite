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
        $model = new ModelIndex([['Mphone', '=', '18852865877'], ['Mname', '=', 'Kitetop']]);
       if(!$model->exist()) {
           echo 'not';
       } else {
           echo 'hhhhh';
       }
        $service = $this->call('Test', [
            'username' => $this->username,
        ]);
        return $service;
    }
}
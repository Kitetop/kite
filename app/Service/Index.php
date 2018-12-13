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
        $model = new ModelIndex(['Mphone'=>18852865879, 'Mname' => 'Kitetop']);
        $model->remove();
//        $model = new ModelIndex();
//        $model->import([
//            'Mphone' => 18852865879,
//            'Mname' => 'Kitetop',
//            'Mpass' => 1111
//        ])->save();
        exit();
        var_dump($model);exit();
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
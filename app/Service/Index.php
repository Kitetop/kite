<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/8
 */

namespace App\Service;


use Kite\Service\Service;

class Index extends Service
{
    protected function execute()
    {
        $service = $this->call('Test',[
            'username' => 'wyw',
            'password' => 'Kitetop',
        ]);
        echo "<br>";
        echo $service->username.' love '.$service->password;
    }
}
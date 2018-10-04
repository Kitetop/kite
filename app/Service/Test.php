<?php
/**
 * @author Kitetop <1363215999@qq.com>
 * @version Release: 0.1
 * Date: 2018/10/10
 */

namespace App\Service;


use Kite\Service\Service;

class Test extends Service
{
    protected function execute()
    {
        echo 'This is Test execute function';
        return $this;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: xiaoxingping
 * Date: 2017/10/16
 * Time: 15:40
 */

namespace xingxingxx;


class GetOrder
{
    public function getOrder()
    {
        return 'Hello, The order number is ' . rand(1000000000, 9999999999999);
    }
}
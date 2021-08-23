<?php

namespace Aliexpress\Object\Order;

use Aliexpress\Object\Order\MoneyStr;

/**
 * 商品信息
 * @author auto create
 */
class AeopTpOrderProductInfoDtoInfo
{

    /**
     * 商品ID
     **/
    public $product_id;

    /**
     * 商品名称
     **/
    public $product_name;

    /**
     * 商品数量
     **/
    public $quantity;

    /**
     * 商品SKU
     **/
    public $sku;

    /**
     * 商品单价
     * @var MoneyStr
     **/
    public $unit_price;
}
# aliexpress-sdk

## Features
    · 通过此API，可以快速获取 PHP Object
## Composer
```
composer require thinksvip/aliexpress-sdk:v0.0.1-beta1
```
# Quick Example

## Make an API request
```php
<?php


use Aliexpress\AliexpressClient;
use Aliexpress\API\Request\Order\AeopTpSingleOrderQuery;
use Aliexpress\API\Request\Order\AliexpressTradeNewRedefiningFindorderbyidRequest;

    // 获取授权信息
    $api = new AliexpressClient('appKey','$secretKey','proxy','proxyPort');

    // 组装请求订单详情数据
    $req = new AliexpressTradeNewRedefiningFindorderbyidRequest();
    $param1 = new AeopTpSingleOrderQuery();
    $param1->order_id = 'xxxxxxxxxxxxx';
    $req->setParam1(json_encode($param1));
    $resp = $c->execute($req, 'accessToken');

    return $req->response($resp);

```
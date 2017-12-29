<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2017/12/29
 * Time: 18:16
 */
$redis = new Redis();
$redis->connect("127.0.0.1",6379);

//クリア
//$redis->delete('key');

//値のセット
$redis->set('key', 'value');

//値の取得
echo $value = $redis->get('key').PHP_EOL;


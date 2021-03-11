<?php

declare(strict_types=1);

$redis = new RedisArray(["127.0.0.1:6379", "127.0.0.1:6380", "127.0.0.1:6381"], [
    'lazy_connect' => true,
    'consistent' => true,
]);

$redis->set('phpredis-key1', 'value1');
$redis->set('phpredis-key2', 'value2');
$redis->set('phpredis-key3', 'value3');

//$redis->del('phpredis-key1', 'phpredis-key2', 'phpredis-key3');

//echo $redis->get('phpredis-key1'). PHP_EOL;

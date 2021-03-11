<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$options = array(
    'cluster' => static function($options) {
        $distributor = new Predis\Cluster\Distributor\KetamaRing();
        return new Predis\Connection\Aggregate\PredisCluster(new Predis\Cluster\PredisStrategy($distributor));
    },
);

$client = new Predis\Client(['tcp://127.0.0.1:6379', 'tcp://127.0.0.1:6380', '127.0.0.1:6381'], $options);
//$client->set('key1', 'value1');
//$client->set('key2', 'value2');
//$client->set('key3', 'value3');
$client->del(['key1', 'key2', 'key3']);

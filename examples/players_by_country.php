<?php

use Flowtt\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$players = $api->getPlayersByCountry("BR");

print_r($players);

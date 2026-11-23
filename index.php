<?php

require __DIR__ . '/vendor/autoload.php';

use App\Club;

$club = new Club('Real Madrid', 'La Liga');

$club->addPlayer('Mbappe', 'Left Wing');

echo '<pre>';
var_dump($club);
echo '</pre>';

echo 'dame1';

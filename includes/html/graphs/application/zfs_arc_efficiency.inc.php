<?php

$name = 'zfs';
$unit_text = 'percent';
$colours = 'psychedelic';
$dostack = 0;
$printtotal = 0;
$addarea = 1;
$transparency = 15;

$rrd_filename = Rrd::name($device['hostname'], ['app', $name, $app->app_id]);

$rrd_list = [
    [
        'filename' => $rrd_filename,
        'descr' => 'Cache Hit',
        'ds' => 'cache_hits_per',
    ],
    [
        'filename' => $rrd_filename,
        'descr' => 'Cache Miss',
        'ds' => 'cache_miss_per',
    ],
    [
        'filename' => $rrd_filename,
        'descr' => 'Actual Hit',
        'ds' => 'actual_hit_per',
    ],
    [
        'filename' => $rrd_filename,
        'descr' => 'Data Demand',
        'ds' => 'data_demand_per',
    ],
];

require 'includes/html/graphs/generic_multi_line.inc.php';

<?php

#Reference - stats_dens_normal : https://www.php.net/manual/en/function.stats-dens-normal.php
#Reference - stats_cdf_normal : https://www.php.net/manual/en/function.stats-cdf-normal.php
$avgWS = 0.02916278546;

echo "\nOuptut from stats_dens_normal:";
var_dump(stats_dens_normal($avgWS, 0, 1));

echo "\nOuput from stats_cdf_normal:";
var_dump(stats_cdf_normal($avgWS, 0, 1, 1));

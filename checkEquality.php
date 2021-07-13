<?php
$sum = 1.001;
define('SUM_CONST',1.0);

if(strval($sum) != strval(SUM_CONST)) {
	echo "non equeal";
} else {
	echo "equal";
}


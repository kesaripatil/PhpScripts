<?php

$parent = array('name' => 'kesari', 'surname' => 'patil');
$child = array('surname');
var_dump(array_diff_key($parent, array_flip($child)));


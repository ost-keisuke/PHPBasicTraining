<?php

$a = [0 => [0 => 'AA', 1 => 'AB', 2 => 'BA', 3 => 'BB'],
 1 => [0 => 'CA', 1 => 'CB', 2 => 'DA', 3 => 'DB'],
 2 => [0 => 'EA', 1 => 'EB', 2 => 'FA', 3 => 'FB']];
echo "<pre>";
var_dump ($a);
echo "</pre><br>";

foreach ( $a as $key1 => $val1 ){
    echo "<br>";
    foreach( $val1 as $key2 => $val2)
    echo $key1. " ". $key2. " ". $val2. "<br>";
}


 ?>

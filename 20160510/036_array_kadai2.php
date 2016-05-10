<?php
$a = array( 0 => "一郎", 1 =>"次郎", 2 => "三郎", 3 => "四郎", 4 => "五郎");
foreach ($a as $key => $value){
    echo $value. "<br>";
}
echo "<br>";
$a[5] = '研修';
//echo "<pre>";
//var_dump($a);
//echo "</pre>";

foreach ($a as $key => $value){
    echo $key. " ". $value. "<br>";
}
 ?>

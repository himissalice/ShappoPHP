<?php
$p = array(1=>0,0,0,0,0,0);    // 1=>0,2=>0...
for ($i=0; $i<100; $i++){
    $point = rand(1,6);
    $p[$point]++;
}

foreach ($p as $k => $v){
    echo "{$k}點出現{$v}次<br>";
}
<?php
     $poker = range(0, 51);
     shuffle($poker);
     foreach($poker as $k => $v){
         echo "{$k} : {$v}<br>";
     }

     echo '<hr/>';

     //發牌
     $players = array(array(),array(),array(),array());
     foreach ($poker as $k => $v){
         $players[$k%4][(int)($k/4)] = $v;
     }
?>

     //攤牌

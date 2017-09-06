<?php
     // 1. call array function
     $a = array(0,1,2,3,4,5);
     echo count($a);

     echo '<hr/>';

     // 2.
     $b[0] = 12;
     echo gettype($b) . ':' . count($b);

     echo '<hr/>';

     //3.
     $c[] = 12;
     $c[] = 12.123;
     echo gettype($c) . ':' . count($c);

     echo '<hr/>';

     //4.
     $d['name'] = 'Shappo';
     $d['gender'] = true;
     $d['age'] = 28;
     echo gettype($d) . ':' . count($d);

     //以上皆可混合使用

     echo '<hr/>';

     $ary = array(1,2);
     $ary[] = '123'; // 1,2,123
     $ary[7] = 12.3; // 0=>1,1=>2,2=>123,7=>12.3
     $ary['name'] = 'Shappo'; // 0=>1,1=>2,2=>123,7=>12.3, 'name'=>Shappo
     var_dump($ary);
     //var_dump只要是變數都可以使用，通常用來除錯。

     echo '<hr/>';
     for ($i=0; $i<count($a); $i++){
         echo "{$a[$i]}<br>";
     }

     echo '<hr/>';

     foreach ($ary as $value){
         echo "{$value}<br>";
     }

     echo '<hr/>';

     foreach ($ary as $key => $value){
     echo "{$key} --> {$value}<br>";
     }


























<?php
     function heyShappo($count, $name = 'Shappo'){
         for ($i=0; $i<$count; $i++){
         echo "hey, {$name}<br>";
         }
     }

     function fx($x){
         return 2 * $x + 1;
     }

     function test(){
         for ($i=0; $i<func_num_args(); $i++){
             echo func_get_arg($i) . '<br>';
         }
     }

     function test2(){
         $args = func_get_args();
         foreach ($args as $v){
             echo "{$v}<br>";
         }
     }

     test(1,2,3,4,'Shappo','RRR',true);

     heyShappo(8);
     $v = fx(3);
     echo $v;
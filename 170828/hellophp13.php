<?php
//
//     $height = 167;
//     echo "Height = {$height}cm";
//不留空格可以使用大括號


      function pshappo(){
          echo 'Shappo<br>';
      }
      function pline(){
          echo '<hr>';
      }


      $i = 0;
      for (pshappo() ; $i<10 ; pline()){
          echo "{$i}<br/>";
          $i++;
      }

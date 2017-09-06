<?php
     $dir = opendir(".") or exit('Server GG');  // . =>代表本路徑 ; / =>代表根路徑
     while($cont = readdir($dir)){
         echo "{$cont}<br>";
     }
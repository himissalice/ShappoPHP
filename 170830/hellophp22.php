<?php
     echo "OK";
     if(!isset($_REQUEST['account']))
         header( "Location: hellophp19.php?error=RRR");
         //header之前不能有任何的輸出（output)，包括空白也都不行。

     $account = $_REQUEST['account'];
     echo $account;
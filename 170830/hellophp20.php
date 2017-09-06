<?php
     if (isset ($_REQUEST['account'])){
         $account = $_REQUEST['account'];
         $passwd = $_REQUEST['passwd'];
         echo"{$account} : {$passwd}<br>";

         $hobby = $_REQUEST['hobby'];
         foreach ($hobby as $k => $v){
             echo "{$k} : {$v}<br>";
         }
     }
     //echo $_POST['account'];
     //echo $_REQUEST['account']; //=>get、opst都接收
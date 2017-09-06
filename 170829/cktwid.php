<?php
     function preCheck($id){
         $ret = false;
         if (strnlen($id) ==10){
             if()
         }else{
             //XX
         }

         return $ret;
     }


     if (isset($_GET['twid'])){
         $twid = $_GET['twid'];
         if (preCheck($twid)){

         }else{
             //xxxx
         }
     }





?>

//1. 長度＝＝１０
//2. 第一碼＝> A-Z
//3. 第二碼＝> 1、2
//4. 後八碼＝> 0~9
//5. 正規表示法 ^[A~Z][12][0~9]{8}$

<form>
    <input name="twid" />
    <input type="" type="submit" value="check" />
</form>
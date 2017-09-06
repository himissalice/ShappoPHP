<?php

//JSON => 陣列 ＝> 不是PHP的陣列喔

$a = array(1,2,3,4,5);
echo json_encode($a);
//echo '<hr>';

$b = array(1,'name' => 'Shappo',3, 'stage' => 4,5); //Object
//echo json_encode($b);
//echo '<hr>';

class Member {
    var $name, $id;
}

class MyCart {
    var $list;
    var $member;
}

$m1 = new Member(); $m1->id = '001'; $m1->name = 'Chibi';
$cart1 = new Mycart(); $cart1->member = $m1;
$cart1->list = array('p001'=>12, 'p004'=>3, 'p008'=>13);

$m2 = new Member(); $m2->id = '002'; $m2->name = 'Shappo';
$cart2 = new Mycart(); $cart2->member = $m2;
$cart2->list = array('p005'=>13, 'p006'=>4, 'p007'=>14);

$m3 = new Member(); $m3->id = '003'; $m3->name = 'Easen';
$cart3 = new Mycart(); $cart3->member = $m3;
$cart3->list = array('p011'=>15, 'p024'=>6, 'p028'=>17);

$c = array($cart1, $cart2, $cart3);

//echo json_encode($c);
//echo '<hr>';


























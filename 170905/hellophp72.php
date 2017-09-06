<?php
$json= file_get_contents('http://localhost/hellophp69.php');
$root = json_decode($json);

var_dump($root);

echo '<hr>';
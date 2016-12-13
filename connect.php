<?php

$user ='raz';
$pass= 'cloud1q2w3e4r';
$db = 'scams';

$db = new mysqli('localhost',$user,$pass,$db)or die('I cant connect'.mysqli_connect_error());

echo"hello world";

?>

<?php

require_once('connect.php');

echo date('h:i:s');

$usersName = $_POST['username'];
$streetAddress = $_POST['streetaddress'];
$cityAddress = $_POST['cityaddress'];

echo $usersName . "</br>";
echo $streetAddress . "</br>";
echo $cityAddress . "</br>";

 ?>

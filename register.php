<?php

require_once('dbConnection.php');

$username = ($_POST['Name']);
$passw = ($_POST['password']);
$birthdate = ($_POST['BirthDate']);
$phone = ($_POST['Phone']);
$address = ($_POST['Address']);
$loginNum = 0;

$sql = "INSERT INTO user (username, password, birthdate, phone, address, loginNum)
VALUES ($username, $passw, $birthdate, $phone, $address, $loginNum)";

$conn->query($sql);
 ?>

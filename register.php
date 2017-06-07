<?php

require_once('api.php');

$username = ($_POST['Name']);
$passw = ($_POST['password']);
$birthdate = ($_POST['BirthDate']);
$phone = ($_POST['Phone']);
$address = ($_POST['Address']);

$sql = "INSERT INTO user (username, password, birthdate, phone, address)
VALUES ($username, $passw, $birthdate, $phone, $address)";

$conn->query($sql);
 ?>

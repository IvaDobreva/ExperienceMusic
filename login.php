<?php

require_once('dbConnection.php');

$username = ($_POST['Name']);
$passw = ($_POST['Password']);

$sql = "SELECT * FROM user WHERE (username=$username AND password=$password)"
//$loginNum = 0;

?>

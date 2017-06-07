<?php

if (isset($_POST['go'])) {
  $servername = "127.0.0.1";
  $username = "iva";
  $password = "2048";
  $dbname = "users";

  // Create connection
  $conn =  mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
  //SQL vars
  $usern = NULL;
  $passw = NULL;
  $birthdate = NULL;
  $phone = NULL;
  $address = NULL;
  $usern = $_POST["Name"];
  $passw = $_REQUEST["password"];
  $birthdate = ($_REQUEST['BirthDate']);
  $phone = ($_REQUEST["Phone"]);
  $address = ($_REQUEST["Address"]);

  $sql = "INSERT INTO user (username, password, birthdate, phone, address, loginNum)
  VALUES ('$usern', '$passw', '$birthdate', '$phone', '$address', 0);";


  if ($conn->query($sql) === TRUE) {
    header('Location: loginForm.php');
  } else {
    header('Location: newUser.php');
  }

  $conn->close();
}
/*
if (isset($_REQUEST['Name'])) { $usern = $_REQUEST['Name']; }
if (isset($_REQUEST['password'])){$passw = ($_REQUEST['password']);}
if (isset($_REQUEST['BirthDate'])) {$birthdate = ($_REQUEST['BirthDate']);}
if (isset($_REQUEST['Phone'])) {$phone = ($_REQUEST['Phone']);}
if (isset($_REQUEST['Address'])) {$address = ($_REQUEST['Address']);}
*/
 ?>

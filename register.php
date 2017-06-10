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

  //SQL vars
  /*
  $usern = NULL;
  $passw = NULL;
  $birthdate = NULL;
  $phone = NULL;
  $address = NULL; */
  $usern = $_POST["Name"];
  $passw = $_REQUEST["password"];
  $birthdate = $_REQUEST['BirthDate'];
  $phone = $_REQUEST["Phone"];
  $address = $_REQUEST["Address"];
  $email = $_REQUEST["Email"];

  //Inserts new id and it's values without check for existing user 
  $sql = "INSERT INTO user (username, password, birthdate, phone, address, loginNum, email)
  VALUES ('$usern', '$passw', '$birthdate', '$phone', '$address', 0, '$email');";


  if ($conn->query($sql) === TRUE) {
    header('Location: loginForm.php');
  } else {
    header('Location: newUser.php');
  }

  $conn->close();
}

?>

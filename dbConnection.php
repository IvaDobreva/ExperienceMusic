<?php


//Register user
function Register() {

  $username = ($_POST['Name']);
  $passw = ($_POST['password']);
  $birthdate = ($_POST['BirthDate']);
  $phone = ($_POST['Phone']);
  $address = ($_POST['Address']);
  $loginNum = 0;

  $query = "INSERT INTO user (username, password, birthdate, phone, address, loginNum)
  VALUES ($username, $passw, $birthdate, $phone, $address, $loginNum)";

  $data = mysql_query($query) or die(mysql_error());

  if($data) {
    echo "reg completed";
  }


}

 ?>

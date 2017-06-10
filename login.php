<?php

if (isset($_POST['go'])) {
  //connect to the DB
  $servername = "127.0.0.1";
  $username = "iva";
  $password = "2048";
  $dbname = "users";

  // Create connection
  $conn =  mysqli_connect($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $name = $_POST['Name'];
  $pass = $_POST['Password'];

  $sql = "SELECT * FROM user WHERE (username='$name' AND password='$pass');";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    //Get sql attributes
    $row = $result->fetch_assoc();
    $logNum = $row['loginNum'] + 1;
    $name = $row['username'];

    //Update the table with num of visited times
    $sql = "UPDATE user SET loginNum=$logNum WHERE (username='$name' AND password='$pass');";
    $conn->query($sql);

    //Send alert to the page
    $message = "Welcome, {$name}! You visited the page {$logNum} times.";

    $_SESSION['login'] = '';
    echo "<script type='text/javascript'>alert('$message');
          window.location.href='index.php';</script>";
  } else {
    //If there is no match send message for wrong name or pass
    $message = "Wrong username or password";
    echo "<script type='text/>javascript'>alert('$message');</script>";
  }
}

?>

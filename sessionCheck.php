<?php
if (session_status() == PHP_SESSION_ACTIVE) {

} else {
  $message = "Please, login in your account first!";
  echo "<script type='text/javascript'>alert('$message');
    window.location.href='loginForm.php';</script>";
}
?>

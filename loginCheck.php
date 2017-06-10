<?php
function popUp() {
    $message = "Please, login in your account first!";
    echo "<script type='text/javascript'>alert('$message');
      window.location.href='loginForm.php';</script>";
  }
?>

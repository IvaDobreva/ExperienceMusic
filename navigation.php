<?php
session_start();
?>
<link rel="stylesheet" href="StyleSheets/navbar.css">

<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> Experience music</a>
    </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="contacts.php">Contacts</a></li>
        <li><a href="about.php">About</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isset($_SESSION['login'])) {
            echo "<li><a id='login-bar' href=\"logOut.php\">Logout</a></a></li>";
          } else {
            echo "<li><a id='login-bar' href=\"loginForm.php\">Login</a></a></li>";
          }
        ?>
      </ul>
  </div>
</nav>

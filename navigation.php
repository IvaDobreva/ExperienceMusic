<?php
session_start();
?>
<link rel="stylesheet" href="StyleSheets/navbar.css">

<!-- Highlighting menu tabs -->
<script type="text/javascript">
  var path = window.location.pathname;
  path = path.replace("/", "").replace(".php", "");
  
  if(document.getElementById(path)) {
      document.getElementById(path).classList.add("active");
  }
</script>

<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"> Experience music</a>
    </div>
      <ul class="nav navbar-nav navbar-left">
        <li id="index"><a href="index.php">Home</a></li>
        <li id="store"><a href="store.php">Store</a></li>
        <li id="contacts"><a href="contacts.php">Contacts</a></li>
        <li id="about"><a href="about.php">About</a></li>
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

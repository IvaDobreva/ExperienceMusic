<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="StyleSheets/newUser.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik+Mono+One|Righteous|Rajdhani" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>

    <div id="navBar">
      <script type="text/javascript">
        $('#navBar').load('navigation.php');
      </script>
    </div>

    <div class="container">
      <div class="row" id="pwd-container">
          <div class="col-md-4"></div>
          <?php include 'register.php'; ?>
          <div class="co-md-4">
              <section class="reg-form">
                <form  name="registration" method="POST" role="login" enctype=”multipart/form-data” >
                    <div class="title">Experience Music</div>
                    <input type="text" name="Name" placeholder="Username" required class="form-control input-lg"  />
                    <p id="usrError"></p>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="" />
                    <p id="passError"></p>
                    <input type="date" name="BirthDate" placeholder="BirthDate" required class="form-control input-lg"/>
                    <input type="text" name="Phone" placeholder="Phone Number 000-0000-0000" required class="form-control input-lg"/>
                    <p id="phoneError"></p>
                    <input type="text" name="Address" placeholder="Address" class="form-control input-lg"/>
                    <input type="email" name="Email" placeholder="Email addres" class="form-control input-lg"/>

                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="validate()">Register</button>
                </form>
              </section>

          </div>
      </div>
    </div>

    <!-- footer -->
    <div id="footer">
      <script type="text/javascript">
        $('#footer').load('footer.html');
      </script>
    </div>

    <script type="text/javascript" src="/scripts/formValidation.js"></script>

  </body>

</html>

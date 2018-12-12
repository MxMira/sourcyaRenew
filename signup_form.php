<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <!-- Bootstrap core CSS -->
  <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Parsley core CSS -->
  <link href="libs/parsley/parsley.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="customstyles/signin.css" rel="stylesheet">
</head>
<body class="text-center" style="background-color: azure">
    <form method="post" action="signup.php" class="form-signin" data-parsley-validate>
      <?php 
      if (!empty($_GET['msg'])) {
        if ($_GET['msg']=='mailexist') {
      ?>
          <div class="alert alert-danger">This Email already exists..</div>
      <?php
        }
      }elseif (!empty($_GET['user'])) {
      ?>
          <div class="alert alert-success">User <?php echo $_GET['user']; ?> added successfully</div>
      <?php
      } 
      ?>
      <img class="mb-4" src="imgs/cms.png" alt="" width="80" height="80">
      <h1 class="h4 mb-3 font-weight-normal">Please sign up</h1>
      <label for="inputFirstName" class="sr-only">First name</label>
      <input required type="text" id="inputFirstName" name="inputFirstName" class="form-control" placeholder="First name" autofocus>
      <label for="inputLastName" class="sr-only">Last name</label>
      <input required type="text" id="inputLastName" name="inputLastName" class="form-control" placeholder="Last name">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input required type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address">
      <label for="inputPassword" class="sr-only">Password</label>
      <input required type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password">
      <label for="inputConfirmPassword" class="sr-only">Confirm password</label>
      <input required data-parsley-equalto="#inputPassword" type="password" id="inputConfirmPassword" name="inputConfirmPassword" class="form-control" placeholder="Confirm password">
      <button class="btn btn-lg btn-success btn-block" type="submit">Sign up</button>
      <a class="btn btn-lg btn-primary btn-block" href="signin_form.php">Sign in</a>
      <p class="mt-5 mb-3 text-muted">&copy; 27/11/2018</p>
    </form>

    <!-- Script for Jquery -->
    <script src="libs/jquery/jquery.min.js"></script>
    <!-- Script for Parsley -->
    <script src="libs/parsley/parsley.min.js"></script>
</body>
</html>
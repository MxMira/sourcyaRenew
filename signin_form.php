<?php
if (isset($_GET['v'])) {
    if ($_GET['v'] == 'signout') {
        setcookie('umailSourcyaTest', NULL, time() - 3600);
        setcookie('upasswordSourcyaTest', NULL, time() - 3600);
    }
} else {
    if (!empty($_COOKIE['umailSourcyaTest'])) {
        if (!empty($_COOKIE['upasswordSourcyaTest'])) {
            session_start();
            $_SESSION['inputEmail'] = html_entity_decode($_COOKIE['umailSourcyaTest'], ENT_QUOTES, 'UTF-8');
            $_SESSION['inputPassword'] = html_entity_decode($_COOKIE['upasswordSourcyaTest'], ENT_QUOTES, 'UTF-8');
            header('location:signin.php');
        }
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="content management system">
        <meta name="author" content="mira">
        <link rel="icon" href="imgs/cms.png">

        <title>Signin Page</title>

        <!-- Bootstrap core CSS -->
        <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Parsley core CSS -->
        <link href="libs/parsley/parsley.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="customstyles/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form method="post" action="signin.php" class="form-signin" data-parsley-validate>
            <?php
            if (!empty($_GET['msg'])) {
                if ($_GET['msg'] == 'invaliduser') {
                    ?>
                    <div class="alert alert-danger">This user doesn't exist..</div>
                    <?php
                } else if ($_GET['msg'] == 'signin') {
                    ?>
                    <div class="alert alert-danger">Signin please..</div>
                    <?php
                }
            }
            ?>
            <img class="mb-4" src="imgs/cms.png" alt="" width="80" height="80">
            <h1 class="h4 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input required type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input required type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password">
            <input type="checkbox" name="remember" value="1"> Remember me
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <a class="btn btn-lg btn-success btn-block" href="signup_form.php" >Sign up</a>
            <p class="mt-5 mb-3 text-muted">&copy; 27/11/2018</p>
        </form>

        <!-- Script for Jquery -->
        <script src="libs/jquery/jquery.min.js"></script>
        <!-- Script for Parsley -->
        <script src="libs/parsley/parsley.min.js"></script>
    </body>
</html>

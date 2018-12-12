<?php
session_start();
if (isset($_SESSION['uid'])) {
    
} else {
    header("location:signin_form.php?msg=signin");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="imgs/cms.png">

        <title>Content Management System</title>

        <!-- Bootstrap core CSS -->
        <link href="customstyles/bootstrap.min.css" rel="stylesheet">
        <!-- Parsley core CSS -->
        <link href="libs/parsley/parsley.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="customstyles/dashboard.css" rel="stylesheet">
    </head>

    <body style="background-color: lavender ">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-2 mr-0" href="#"><?php echo $_SESSION['uname'] ?></a>
            <a class="btn btn-outline-light btn-sm" href="signin_form.php?v=signout" style="margin-right: 10px">Sign out</a>
        </nav>    
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <nav class="col-md-2 bg-light sidebar">
                        <div class="sidebar-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="dashboard.php">
                                        <span data-feather="home"></span>
                                        My Contents <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="allcont.php">
                                        <span data-feather="book-open"></span>
                                        All Contents
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-10" style="margin-top: 60px">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">





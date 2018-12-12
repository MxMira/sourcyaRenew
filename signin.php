<?php

$email = '';
$password = '';
$remember = '';
session_start();
if (isset($_SESSION['inputEmail']) && isset($_SESSION['inputPassword'])) {
    $email = $_SESSION['inputEmail'];
    $password = $_SESSION['inputPassword'];
}else{
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'inputPassword', FILTER_SANITIZE_STRING);
    $remember = filter_input(INPUT_POST, 'remember', FILTER_SANITIZE_NUMBER_INT);
}

require 'require/databasecon.php';

$rslt = mysqli_query($cn, "select c_id uid, concat(first_name,' ',last_name) uname, email, password from clients where email='$email' and password='$password'");
$ar = mysqli_fetch_assoc($rslt);

if ($ar) {
    $usID = $ar['uid'];
    $usName = $ar['uname'];
    $mail = $ar['email'];
    $pass = $ar['password'];
    mysqli_close($cn);
    $_SESSION['uid'] = $usID;
    $_SESSION['uname'] = $usName;

    if ($remember == 1) {
        setcookie('umailSourcyaTest', $mail, time() + 60 * 60 * 24 * 356);
        setcookie('upasswordSourcyaTest', $pass, time() + 60 * 60 * 24 * 356);
    }

    header('location:dashboard.php?def=dashboard');
} else {
    mysqli_close($cn);
    setcookie('umailSourcyaTest', NULL, time() - 3600);
    setcookie('upasswordSourcyaTest', NULL, time() - 3600);
    header('location:signin_form.php?msg=invaliduser');
}
        
        
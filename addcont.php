<?php

$title = $_POST['title'];
$desc = $_POST['desc'];
$pic = "uploads/" . $_FILES["pic"]["name"];
if (!empty($_FILES["pic"])) {
    move_uploaded_file($_FILES["pic"]["tmp_name"], $pic);
}
session_start();
$uid = $_SESSION['uid'];

require 'require/databasecon.php';

$rslt = mysqli_query($cn, "insert into posts(c_id_fk, title, description, pic) values($uid, '$title', '$desc','$pic')");
mysqli_close($cn);
header('location:dashboard.php?content=' . $title);




<?php

require 'require/databasecon.php';

$contid = $_GET['contid'];
$title = $_GET['title'];

$rslt = mysqli_query($cn, "delete from posts where cont_id = $contid");
mysqli_close($cn);
header('location:dashboard.php?title=' . $title);


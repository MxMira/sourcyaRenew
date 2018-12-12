<?php
include 'include/header.php';

require 'require/databasecon.php';

$rslt = mysqli_query($cn, "select * from posts order by cont_id desc");
while ($row = mysqli_fetch_assoc($rslt)) {
    $contid = $row['cont_id'];
    $title = $row['title'];
    $desc = $row['description'];
    $pic = $row['pic'];
    ?>

    <div class="col-md-4">
        <div class="card">
            <?php
            if ($pic == 'uploads/') {
                ?>
                <img class="card-img-top" src="imgs/noimg.png" alt="noImage"  height="50">
                <?php
            } else {
                ?>
                <img class="card-img-top" src="<?php echo $pic; ?>" alt="noImage" height="50px" style="margin:5px">
            <?php } ?> <div class="card-body">
                <u><?php echo $title; ?></u>
                <p class="card-text"><?php echo $desc; ?></p>
            </div>
        </div>
    </div>
    <?php
}
mysqli_close($cn);
?>
</div>
</div>
<?php
include 'include/footer.php';
?>


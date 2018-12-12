<div class="col-md-4">
    <h4>Add new content</h4>
    <hr>
    <form method="post" action="addcont.php" class="form-signin" enctype="multipart/form-data" data-parsley-validate>
        <?php
        if (!empty($_GET['content'])) {
            ?>
            <div class="alert alert-success">Content <?php echo $_GET['content']; ?> added successfully</div>
            <?php
        }
        if (!empty($_GET['title'])) {
            ?>
            <div class="alert alert-warning">Content <?php echo $_GET['title']; ?> deleted successfully</div>
            <?php
        }
        ?>
        <label for="title" class="sr-only">Title</label>
        <input required type="text" id="title" name="title" class="form-control" placeholder="Title" autofocus>
        <label for="desc" class="sr-only">Description</label>
        <input required type="text" style="margin-top: 5px" id="desc" name="desc" class="form-control" placeholder="Description">
        <input type="file" style="margin-top: 5px"  id="pic" name="pic">
        <button class="btn btn-sm btn-success btn-block" style="margin-top: 5px" type="submit">Add new</button>
        <button class="btn btn-sm btn-danger btn-block" type="reset">Clear</button>
    </form>
</div>


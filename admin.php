<?php
include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";
include_once "sysgam/postgen.php";

if (checkSession("username")) {
    if (getSession("username") != "hxuzzy") {
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
if (isset($_POST['submit'])) {
    $postitle = $_POST['postitle'];
    $postype = $_POST['postype'];
    $postwriter = $_POST['postwriter'];
    $postcontent = $_POST['postcontent'];

    $imglink = mt_rand(time(), time()) . "_" . $_FILES["file"]["name"] .  mt_rand(time(), time());
    move_uploaded_file($_FILES['file']['tmp_name'], 'assets/uploads/' . $imglink);
    $file = $_FILES['file'];
    echo "<pre>" . print_r($file, true) . "</pre>";
}

?>
<div class="container my-3">
    <div class="row">
        <?php
        include_once "views/sideber.php";
        ?>
        <section class="col-md-9">
            <form method="post" action="admin.php" enctype="multipart/form-data" class="mb-5 border p-5 " style="background-color:#ddd;">
                <h3 class="english text-center">Post Insert Form</h3>
                <div class="form-group">
                    <label for="postitle" class="english">Post Title</label>
                    <input type="text" class="form-control english" id="postitle" name="postitle">
                </div>

                <div class=" form-group">
                    <label for="postype" class="english">Post Type</label>
                    <select class="form-control" id="postype" name="postype">
                        <option value="1">Free Post</option>
                        <option value="2">Premium Post</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="postwriter" class="english">Post Writer</label>
                    <input type="text" class="form-control english" id="postwriter" name="postwriter">
                </div>

                <div class="form-group" style="display:flex; width:100%;">
                    <input type="file" name="file" class="form-control" id="file" multiple>
                    <label class="input-group-text" for="file">Upload</label>
                </div>

                <div class="form-group">
                    <label for="postcontent" class="english">Post Type</label>
                    <textarea type="text" class="form-control" id="postcontent" rows="7" name="postcontent"></textarea>
                </div>
                <div class="postbutton" style="width:fit-content; float:right;">
                    <button class="btn btn-outline-primary">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Post</button>
                </div>
            </form>

        </section>
    </div>

</div>
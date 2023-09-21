<?php
include_once "views/top.php";
include_once "views/header.php";

$pid = "";
if (isset($_GET["pid"])) {
    $pid = $_GET["pid"];
    $ppid = $pid;
    $result = getSinglepost($pid);
    $posts = [""];
    foreach ($result as $item) {
        $posts["title"] = $item["title"];
        $posts["writer"] = $item["writer"];
        $posts["imglink"] = $item["imglink"];
        $posts["content"] = $item["content"];
    }
}

if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    $imgname = "";

    if ($_FILES["file"]["name"] != null) {
        $imgname = mt_rand(time(), time()) . "_" . $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"], "assets/uploads/" . $imgname);
    } else {
        $imgname = $_POST["oldimg"];
    }
    $title = $_POST["postitle"];
    $postype = $_POST["postype"];
    $postwriter = $_POST["postwriter"];
    $postcontent = $_POST["postcontent"];
    $imglink =  $imgname;
    $pid = $_GET["pid"];
    $subject = $_POST['subject'];

    updatePost($title, $postype, $postwriter, $postcontent, $imglink, $pid, $subject);
}
?>
<div class="container my-3">
    <div class="row">
        <?php
        include_once "views/sideber.php";
        ?>
        <section class="col-md-9">
            <form method="post" action="" enctype="multipart/form-data" class="mb-5 border p-5 " style="background-color:#ddd;">
                <h3 class="english text-center">Post Edit Here</h3>
                <div class="form-group">
                    <label for="postitle" class="english">Post Title</label>
                    <input type="text" class="form-control english" id="postitle" name="postitle" value="<?php echo $posts["title"]; ?>">
                </div>

                <div class=" form-group">
                    <label for="postype" class="english">Post Type</label>
                    <select class="form-control" id="postype" name="postype">
                        <option value="1">Free Post</option>
                        <option value="2">Premium Post</option>
                    </select>
                </div>

                <div class=" form-group">
                    <label for="subject" class="english">subject</label>
                    <select class="form-control" id="subject" name="subject">
                        <?php
                        $subjects = getAllsubject();
                        foreach ($subjects as $subject) {
                            echo "<option value='" . $subject["id"] . "'>" . $subject["name"] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="postwriter" class="english">Post Writer</label>
                    <input type="text" class="form-control english" id="postwriter" name="postwriter" value="<?php echo $posts["writer"]; ?>">
                </div>

                <div class="form-group" style="display:flex; width:100%;">
                    <input type="file" name="file" class="form-control" id="file" multiple>
                    <label class="input-group-text" for="file">Upload</label>
                    <input type="hidden" name="oldimg" value="<?php echo $posts["imglink"]; ?>">
                </div>

                <div class="form-group">
                    <label for="postcontent" class="english">Post Content</label>
                    <textarea type="text" class="form-control" id="postcontent" rows="7" name="postcontent"><?php echo $posts["content"]; ?></textarea>
                </div>
                <div class="postbutton" style="width:fit-content; float:right;">
                    <button class="btn btn-outline-primary">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </div>
                <img src="assets/uploads/<?php echo $posts["imglink"]; ?>" alt="" class="img-fluid">
            </form>

        </section>
    </div>

</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
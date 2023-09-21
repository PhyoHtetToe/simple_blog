<?php
include_once "views/top.php";
include_once "views/header.php";

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

    $bol = insertPost($postitle, $postype, $postwriter, $postcontent, $imglink, $subject);

    if ($bol) {
        echo "<div class = 'container my-5'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
   Post Successfully Uploaded  
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div></div>";
    } else {
        echo "<div class = 'container my-5'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
  Post Upload Fail
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div></div>";
    }
}

?>
<div class="container my-3">
    <div class="row">
        <?php
        include_once "views/sideber.php";
        ?>

        <section class="col-md-9">
            <?php
            $result = getAllpost(2);
            foreach ($result as $post) {
                echo
                '<div class="card mb-3">
                    <div class ="card-block">
                        <h5>' . $post["title"] . '</h5>
                        <p>' . substr($post["content"], 0, 20) . '</p>
                        <a href="postedit.php?pid=' . $post["id"] . '" class=" btn btn-sm  m-2" style = "float:right; background-color:blue; color:white;">Edit</a>
                    </div>
                </div>';
            }
            ?>
        </section>
    </div>

</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
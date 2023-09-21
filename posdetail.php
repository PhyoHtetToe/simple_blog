<?php
include_once "views/top.php";
include_once "views/header.php";
$pid = "";
if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
    echo $pid;
}
?>

<div class="container my-3">
    <div class="card col-md-8 offset-md-2">

        <?php
        $result = getSinglepost($pid);
        foreach ($result as $data) {
            echo ' <div class="card-header">' . $data["title"] . '<span style = "float:right;">' . $data["created_at"] . '</span></div>';
            echo ' <div class="card-block">' . $data["content"] . '</div>';
            echo '<img src="assets/uploads/' . $data["imglink"] . '" alt="" class = "img-fluid">';
            echo '<div class="card-footer">' . $data["writer"] . '</div>';
        }
        ?>

    </div>
    <?php
    include_once "views/footer.php";
    include_once "views/base.php";
    ?>
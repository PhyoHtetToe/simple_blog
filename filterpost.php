<?php
include_once "views/top.php";

?>
<div class="container my-3">
    <div class="row">
        <?php
        include_once "views/sideber.php";
        ?>
        <section class="col-md-9">
            <div class="row">
                <?php
                if (checkSession("username")) {
                    $result = getfilPos($_GET["sid"], 2);
                } else {
                    $result = getfilPos($_GET["sid"], 1);
                }
                foreach ($result as $post) {
                    $pid = $post["id"];
                    echo '<div class="col-md-6 mb-3">
                    <div class="card-block border p-3">
                        <h1>' . $post["title"] . '</h1>
                        <p>' . substr($post["content"], 0, 50) . '</p>
                        <a href="posdetail.php?pid=' . $pid . '" class="btn btn-info btn-sm">Details</a>
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
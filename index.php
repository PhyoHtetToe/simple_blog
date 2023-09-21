<?php
include_once "views/top.php";
include_once "views/header.php";

$start = 0;
if (isset($_GET['start'])) {
    $start = $_GET['start'];
} else {
}
$rows = getPostCount();
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
                    $result = getAllpost(2, $start);
                } else {
                    $result = getAllpost(1, $start);
                }
                foreach ($result as $post) {
                    $pid = $post["id"];
                    echo '<div class="col-md-6 mb-3">
                    <div class="card-block border p-3">
                        <h1>' . $post["title"] . '</h1>
                        <p>' . substr($post["content"], 0, 30) . '</p>
                        <a href="posdetail.php?pid=' . $pid . '" class="btn btn-info btn-sm">Details</a>
                    </div>
                </div>';
                }
                ?>


        </section>
    </div>

</div>
<div class="container">
    <div class="col-md-4 offset-md-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                $t = 0;
                for ($i = 0; $i < $rows; $i += 10) {
                    $t++;
                    echo '<li class="page-item"><a class="page-link" href="index.php?start=' . $i . '">' . $t . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
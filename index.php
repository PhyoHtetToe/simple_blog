<?php
include_once "views/top.php";
include_once "views/nav.php";

include_once "views/header.php";
?>
<div class="container my-3">
    <div class="row">
        <?php
        include_once "views/sideber.php";
        ?>
        <section class="col-md-9">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card-block">
                        <h1>Post Title Goes Here</h1>
                        <p>List groups are a flexible and powerful component for
                            displaying a series of content.
                            Modify and extend them to support just about
                            any content within.The most basic list group is an unordered
                            list with list items and the proper classes.
                            Build upon it with the options that follow,
                            or with your own CSS as needed.</p>
                        <a href="#" class="btn btn-info btn-sm">Details</a>
                    </div>
                </div>

        </section>
    </div>

</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
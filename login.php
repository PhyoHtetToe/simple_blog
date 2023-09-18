<?php
include_once "views/top.php";
include_once "views/nav.php";
if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo $email . "-" . $password;
}
?>
<div class="container my-3 table-bordered-2">
    <div class="col-md-8 offset-md-2 table-bordered-2 p-5">
        <h1 class="text-danger english mb-3 text-center">Login To See Special Posts!</h1>
        <form action="login.php" class="form" method="post">
            <div class="from-group">
                <label for="email" class="english">Email</label>
                <input type="email" class="form-control english rounded-0" name="email" id="email" placeholder="Put Your Email Here">
            </div>
            <div class="from-group">
                <label for="password" class="english">Password</label>
                <input type="password" class="form-control english rounded-0" name="password" id="password" placeholder="Put Your Password Here">
            </div>
            <p></p>
            <div class="row no-gutters justify-content-end">
                <button class="btn btn-info" style="width:fit-content" name="submit" type="submit" value="submit">Login</button>
            </div>

        </form>
    </div>
</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
<?php
include_once "views/top.php";
include_once "views/nav.php";
require_once  "sysgam/membership.php";

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $ret = registerUser($username, $email, $password);
    $message = "";
    switch ($ret) {
        case "Register Success":
            $message = "Register Success";
            setSession("username", $username);
            setSession("email", $email);
            if ($username == "hxuzzy" && $email == "hxuzzy@gmail.com") {
                header("Location:admin.php");
            } else {
                header("Location:index.php");
            }
            break;
        case "Email is already used":
            $message = "Email is already used";
            break;
        case "Register Fail":
            $message = "Register Fail";
            break;
        case "Fail":
            $message = "Authentication Fail";
            break;
        default:;
            break;
    }
    echo "<div class = 'container my-5'><div class='alert alert-warning alert-dismissible fade show' role='alert'>
  " . $message . "
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div></div>";
}

?>
<div class="container my-3 table-bordered-2">
    <div class="col-md-8 offset-md-2 table-bordered-2 p-5">
        <h1 class="text-danger english mb-3 text-center">Register To Be A Member!</h1>
        <form action="register.php" class="form" method="post">
            <div class="from-group">
                <label for="username" class="english">Username</label>
                <input type="text" class="form-control english rounded-0" name="username" id="uername" placeholder="Put Your UserName Here">
            </div>
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
                <button class="btn btn-info" style="color:aliceblue;width:fit-content" name="submit" type="submit" value="submit">Register</button>
            </div>

        </form>
    </div>
</div>
<?php
include_once "views/footer.php";
include_once "views/base.php";
?>
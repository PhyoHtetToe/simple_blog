<div class="container-fluid bg-primary">
    <nav class="container navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white english" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-left:auto
                ;" id="gg">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white english" aria-disabled="true">Politic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white english" aria-disabled="true">Wars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white english" aria-disabled="true">IT NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white english" href="#" role="button" id="MyDD" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            if (checkSession("username")) {
                                echo getSession("username");
                            } else {
                                echo "member";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (checkSession("username")) {
                                echo  "<li><a class='dropdown-item' href='logout.php'>Logout</a></li>";
                            } else {
                                echo "<li><a class='dropdown-item' href='register.php'>Register</a></li>
                            <li><a class='dropdown-item' href='login.php'>Login</a></li>
                            <li>
                                <hr class='dropdown-divider'>
                            </li>";
                            }
                            ?>


                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
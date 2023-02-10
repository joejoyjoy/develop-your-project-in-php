<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: ../view/admin.php');
    die();
}

include('../view/head.php'); ?>

<body class="vh-100 position-relative">
    <section class="h-100 vw-100 position-absolute top-50 start-50 translate-middle" style="background-color: #fff;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black" style="background-color: #f1f2f6;">
                        <div class="row g-10">
                            <div class="col-lg-6">
                                <div class="card-body p-md-8 mx-md-4">
                                    <div class="mt-4 text-center">
                                        <a href="login.php"><img src="../assets/images/vpn-logo.png" style="width: 15%; cursor: pointer;" alt="Hopper VPN logo"></a>
                                        <br><br>
                                        <h4 class="mt-1 mb-5 pb-1" style="color: #2D324E;">Hopper VPN Server</h4>
                                    </div>
                                    <form action="validate.php" method="POST" enctype="multipart/form-data" class="box">
                                        <!-- EMAIL -->
                                        <div class="form-outline m-0">
                                            <input type="email" name="email" class="form-control" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" aria-describedby="emailHelp" required style="border: 1px solid #2D324E;"><br><br>
                                        </div>
                                        <!-- END -->
                                        <!-- PASSWORD -->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="pswd" class="form-control" minlength="1" maxlength="21" required placeholder="Password" style="border: 1px solid #2D324E;">
                                        </div>
                                        <!-- END -->
                                        <!-- LOG IN -->
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-primary" type="submit">LOG IN</button><br><br>
                                            <?php
                                            if (isset($_GET['err']))
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            <strong>Incorrect credentials! Please try again.</strong>
                                                            <a href="./login.php" type="button" class="btn-close" aria-label="Close"></a>
                                                        </div>';
                                            ?>
                                            <?php
                                            if (isset($_GET['message']))
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <strong>User created successfully!</strong>
                                                            <a href="./login.php" type="button" class="btn-close" aria-label="Close"></a>
                                                        </div>';
                                            ?><br>
                                            <!-- <a class="text-muted" href="./login.php">Forgot password?</a><br> -->
                                            <div style="display: flex; justify-content: space-between;">
                                                <p class="p-2" style="color: #2D324E;">johnsmith@gmail.com<br>Hola123!<br>ADMIN</p>
                                                <p class="p-2" style="color: #2D324E;">robertsmith@gmail.com<br>Hola123@<br>CLIENT</p>
                                            </div>

                                        </div>
                                        <!-- END -->
                                        <!-- CREATE ACCOUNT -->
                                        <div class="d-flex align-items-center justify-content-center pb-5">
                                            <p class="mb-0 me-2" style="color: #2D324E;">Don't have an account?</p>
                                            <a href="../view/createUser.php" class="btn btn-outline-danger">Register</a>
                                        </div>
                                        <!-- END -->
                                    </form>
                                </div>
                            </div>
                            <!-- RIGHT PART -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 back">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4"></h4>
                                    <p class="small mb-0"></p>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_GET['event'])) {
        $var = $_GET['event'] ?>
        <!-- Toast -->
        <div class="toast-container bottom-0 start-50 translate-middle-x p-3">
            <div class="liveToast toast" role="alert" aria-live="assertive" aria-atomic="true">

                <div class="d-flex">
                    <div class="p-1">
                        <svg class="bd-placeholder-img rounded me-2" width="30" height="30" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#FF7538"></rect>
                        </svg>
                    </div>
                    <div class="p-1">
                        <h4 class="p-0 m-0"><strong class="me-auto"><?php echo $var; ?></strong></h4>
                    </div>

                    <div class="ms-auto p-1">
                        <span class="p-1">
                            <small>Just now</small>
                        </span>
                        <span class="p-1">
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </span>
                    </div>
                </div>

                <div class="toast-body">
                    <h6>Given task successfully accomplished!</h6>
                </div>
            </div>
        </div>
    <?php } ?>
    <script>
        if (typeof window.history.pushState == 'function') {
            window.history.pushState({}, "Hide", "login.php");
        }
    </script>
</body>

</html>
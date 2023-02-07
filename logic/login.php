<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: index.php');
    die();
}

include('bootstrap.php'); ?>

<body>
    <section class="h-100 gradient-form" style="background-color: #f1f2f6;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black">
                        <div class="row g-10">
                            <div class="col-lg-6">
                                <div class="card-body p-md-8 mx-md-4">
                                    <div class="text-center">
                                        <a href="login.php"><img src="../assets/vpn-logo.png" style="width: 15%; cursor: pointer;"
                                            alt="Hopper VPN logo"></a>
                                    <br><br>
                                        <h4 class="mt-1 mb-5 pb-1">Hopper VPN Server</h4>
                                    </div>
                                    <form action="validate.php" method="post" enctype="multipart/form-data" class="box">
                                        <!-- EMAIL -->
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email address"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                aria-describedby="emailHelp" required><br><br>
                                        </div>
                                        <!-- END -->
                                        <!-- PASSWORD -->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="pswd" class="form-control" minlength="1"
                                                maxlength="21" required placeholder="Password">
                                        </div>
                                        <!-- END -->
                                        <!-- LOG IN -->
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-primary" type="submit">LOG IN</button><br><br>
                                            <?php
                                            if (isset($_GET['err']))
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            <strong>Incorrect credentials!</strong> Please try again.
                                                            <a href="login.php" type="button" class="btn-close" aria-label="Close"></a>
                                                        </div>';
                                            ?>
                    
                    <?php
                                            if (isset($_GET['message']))
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <strong>User created successfully.</strong> Please login.
                                                            <a href="login.php" type="button" class="btn-close" aria-label="Close"></a>
                                                        </div>';
                                            ?>
                    <br><br>
                                            <a class="text-muted" href="">Forgot password?</a>
                                        </div>
                                        <!-- END -->
                                        <!-- CREATE ACCOUNT -->
                                        <div class="d-flex align-items-center justify-content-center pb-5">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="../logic/createUser.php"><button type="button" class="btn btn-outline-danger">Create new</button></a>
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

</body>


                                            
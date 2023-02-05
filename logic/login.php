<?php
session_start();
if (isset($_SESSION['logged-in'])) {
    header('Location: panel.php');
    exit();
} ?>
<?php include('bootstrap.php'); ?>


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
                                        <img src="../assets/vpn-logo.png" style="width: 15%;"
                                            alt="Hopper VPN logo"><br><br>
                                        <h4 class="mt-1 mb-5 pb-1">Hopper VPN Server</h4>
                                    </div>
                                    <form action="validate.php" method="post" enctype="multipart/form-data" class="box">
                                        <!-- EMAIL -->
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example11" class="form-control"
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
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Log in</button>
                                            <?php
                if (isset($_GET['err']))
                    echo "<br>Incorrect credentials. Please <a href='login.php'>try again</a><br><br>";
                                            ?><br><br>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>
                                        <!-- END -->
                                        <!-- CREATE ACCOUNT -->
                                        <div class="d-flex align-items-center justify-content-center pb-5">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger">Create new</button>
                                        </div>
                                        <!-- END -->
                                    </form>
                                </div>
                            </div>
                            <!-- RIGHT PART -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
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
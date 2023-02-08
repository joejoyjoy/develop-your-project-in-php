<?php include('../view/head.php'); ?>

<body>

<nav class="navbar navbar-dark bg-dark">
        <div class="container">
        <a href="./client.php"><i class='fas fa-arrow-alt-circle-left' style='font-size:48px;color:#FF7538'></i></a>
            <img src="../assets/images/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
            <h1 class="text-center" style='color:#FF7538'>Sign up</h1>
        </div>
    </nav>

    <section class="h-100 gradient-form" style="background-color: #f1f2f6;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black container">
                        <form action="../session/validatSignUp.php" method="POST" enctype="multipart/form-data" class="box">
                            <!-- NAME -->
                            <div class="form-outline mb-4"><br>
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <!-- END -->
                            <!-- SURNAME -->
                            <div class="form-outline mb-4">
                                <label for="surname" class="form-label">Surname:</label>
                                <input type="text" id="surname" name="surname" class="form-control" required>
                            </div>
                            <!-- END -->
                            <!-- EMAIL -->
                            <div class="form-outline mb-4">
                                <label for="email">Email address:</label><br>
                                <input type="email" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                            </div>
                            <?php
                            if (isset($_GET['err']))
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Incorrect credentials!</strong> Please try again.
                                            <a href="../view/createUser.php" type="button" class="btn-close" aria-label="Close"></a>
                                        </div>';
                            ?>
                            <!-- END -->
                            <!-- PHONE NUMBER -->
                            <div class="form-outline mb-4">
                                <label for="phone" class="form-label">Phone number:</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <!-- END -->
                            <!-- PASSWORD -->
                            <div class="form-outline mb-4">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" minlength="8" maxlength="21" pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,20}$" required>
                            </div>
                            <!-- END -->
                            <!-- CONFIRM PASSWORD -->
                            <div class="form-outline mb-4">
                                <label for="password2">Confirm password:</label><br>
                                <input type="password" name="password2" id="password2" class="form-control" minlength="8" maxlength="21" required>
                            </div>
                            <!-- END -->
                            <!-- PASSWORD -->
                            <label for="rule" class="form-label">Selec user rule *</label>
                            <select name="rule" id="rule" class="form-select" aria-label="Select user rule" required>
                                <option selected>Select Rule</option>
                                <option value="1">Administrator</option>
                                <option value="2">Client</option>
                            </select>

                            <br>

                            <div class="mb-3">
                                <input type="submit" value="Sign in" style="background-color: #FF7538; border: #FF7538;" class="btn btn-success" name="signup" onclick="return Validate()">
                                <a href="../session/login.php" class="btn btn-danger" style="background-color: #343A3F; border: #343A3F;">Cancel</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
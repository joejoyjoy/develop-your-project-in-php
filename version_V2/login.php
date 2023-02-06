<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/main.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../src/assets/img/vpn.png" type="image/x-icon">
    <script src="../src/assets/js/bootstrap.bundle.min.js" defer></script>
    <title>Login | VPN Server</title>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #f1f2f6;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-100">
                    <div class="card rounded-3 text-black">
                        <div class="row g-10 align-items-center">
                            <div class="col-lg-6">
                                <div class="card-body p-md-8 mx-md-4">
                                    <div class="text-center">
                                        <img src="./assets/vpn-logo.png" style="width: 15%;" alt="Hopper VPN logo"><br><br>
                                        <h4 class="mt-1 mb-5 pb-1">Hopper VPN Server</h4>
                                    </div>
                                    <form action="_functions.php" method="POST">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-md-8">
                                                    <div class="col-md-12">
                                                        <div class="form-outline mb-4">
                                                            <label for="correo">User name:</label><br>
                                                            <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp" required>
                                                        </div>
                                                        <div class="form-outline mb-4">
                                                            <label for="password">Password:</label><br>
                                                            <input type="password" name="password" id="password" class="form-control" minlength="1" maxlength="21" required>
                                                            <input type="hidden" name="action" value="access">
                                                        </div>
                                                        <div class="text-center pt-1 mb-5 pb-1">
                                                            <button class="btn btn-success btn-block fa-lg" type="submit">Login</button><br><br>
                                                            <?php if(isset($_GET['err'])) { ?>
                                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                    <strong>A Error has occurred</strong><br> Incorrect credentials. Please try again
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                </div>
                                                            <?php unset($_GET['err']); header('refresh: 5; url=login.php');} ?>
                                                            <?php if(isset($_GET['message'])) { ?>
                                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                    <strong>Notification</strong><br> You successfully logged out!
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                </div>
                                                            <?php unset($_GET['message']); header('refresh: 5; url=login.php');} ?>
                                                            <a class="text-muted" href="#!">Forgot password?</a>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-center pb-5">
                                                            <p class="mb-0 me-2">Don't have an account?</p>
                                                            <button type="button" class="btn btn-outline-danger">Create new</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- RIGHT PART -->
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 back">
                                <img src="./assets/coding.jpeg" style="width: 100%;"><br><br>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
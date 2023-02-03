<?php
session_start();
if (isset($_SESSION['logged-in'])) {
    header('Location: panel.php');
    exit();
} ?>
<?php include('bootstrap.php'); ?>


<body>
    <div class="row align-items-center text-center">
        <div class="col-md-auto bg-light">
            <form action="validate.php" method="post" enctype="multipart/form-data" class="box">
                <div class="mb-3">
                    <label class="form-label">Email<br><br> <input type="email" name="email"
                            class="email-pswd form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            aria-describedby="emailHelp" required></label><br><br>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password<br><br> <input type="password" name="pswd"
                            class="email-pswd form-control" minlength="1" maxlength="21" required></label><br><br>
                </div>
                <button type="submit" class="log-in btn btn-primary" style="cursor: pointer;">Log in</button><br>
                <?php
                if (isset($_GET['err']))
                    echo "<br>Incorrect credentials. Please <a href='login.php'>try again</a>";
                ?>
            </form>
        </div>
        <div class="col position-relative p-0">
            <img src="./assets/img/background.png" class="img-fluid" alt="VPN Img">
        </div>
    </div>
</body>
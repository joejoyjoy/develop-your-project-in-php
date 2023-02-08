<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../session/login.php");
}

include('../view/head.php');
?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="../view/admin.php"><i class='fas fa-arrow-alt-circle-left' style='font-size:48px;color:#FF7538'></i></a>
            <img src="../assets/images/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
            <h1 class="text-center" style='color:#FF7538'>Hopper VPN</h1>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php
                include '../config/model.php';
                $model = new Model();
                $insert = $model->insert();
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="vpn_country" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="vpn_city" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">IP address</label>
                        <input type="text" name="vpn_ip_address" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">IP route</label>
                        <input type="text" name="vpn_ip_route" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">ISP</label>
                        <input type="text" name="vpn_isp" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary" style='background-color:#FF7538; border: #FF7538;'>Save VPN data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
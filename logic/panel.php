<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
?>
<?php include('bootstrap.php');?>


<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="close_session.php" class="navbar-brand">Log out</a>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h1>VPN information panel</h1>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="vpn_country" class="form-control" placeholder="Country" autofocus required><br>
                                <input type="text" name="vpn_city" class="form-control" placeholder="City" autofocus required><br>
                                <input type="text" name="vpn_ip_address" class="form-control" placeholder="IP address" autofocus required><br>
                                <input type="text" name="vpn_ip_route" class="form-control" placeholder="IP route" autofocus required><br>
                                <input type="text" name="vpn_isp" class="form-control" placeholder="ISP" autofocus required><br>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save VPN data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
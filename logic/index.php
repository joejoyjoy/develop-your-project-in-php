<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}
include('head.php');
?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="close_session.php" class="btn btn-danger" style='background-color:#FF7538; border:#FF7538;'>Log out</a>
            <img src="../assets/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
            <h1 class="text-center" style='color:#FF7538'>Hopper VPN</h1>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <div class="row">
            <main class="col ps-md-2 pt-2">
                <table id="table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>City</th>
                            <th>IP Address</th>
                            <th>ISP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include 'model.php';
                        $model = new Model();
                        $rows = $model->fetch();
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['vpn_country']; ?></td>
                                    <td><?php echo $row['vpn_city']; ?></td>
                                    <td><?php echo $row['vpn_ip_address']; ?></td>
                                    <td><?php echo $row['vpn_isp']; ?></td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "no data";
                        }
                        ?>
                    </tbody>
                </table>
            </main>
            <div class="col-4 px-0">
                <div id="sidebar" class="container">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <?php
                        @$selected_row = $_COOKIE['selected_row'];
                        $connectRows = $model->fetch_single($selected_row);
                        if (!empty($selected_row && $connectRows)) {
                        ?>
                            <h4>VPN Information</h4>
                            <p><b>ID Nº:</b> <?php echo $connectRows['vpn_id']; ?></p>
                            <p><b>Country:</b> <?php echo $connectRows['vpn_country']; ?></p>
                            <p><b>City:</b> <?php echo $connectRows['vpn_city']; ?></p>
                            <p><b>IP Address:</b> <?php echo $connectRows['vpn_ip_address']; ?></p>
                            <p><b>IP Route:</b> <?php echo $connectRows['vpn_ip_route']; ?></p>
                            <p><b>ISP:</b> <?php echo $connectRows['vpn_isp']; ?></p>
                            <p><b>Created:</b> <?php echo $connectRows['created_at']; ?></p>
                            <div class="d-flex justify-content-center" id="vpn-rocket" style="width: 320; height: 240px;">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h3><b><?php echo $connectRows['vpn_country']; ?> - <?php echo $connectRows['vpn_city']; ?></b></h3>
                            </div>
                            <div class="d-flex justify-content-center" id="vpn-connect">
                                <video width="80" height="80" onclick="vpnConnectOn()" style="cursor: pointer;" autoplay loop muted>
                                    <source src="../assets/vpnConnect/off.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="text-secondary" id="vpn-connected-message">Connect to VPN</p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
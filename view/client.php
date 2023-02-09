<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../session/login.php");
}
include('head.php');
?>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="../session/close_session.php" class="btn btn-danger" style='background-color:#FF7538; border:#FF7538;'>Log out</a>
            <img src="../assets/images/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
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

                        include '../config/model.php';
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
                                    <!-- Hide - Used only to get value-->
                                    <td style="display:none;">action</td>
                                    <td style="display:none;"><?php echo $row['vpn_id']; ?></td>
                                    <td style="display:none;"><?php echo $row['vpn_ip_route']; ?></td>
                                    <td style="display:none;"><?php echo $row['created_at']; ?></td>
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
            <div class="col-4 p-3 bg-white rounded-2">
                <div id="sidebar" class="container">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">

                        <h4 id="h4">VPN Information</h4>
                        <p id="vpn-id-side-info"><b>ID Nº: </b></p>
                        <p id="vpn-country-side-info"><b>Country: </b></p>
                        <p id="vpn-city-side-info"><b>City: </b></p>
                        <p id="vpn-ip-address-side-info"><b>IP Address: </b></p>
                        <p id="vpn-ip-route-side-info"><b>IP Route: </b></p>
                        <p id="vpn-isp-side-info"><b>ISP: </b></p>
                        <p id="vpn-created-side-info"><b>Created: </b></p>

                        <div class="container" id="rocketdiv"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
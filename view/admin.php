<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../session/login.php");
}
include('../view/head.php');
?>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="../session/close_session.php" class="btn btn-danger" style='background-color:#FF7538; border:#FF7538;'>Log out</a>
            <img src="../assets/images/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
            <h1 class="text-center" style='color:#FF7538'>Hopper VPN</h1>
        </div>
    </nav>

    <br>

    <div class="container">
        <a href="../crud/add.php" class="btn btn-primary" style='background-color:#FF7538; border:#FF7538;'>Add VPN configuration</a>
        <div class="row mt-3">
            <main class="col-9 ps-md-4 pt-4">
                <table id="table" class="table table-hover">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>City</th>
                            <th>IP Address</th>
                            <th>ISP</th>
                            <th>Action</th>
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
                                    <td><?php echo $row['vpn_country']; ?></a></td>
                                    <td><?php echo $row['vpn_city']; ?></a></td>
                                    <td><?php echo $row['vpn_ip_address']; ?></td>
                                    <td><?php echo $row['vpn_isp']; ?></td>
                                    <td>
                                        <a href="../crud/read.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-info">+</a>
                                        <a href="../crud/delete.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a href="../crud/edit.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <!-- Hide - Used only to get value-->
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
            <div class="col-3 p-3 bg-white rounded-2">
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

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
                                    <td><a onclick="tableRowClicked(<?php echo $row['vpn_id']; ?>)"><?php echo $row['vpn_country']; ?></a></td>
                                    <td><a onclick="tableRowClicked(<?php echo $row['vpn_id']; ?>)"><?php echo $row['vpn_city']; ?></a></td>
                                    <td><?php echo $row['vpn_ip_address']; ?></td>
                                    <td><?php echo $row['vpn_isp']; ?></td>
                                    <td>
                                        <a href="../crud/read.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-info">+</a>
                                        <a href="../crud/delete.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a href="../crud/edit.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    </td>
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
            <div class="col-3 px-2">
                <div id="sidebar" class="container">
                    <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <?php
                        @$selected_row = $_COOKIE['selected_row'];

                        if (isset($selected_row)) {
                            $rowArrayCount = $selected_row; ?>
                            <h4>VPN Information</h4>
                            <p><b>ID Nº:</b> <?php echo @$rows[$rowArrayCount]['vpn_id']; ?></p>
                            <p><b>Country:</b> <?php echo @$rows[$rowArrayCount]['vpn_country']; ?></p>
                            <p><b>City:</b> <?php echo @$rows[$rowArrayCount]['vpn_city']; ?></p>
                            <p><b>IP Address:</b> <?php echo @$rows[$rowArrayCount]['vpn_ip_address']; ?></p>
                            <p><b>IP Route:</b> <?php echo @$rows[$rowArrayCount]['vpn_ip_route']; ?></p>
                            <p><b>ISP:</b> <?php echo @$rows[$rowArrayCount]['vpn_isp']; ?></p>
                            <p><b>Created:</b> <?php echo @$rows[$rowArrayCount]['created_at']; ?></p>
                            <div class="d-flex justify-content-center" id="vpn-rocket" style="width: 320; height: 240px;">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h3><b><?php echo @$rows[$rowArrayCount]['vpn_country']; ?> - <?php echo @$rows[$rowArrayCount]['vpn_city']; ?></b></h3>
                            </div>
                            <div class="d-flex justify-content-center" id="vpn-connect">
                                <video width="80" height="80" onclick="vpnConnectOn()" style="cursor:pointer;" autoplay loop muted>
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
    <!-- Button trigger modal -->

</body>

</html>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
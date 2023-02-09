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
                                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteVPN" data-bs-whatever="<?php echo $row['vpn_id']; ?>"><i class="far fa-trash-alt"></i></a>
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

    <?php
    if (isset($_GET['event'])) { 
        $var = $_GET['event'] ?>
        <!-- Toast -->
        <div class="toast-container bottom-0 start-50 translate-middle-x p-3">
            <div class="liveToast toast" role="alert" aria-live="assertive" aria-atomic="true">

                <div class="d-flex">
                    <div class="p-1">
                        <svg class="bd-placeholder-img rounded me-2" width="30" height="30" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#FF7538"></rect>
                        </svg>
                    </div>
                    <div class="p-1">
                        <h3 class="p-0 m-0"><strong class="me-auto">VPN <?php echo $var; ?></strong></h3>
                    </div>

                    <div class="ms-auto p-1">
                        <span class="p-1">
                            <small>Just now</small>
                        </span>
                        <span class="p-1">
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </span>
                    </div>
                </div>

                <div class="toast-body">
                    <h6>Given task successfully accomplished!</h6>
                </div>
            </div>
        </div>
    <?php } ?>


</body>

</html>

<!-- Modal delete -->
<div class="modal fade" id="modalDeleteVPN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a type="button" class="delete-vpn-modal btn btn-primary">Delete</a>
            </div>
        </div>
    </div>
</div>
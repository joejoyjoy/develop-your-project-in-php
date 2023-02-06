<?php

session_start();
error_reporting(0);

$validate = $_SESSION['name'];

if ($validate == null || $validate = '') {
    header("Location: login.php");
    die();
}

?>
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
    <title>Admin | VPN Server</title>
</head>

<body>
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Welcom Administrator <?php echo $_SESSION['name']; ?></h1>
            <br>
            <h1>List of available VPN's</h1>
            <br>
            <div>
                <a class="btn btn-success" href="../registro.php">Create new VPN's
                    <i class="bi bi-plus-lg"></i> </a>
                <a class="btn btn-warning" href="logout.php">Log Out
                    <i class="bi bi-box-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
            <br>
            <br>
            <table class="table table-striped table-dark " id="table_id">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>City</th>
                        <th>IP Adress</th>
                        <th>IP Route</th>
                        <th>ISP</th>
                        <th>VPN Nº</th>
                        <th>Actiones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $connection = mysqli_connect("localhost", "root", "", "php_vpn");
                    $SQL = "SELECT * FROM vpn";
                    $sqlData = mysqli_query($connection, $SQL);

                    if ($sqlData->num_rows > 0) {
                        while ($fila = mysqli_fetch_array($sqlData)) {

                    ?>
                            <tr>
                                <td><?php echo $fila['vpn_country']; ?></td>
                                <td><?php echo $fila['vpn_city']; ?></td>
                                <td><?php echo $fila['vpn_ip_address']; ?></td>
                                <td><?php echo $fila['vpn_asn']; ?></td>
                                <td><?php echo $fila['vpn_isp']; ?></td>
                                <td class="px-5"><?php echo $fila['vpn_id']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['vpn_id']; ?>">
                                        <i class="bi bi-pencil"></i> </a>
                                    <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['vpn_id']; ?>">
                                        <i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>
                        <tr class="text-center">
                            <td colspan="16">No VPN's found</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</html>
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
            <div class="col-md-12 mt-5">
        <div class="row">
            <div class="col-md-12"><a href="add.php" class="btn btn-primary" style='background-color:#FF7538; border:#FF7538;'>Add VPN configuration</a><br><br><br><br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>IP Address</th>
                            <th>IP Route</th>
                            <th>ISP</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
 
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
                        <tr>
                            <td><?php echo $row['vpn_id']; ?></td>
                            <td><?php echo $row['vpn_country']; ?></td>
                            <td><?php echo $row['vpn_city']; ?></td>
                            <td><?php echo $row['vpn_ip_address']; ?></td>
                            <td><?php echo $row['vpn_ip_route']; ?></td>
                            <td><?php echo $row['vpn_isp']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                                <a href="read.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-info">Read</a>
                                <a href="delete.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-danger">Delete</a>
                                <a href="edit.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>

                        <?php
                }
              }else{
                echo "no data";
            }
              ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>


</html>
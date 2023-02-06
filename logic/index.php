<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
    include('bootstrap.php');
?>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="close_session.php" class="navbar-brand">Log out</a>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">VPN Server</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><a href="add.php" class="btn btn-primary">Add new VPN configuration</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>IP Address</th>
                            <th>IP Route</th>
                            <th>ISP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
 
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['vpn_country']; ?></td>
                            <td><?php echo $row['vpn_city']; ?></td>
                            <td><?php echo $row['vpn_ip_address']; ?></td>
                            <td><?php echo $row['vpn_ip_route']; ?></td>
                            <td><?php echo $row['vpn_isp']; ?></td>
                            <td>
                                <a href="read.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="badge badge-info">Read</a>
                                <a href="delete.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?vpn_id=<?php echo $row['vpn_id']; ?>" class="badge badge-success">Edit</a>
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
</body>


</html>
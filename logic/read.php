<?php include('bootstrap.php');?>

<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">Return</a>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">VPN Server</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <?php
              include 'model.php';
              $model = new Model();
              $vpn_id = $_REQUEST['vpn_id'];
              $row = $model->fetch_single($vpn_id);
              if(!empty($row)){
          ?>
                <div class="card">
                    <div class="card-header">
                        Single Record
                    </div>
                    <div class="card-body">
                        <p>Country = <?php echo $row['vpn_country']; ?></p>
                        <p>City = <?php echo $row['vpn_city']; ?></p>
                        <p>IP Address = <?php echo $row['vpn_ip_address']; ?></p>
                        <p>IP Route = <?php echo $row['vpn_ip_route']; ?></p>
                        <p>ISP = <?php echo $row['vpn_isp']; ?></p>
                    </div>
                </div>
                <?php
            }else{
            echo "no data";
          }
          ?>
            </div>
        </div>
    </div>
</body>

</html>
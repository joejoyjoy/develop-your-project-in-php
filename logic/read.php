<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
    }

include('bootstrap.php');
?>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php"><i class='fas fa-arrow-alt-circle-left' style='font-size:48px;color:#FF7538'></i></a>
            <img src="../assets/vpn-logo.png" alt="vpn logo" style="height: 8vh;">
            <h1 class="text-center" style='color:#FF7538'>Hopper VPN</h1>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            
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
                        Hopper VPN
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
        </div>
    </div>
</body>

</html>
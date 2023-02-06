<?php include('bootstrap.php'); ?>

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
            <div class="col-md-5 mx-auto">
                <?php
              include 'model.php';
              $model = new Model();
              $vpn_id = $_REQUEST['vpn_id'];
              $row = $model->edit($vpn_id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['vpn_country']) && isset($_POST['vpn_city']) && isset($_POST['vpn_ip_address']) && isset($_POST['vpn_ip_route']) && isset($_POST['vpn_isp'])) {
                  if (!empty($_POST['vpn_country']) && !empty($_POST['vpn_city']) && !empty($_POST['vpn_ip_address']) && !empty($_POST['vpn_ip_route']) && !empty($_POST['vpn_isp'])) {
                     
                    $data['vpn_id'] = $vpn_id;
                    $data['vpn_country'] = $_POST['vpn_country'];
                    $data['vpn_city'] = $_POST['vpn_city'];
                    $data['vpn_ip_address'] = $_POST['vpn_ip_address'];
                    $data['vpn_ip_route'] = $_POST['vpn_ip_route'];
                    $data['vpn_isp'] = $_POST['vpn_isp'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?vpn_id=$vpn_id");
                  }
                }
              }
          ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="vpn_country" value="<?php echo $row['vpn_country']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="vpn_city" value="<?php echo $row['vpn_city']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">IP Address</label>
                        <input type="text" name="vpn_ip_address" value="<?php echo $row['vpn_ip_address']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">IP Route</label>
                        <input type="text" name="vpn_ip_route" value="<?php echo $row['vpn_ip_route']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ISP</label>
                        <input type="text" name="vpn_isp" value="<?php echo $row['vpn_isp']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
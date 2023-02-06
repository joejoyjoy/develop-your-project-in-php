<?php include('bootstrap.php'); ?>

<body>
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
              $insert = $model->insert();
          ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="vpn_country" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="vpn_city" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">IP address</label>
                        <input type="text" name="vpn_ip_address" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">IP route</label>
                        <input type="text" name="vpn_ip_route" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">ISP</label>
                        <input type="text" name="vpn_isp" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Save VPN data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
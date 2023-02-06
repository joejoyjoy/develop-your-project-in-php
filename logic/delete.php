<?php 
    include 'model.php';
    $model = new Model();
    $vpn_id = $_REQUEST['vpn_id'];
    $delete = $model->delete($vpn_id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
 ?>
<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
    }

    include 'model.php';
    $model = new Model();
    $vpn_id = $_REQUEST['vpn_id'];
    $delete = $model->delete($vpn_id);
 
    if ($delete) {
        echo "<script>alert('Record deleted successfully!');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    }

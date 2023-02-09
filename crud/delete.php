<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: ../session/login.php");
    }

    include '../config/model.php';
    $model = new Model();
    $vpn_id = $_REQUEST['vpn_id'];
    $delete = $model->delete($vpn_id);
 
    if ($delete) {
        echo "<script>window.location.href = '../view/admin.php';</script>";
    }

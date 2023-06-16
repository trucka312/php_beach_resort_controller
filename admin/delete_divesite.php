<?php 
    include('./admin_control.php');
    $Data = new data();
    $delete = $Data->delete_divesite($_GET['id']);
    header("Location: admin_divesite.php");
?>
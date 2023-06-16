<?php 
    include('./admin_control.php');
    $Data = new data();
    $delete = $Data->delete_news($_GET['id_news']);
    header("Location: admin_news.php");
?>
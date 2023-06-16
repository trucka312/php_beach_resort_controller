<?php 
    include('./admin_control.php');
    $Data = new data();
    $delete = $Data->delete_foods($_GET['id_foods']);
    header("Location: admin_food.php");
?>
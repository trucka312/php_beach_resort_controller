<?php 
    include('./admin_control.php');
    $Data = new data();
    $delete = $Data->delete_contact($_GET['id_contact']);
    header("Location: admin_contact.php");
?>
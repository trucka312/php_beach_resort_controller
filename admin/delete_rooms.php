<?php
    include('admin_control.php');
    $Data = new data();
    $delete = $Data->delete_rooms($_GET['id_rooms']);
    header("Location: admin_room.php");
?>
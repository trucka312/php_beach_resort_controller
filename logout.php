<?php session_start(); 
 
if (isset($_SESSION['name'])){
    unset($_SESSION['name']); // xóa session login
    echo "bạn đã đăng xuất ";
}
?>
<a href="index123.php">HOME</a>
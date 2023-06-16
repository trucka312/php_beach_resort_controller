<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div>
        <h1 style="text-align: center;">Đăng Nhập</h1>
        <div style="text-align :center;">
            <form method="post">
                <input type="text" name="name" placeholder="Username"> <br>
                <input type="password" name="pass" placeholder="Password"> <br>
                <br>
                <input type="submit" name="btn_sub1" value="login"> <br>
                <button name="btn_sub2">register</button>
                <button name="btn_sub3">logout</button>
            </form>
            <?php
            // khai bao sd sessions 
            session_start();
            include('control.php');
            
            $get_data = new Data();

            if (isset($_POST['btn_sub1'])) {
                $pass = $_POST['pass'];
                if (empty($_POST['name']) || empty($_POST['pass']) ) {
                    echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
                } else {
                    $insert = $get_data->login($_POST['name']);                    
                    $serpass = null;
                    foreach($insert  as $row){
                        $serpass = $row['password'];
                    }
                    var_dump($serpass);
                    if ($pass ==  $serpass) {
                        echo "đăng nhập thành công";
                        $_SESSION['name'] = ($_POST['name']);
                        echo "Xin chào " . ($_POST['name']) ;
                        header("location:index123.php");
                        die();
                    } else {
                        echo "tên đăng nhập hoặc mật khẩu không tồn tại";
                    }
                }

            }
            if(isset($_POST['btn_sub2'])) {header("location:register.php");}
            if(isset($_POST['btn_sub3'])) header("location:logout.php");
            ?>

        </div>
    </div>
</body>

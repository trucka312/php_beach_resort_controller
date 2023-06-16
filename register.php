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
        <h1 style="text-align: center;">Đăng kí thông tin</h1>
        <div style="text-align :center;">
            <form method="post">
                <input type="text" name="fullname" placeholder="fullname"> <br>
                <input type="text" name="name" placeholder="Username"> <br>
                <input type="password" name="pass" placeholder="Password"> <br>
                <input type="password" name="repass" placeholder="Re_password"> <br>
                <input type="text" name="email" placeholder="Email"> <br>
                <input type="text" name="addr" placeholder="Address"> <br>
                <input type="text" name="birth" placeholder="brithday"> <br>
                <input type="file" name="image"> <br>
                <label>Giới tính :</label>
                <input type="radio" name="sex" value="Male" id="sex">
                <label for="sex">Male</label>
                <input type="radio" name="sex" value="FeMale" id="sex">
                <label for="sex">Female</label>
                <input type="radio" name="sex" value="Other" id="sex">
                <label for="sex">Other</label> <br>

                <label>Sở thích :</label>
                <input type="checkbox" name="hobby" value="bongda" id="bongda">
                <label for="bongda">Football</label>
                <input type="checkbox" name="hobby" value="Film" id="film">
                <label for="film">Film</label>
                <input type="checkbox" name="hobby" value="Else" id="else">
                <label for="else">Something else</label>

                <br>
                <input type="submit" name="btn_sub" value="register"> <br>
                <button name="btn_sub2">login</button>
                <button name="btn_sub3">logout</button>
            </form>
            <?php
            include('control.php');
            $get_data = new Data();
            if (isset($_POST['btn_sub'])) {
                if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['repass']) || empty($_POST['addr']) || empty($_POST['sex']) || empty($_POST['hobby']) || empty($_POST['image']) || empty($_POST['birth'])) {
                    echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
                } else {
                    $insert = $get_data->register($_POST['name'], $_POST['pass'], $_POST['email'], $_POST['addr'], $_POST['birth'], $_POST['image'], $_POST['sex'], $_POST['hobby']);
                }

                if ($insert) echo "đăng kí thành công";
                else echo "đăng kí thất bại";
            }

            if(isset($_POST['btn_sub2'])) header("location:login.php");
            if(isset($_POST['btn_sub3'])) header("location:logout.php");
            ?>
        </div>
    </div>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>News - Bhaccasyoniztas Beach Resort Website Template</title>

</head>

<body>
    <div id="background">
        <div id="page">
            <div id="header">
                <div id="logo">
                    <a href="index123.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
                </div>
                <div id="navigation">
                    <ul>
                        <li>
                            <a href="index123.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="rooms.php">Rooms</a>
                        </li>
                        <li>
                            <a href="dives.php">Dive Site</a>
                        </li>
                        <li>
                            <a href="foods.php">Food</a>
                        </li>
                        <li class="selected">
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="contents">
                <div class="box">
                    <div>
                        <div id="news" class="body">

                            <!-- body -->
                            <h1>Add foods</h1>

                            <form method="post">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td><input name="name" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td>Image:</td>
                                            <td><input name="image1" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td>Image:</td>
                                            <td><input name="image2" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td>Image:</td>
                                            <td><input name="image3" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td>description:</td>
                                            <td><input name="des" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="btn_sub" type="submit" value="add divesite" class="btn"></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    include('admin_control.php');
                                    $get_data = new data();
                                    // insert
                                    if (isset($_POST['btn_sub'])) {
                                        if (empty($_POST['name']) || empty($_POST['des']) || empty($_POST['image1']) || empty($_POST['image2']) || empty($_POST['image3'])) {
                                            echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
                                        } else {
                                            $insert = $get_data->insert_foods($_POST['name'], $_POST['image1'],$_POST['des']);
                                        }
                                        if ($insert){
                                            echo "thêm food thành công";
                                            header("Location: admin_food.php");
                                        }
                                        else echo "Thêm food thất bại";
                                    }
                                    ?>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div>
                    <ul class="navigation">
                        <li>
                            <a href="index123.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="rooms.php">Rooms</a>
                        </li>
                        <li>
                            <a href="dives.php">Dive Site</a>
                        </li>
                        <li>
                            <a href="foods.php">Food</a>
                        </li>
                        <li class="active">
                            <a href="news.php">News</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div id="connect">
                        <a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
                    </div>
                </div>
                <p>
                    © 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
                </p>
            </div>
        </div>
</body>

</html>
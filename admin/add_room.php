<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>Rooms - Bhaccasyoniztas Beach Resort Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                        <li class="selected">
                            <a href="rooms.php">Rooms</a>
                        </li>
                        <li>
                            <a href="dives.php">Dive Site</a>
                        </li>
                        <li>
                            <a href="foods.php">Food</a>
                        </li>
                        <li>
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
                        <div class="body">
                            <h1>Add Rooms</h1>

                            <form method="post">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td>Name Room:</td>
                                            <td><input name="name" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td class="txtarea">Description:</td>
                                            <td><textarea name="desc"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Image:</td>
                                            <td><input name="" type="file" value="" ></td>
                                            <td><input type="text" name="image" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td>Rate:</td>
                                            <td><input name="rate" type="text" value="" class="txtfield"></td>
                                        </tr>
                                        <tr>
                                            <td><input name="btn_sub" type="submit" value="add room" class="btn"></td>
                                        </tr>
                                    </tbody>


                                </table>
                            </form>

                            <?php
                            include('admin_control.php');
                            $get_data = new data();
                            if (isset($_POST['btn_sub'])) {
                                // move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name']);
                                if (empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['image']) || empty($_POST['rate'])) {
                                    echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
                                } else {
                                    $insert = $get_data->insert_room($_POST['name'], $_POST['desc'], $_POST['image'], $_POST['rate']);
                                }

                                if ($insert) {
                                    echo "thêm phòng thành công";
                                    header("location: admin_room.php");
                                } else echo "thêm phòng thất bại";
                            }
                            ?>

                        </div>
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
                    <li class="active">
                        <a href="rooms.php">Rooms</a>
                    </li>
                    <li>
                        <a href="dives.php">Dive Site</a>
                    </li>
                    <li>
                        <a href="foods.php">Food</a>
                    </li>
                    <li>
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
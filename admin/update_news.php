<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div id="news" class="body">

            <!-- body -->
            <h1>Update News</h1>

            <form method="post">
                <table>
                    <tbody>
                        <tr>
                            <td>Title:</td>
                            <td><input name="name" type="text" value="" class="txtfield"></td>
                        </tr>
                        <tr>
                            <td class="txtarea">content:</td>
                            <td><textarea name="cont"></textarea></td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td><input name="image" type="text" value="" class="txtfield"></td>
                        </tr>
                        <tr>
                            <td>description:</td>
                            <td><input name="des" type="text" value="" class="txtfield"></td>
                        </tr>
                        <tr>
                            <td><input name="btn_sub" type="submit" value="Update" class="btn"></td>
                        </tr>
                       
                    </tbody>


                    <?php
                    // update
                    include('admin_control.php');
                    $get_data = new data();
                    if (isset($_POST['btn_sub'])) {
                        if (empty($_POST['name']) || empty($_POST['des']) || empty($_POST['image']) || empty($_POST['cont'])) {
                            echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
                        } else {
                            $insert = $get_data->update_news($_GET['id_news'], $_POST['name'], $_POST['cont'], $_POST['image'], $_POST['des']);
                        }
                        if ($insert){
                            echo "Update tin tức thành công";
                            header("Location: admin_news.php");
                        }
                        else echo "Update tin tức thất bại";
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
</body>

</html>
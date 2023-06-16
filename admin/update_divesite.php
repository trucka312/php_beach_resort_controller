<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" width="100%">
        <form method="post">
            <table>
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td><input name="name" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><input name="des" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td>Image:</td>
                        <td><input name="image" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="btn_sub" type="submit" value="Update" class="btn"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php
        include('admin_control.php');
        $get_data = new data();
        if (isset($_POST['btn_sub'])) {
            if (empty($_POST['name']) || empty($_POST['des']) || empty($_POST['image'])) {
                echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
            } else {
                $update = $get_data->update_divesite($_GET['id'], $_POST['name'], $_POST['des'], $_POST['image']);
                if ($update)
                    header('location:admin_divesite.php');
            }
        }
        ?>
    </table>
</body>

</html>
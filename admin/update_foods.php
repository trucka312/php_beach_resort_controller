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
                        <td>Image:</td>
                        <td><input name="image1" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td class="txtarea">Description:</td>
                        <td><textarea name="des"></textarea></td>
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
            if (empty($_POST['name']) || empty($_POST['image1']) || empty($_POST['image2']) || empty($_POST['image3'] || empty($_POST['des']))) {
                echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
            } else {
                $update = $get_data->update_foods($_GET['id'], $_POST['name'], $_POST['image1'], $_POST['des']);
                if ($update)
                    header('location:admin_contact.php');
            }
        }
        ?>
    </table>
</body>

</html>
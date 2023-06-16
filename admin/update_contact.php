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
                        <td>Email:</td>
                        <td><input name="email" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td>Subject:</td>
                        <td><input name="subject" type="text" value="" class="txtfield"></td>
                    </tr>
                    <tr>
                        <td class="txtarea">Message:</td>
                        <td><textarea name="mess"></textarea></td>
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
            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['mess'])) {
                echo " <script> alert('vui lòng nhập đủ thông tin ') </script>";
            } else {
                $update = $get_data->update_contact($_GET['id_rooms'], $_POST['name'], $_POST['email'], $_POST['subject'], $_POST['mess']);
                if ($update)
                    header('location:admin_contact.php');
            }
        }
        ?>
    </table>
</body>

</html>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact - Bhaccasyoniztas Beach Resort Website Template</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

    <body>
        <div id="background">
            <div id="page">
                <div id="header">
                    <div id="logo">
                        <a href="../index123.php"><img src="../images/logo.png" alt="LOGO" height="112" width="118"></a>
                    </div>
                    <h1>DIVESITE</h1>
                    <div id="navigation">
                        <ul>
                            <li>
                                <a href="admin_index123.php">Home</a>
                            </li>
                            <li>
                                <a href="admin_about.php">About</a>
                            </li>
                            <li>
                                <a href="admin_room.php">Rooms</a>
                            </li>
                            <li>
                                <a href="admin_divesite.php">Dive Site</a>
                            </li>
                            <li>
                                <a href="admin_foods.php">Food</a>
                            </li>
                            <li>
                                <a href="admin_news.php">News</a>
                            </li>
                            <li class="selected">
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contents">
                    <div class="box">
                        <div>
                            <div id="contact" class="body">
                                <!-- <h1>Contact</h1> -->
                                <?php 
                                    include ('admin_control.php');
                                    $get_data = new data();
                                    $select =$get_data->select_divesite();
                                ?>
                                <table border="1" width="100%" style="margin-left: -42px;">
                                    <tr>
                                        <td>ID</td>
                                        <td>name</td>
                                        <td>desc</td>
                                        <td>image</td>
                                        <td colspan="2" style="text-decoration: none; background-color :brown ;"><a href="add_divesite.php">Add dive site</a></td>
                                    </tr>
                                    <?php
                                        
                                        foreach($select as $se_contact)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_contact['id'] ?></td>
                                            <td><?php echo $se_contact['name'] ?></td>
                                            <td><img src="<?php echo $se_contact['image'] ?>" style="width:150px" alt=""></td>
                                            <td><?php echo $se_contact['description'] ?></td>
                                            <td>
                                                <a href="delete_divesite.php?id=<?php echo $se_contact['id']?>">Delete</a>
                                            </td>
                                            <td>
                                                <a href="update_divesite.php?id_news=<?php echo $se_contact['id']?>">Update</a>
                                            </td>
                                        </tr>
                                        <?php }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="footer">
                <div>
                    <ul class="navigation">
                        <li>
                            <a href="index.php">Home</a>
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
                        <li>
                            <a href="news.php">News</a>
                        </li>
                        <li class="active">
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
            </div> -->
        </div>
    </body>
                                    
</html>
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
                                <a href="admin_food.php">Food</a>
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
                                    $select =$get_data->select_rooms();
                                ?>
                                <table border="1" width="100%">
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Image</td>
                                        <td>Description</td>
                                        <td>Rate</td>
                                        <td colspan="2"><a href="add_room.php">ADD ROOM</a></td>
                                    </tr>
                                    <?php
                                        
                                        foreach($select as $se_contact)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_contact['id'] ?></td>
                                            <td><?php echo $se_contact['name'] ?></td>
                                            <td><img src="<?php echo $se_contact['image']?>" alt="room image"/></td>
                                            <td><?php echo $se_contact['description'] ?></td>
                                            <td><?php echo $se_contact['rate'] ?></td>
                                            <td>
                                                <a href="delete_rooms.php?id_rooms=<?php echo $se_contact['id']?>">Delete</a>
                                            </td>
                                            <td>
                                                <a href="update_room.php?id_rooms=<?php echo $se_contact['id']?>">Update</a>
                                            </td>
                                        </tr>
                                        <?php }
                                    ?>

                                </table>


                                <!-- <h2>Bhaccasyoniztas Beach Resort</h2>
                                <p>
                                    <span>Address:</span> 123 Lorem Ipsum Cove, Sed Ut City, LI 12345
                                </p>
                                <p>
                                    <span>Telephone Number:</span> 1-800-999-9999
                                </p>
                                <p>
                                    <span>Fax Number:</span> 1-800-111-1111
                                </p> -->
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
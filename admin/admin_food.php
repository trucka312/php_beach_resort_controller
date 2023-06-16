<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
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
						<li class="selected">
							<a href="admin_foods.php">Food</a>
						</li>
						<li>
							<a href="admin_news.php">News</a>
						</li>
						<li>
							<a href="admin_contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<h1>FOODS</h1>
                            <?php 
                                    include ('admin_control.php');
                                    $get_data = new data();
                                    $select =$get_data->select_foods();
                                ?>
                                <table border="1" width="100%">
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>image</td>
                                        <td>description</td>
                                        <td><a href="add_foods.php">ADD FOODS</a></td>
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
                                              <a href="delete_foods.php?id_rooms=<?php echo $se_contact['id']?>">Delete</a>
                                            </td>
                                            <td>
                                                <a href="update_foods.php?id_rooms=<?php echo $se_contact['id']?>">Update</a>
                                            </td>
                                        </tr>
                                        <?php }
                                    ?>
							<!-- <ul id="foods">
								<li>
									<h2><a href="foods.php">SeaFood Special</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/seafoods.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
										<p>
											<span>Fried Salmon Special</span> I'm a product overview. Here you can write more information about your product. Buyers like to know ...
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.php">Sumptuous Desserts</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/desserts.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
										<p>
											<span>Choco Ice Cream Sandwich</span> I'm a product overview. Here you can write more information about your product. Buyers like to know ...
										</p>
									</div>
								</li>
								<li>
									<h2><a href="foods.php">Buffet</a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/buffet.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
										<p>
											<span>Mixed Buffet</span> I'm a product overview. Here you can write more information about your product. Buyers like to know ...
										</p>
									</div>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div style="width: inherit;">
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
					<li class="active">
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
			<!-- <p>
				© 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
			</p> -->
		</div>
	</div>
</body>
</html>
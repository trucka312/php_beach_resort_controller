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
							<h1>Rooms</h1>
							<ul id="rooms">
								<?php 
										include ('control.php');
										$get_data = new data();
										$select = $get_data->select_rooms();
								?>

								<?php 
									foreach($select as $se){ ?>

									<li>
										<a href="rooms.php"><img src="<?php echo $se['image'] ?>" alt=""></a>
										<h2><a href="rooms.php"><?php echo $se['name'] ?></a></h2>
										<p>
											<?php echo $se['description'] ?>
										</p>
										<span class="rate"><?php echo $se['rate'] ?>$</span>
									</li>
									<?php }
								
								?>
								<!-- <li>
									<a href="rooms.php"><img src="images/first-class.jpg" alt="Img"></a>
									<h2><a href="rooms.php">First Class Room</a></h2>
									<p>
										Cras dui sapien, feugiat vitae tristique ut, lobortis tempor orci. Donec pulvinar sagittis metus ut tristique. Pellentes que habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas idios.
									</p>
									<span class="rate">Rate: 220 / Day</span>
								</li>
								<li>
									<a href="rooms.php"><img src="images/deluxe.jpg" alt="Img"></a>
									<h2><a href="rooms.php">Deluxe Room</a></h2>
									<p>
										Sed et augue lorem. In sit amet placerat arcu. Mauris volutpat ipsum ac justo mollis vel vestibulum orci gravida. Vestibulum sit amet porttitor odio. Nulla facilisi. Fusce at pretium felis.
									</p>
									<span class="rate">Rate: 150 / Day</span>
								</li>
								<li>
									<a href="rooms.php"><img src="images/suite.jpg" alt="Img"></a>
									<h2><a href="rooms.php">Suite Room</a></h2>
									<p>
										Sed et augue lorem. In sit amet placerat arcu. Mauris volutpat ipsum ac justo mollis vel vestibulum orci gravida. Vestibulum sit amet porttitor odio. Nulla facilisi. Fusce at pretium felis.
									</p>
									<span class="rate">Rate: 180 / Day</span>
								</li> -->
							</ul>
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
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>News - Bhaccasyoniztas Beach Resort Website Template</title>
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
							<div class="sidebar">
								<h3>Latest News</h3>
								<ul>
									<li>
										<a href="news.php">2023 Bikini Contest Winners</a>
									</li>
									<li>
										<a href="news.php">Top 10 Diving Spots</a>
									</li>
									<li>
										<a href="news.php">Fishing ban to be implemented this year</a>
									</li>
									<li>
										<a href="news.php">Lifeguard saves child from drowning</a>
									</li>
								</ul>
								<h3>Vaction Tips</h3>
								<ul>
									<li>
										<a href="news.php">What to bring on the beach?</a>
									</li>
									<li>
										<a href="news.php">Planning Fun Activities</a>
									</li>
									<li>
										<a href="news.php">Diving Checklist</a>
									</li>
									<li>
										<a href="news.php">First Aid</a>
									</li>
									<li>
										<a href="news.php">How to Build a Sand Castle?</a>
									</li>
									<li>
										<a href="news.php">Tanning Tips</a>
									</li>
								</ul>
							</div>
							<div>
								<h1>News</h1>
								<?php 
										include ('control.php');
										$get_data = new data();
										$select = $get_data->select_news();
								?>
								<?php 
									foreach($select as $se){ ?>
								<img src="<?php echo $se['img'] ?>" alt="Img">
								<h2><?php echo $se['name'] ?></h2>
								<span class="time">April 03, 2023<br> by: Juan De La Cruz</span>
								<p>
									<?php echo $se['cont'] ?>
								</p>
								<p>
								<?php echo $se['des'] ?>
								</p>
								<p>
									Phasellus viverra fringilla lacus, malesuada blandit velit iaculis dignissim. Suspendisse rutrum massa mauris. Donec quis tempus elit.Integer magna leo, posuere et dignissim vitae, porttitor at odio. Pellentesque a metus nec magna placerat volutpat.
								</p>
								<?php }
								
								?>
							</div>
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
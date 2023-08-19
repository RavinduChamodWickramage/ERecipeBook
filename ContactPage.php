<html>

<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="style3.css" />
</head>

<body>
	<nav class="h1">
		<div class="logo">
			<a href="HomePage.php"><img src="E Recipe Book Logo.png" alt="Logo"></a>
		</div>
		<a href="HomePage.php">Home</a>
		<a href="RecipesPage.php">Recipes</a>
		<a href="AboutPage.php">About</a>
		<a href="ContactPage.php">Contact</a>
		<a href="LoginPage.php">Login</a>
		<div class="searchbar">
			<input type="text" placeholder="Search..">
		</div>
		<div class="searchicon">
			<button type="submit"><a><img src="search.png" alt="Logo"></a></button>
		</div>
	</nav>
	<div class="container1">
		<div class="content1">
			<div class="left-side1">
				<div class="address details1">
					<div class="topic">Address</div>
					<div class="text-one">123/1/A,</div>
					<div class="text-two">Kelaniya,</div>
					<div class="text-two">Sri Lanka</div>
				</div>
				<div class="phone details1">
					<div class="topic1">Phone</div>
					<div class="text-one">+9471 123 4567</div>
					<div class="text-two">+9477 987 6543</div>
				</div>
				<div class="email details1">
					<div class="topic1">Email</div>
					<div class="text-one">erecipebook@gmail.com</div>
				</div>
			</div>
			<div class="right-side1">
				<center>
					<div class="topic-text1">Contact Us</div>
				</center>
				<form action="contact.php" method="post">
					<div class="input-box1">
						<input type="text1" name="firstname" placeholder="Enter your first name">
					</div>
					<div class="input-box1">
						<input type="text1" name="lastname" placeholder="Enter your last name">
					</div>
					<div class="input-box1">
						<input type="text1" name="email" placeholder="Enter your email">
					</div>
					<div class="input-box1 message-box1">
						<textarea name="message" placeholder="Enter your message"></textarea>
					</div>
					<div class="button">
						<button type="submit" class="btn btn-primary">Send Now</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer style="margin-top: 0px;">
		<center>
			<button class="button"><img src="facebook.png"><a href="https://www.facebook.com"></a></button>
			<button class="button"><img src="instagram.png"><a href="https://www.instagram.com"></a></button>
			<button class="button"><img src="tiktok.png"><a href="https://www.tiktok.com"></a></button>
			<button class="button"><img src="whatsapp.png"><a href="https://www.whatsapp.com"></a></button>
		</center>
		<center>
			<h3>E-Recipe Book</h3>
		</center>
		<p>Cooking is an essential part of our daily lives, and the recipe book has been a valuable tool for home cooks for centuries. However, with the rise of technology, people are increasingly turning to digital platforms for recipe discovery and management. E-Recipe Book aims to solve the challenges modern home cooks face in managing their recipes.</p>
		<p class="copyright">E-Recipe Book © 2023</p>
	</footer>

</body>

</html>
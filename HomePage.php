<html>
<title>Home Page</title>

<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
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
	<div>
		<div class="slideshow-container">
			<div class="slide">
				<img src="slide1.jpg">
				<div class="button-container">
					<a href="HomePage.html" class="slide-button">Home</a>
				</div>
			</div>

			<div class="slide">
				<img src="slide2.jpg">
				<div class="button-container">
					<a href="AboutPage.html" class="slide-button">About</a>
				</div>
			</div>

			<div class="slide">
				<img src="slide3.jpg">
				<div class="button-container">
					<a href="RecipesPage.html" class="slide-button">Recipes</a>
				</div>
			</div>

			<div class="slide">
				<img src="slide4.jpg">
				<div class="button-container">
					<a href="ContactPage.html" class="slide-button">Contact</a>
				</div>
			</div>

			<div class="slide">
				<img src="slide5.jpg">
				<div class="button-container">
					<a href="LoginPage.html" class="slide-button">LogIn</a>
				</div>
			</div>
		</div>
		<script>
			let slideIndex = 0;
			showSlides();

			function showSlides() {
				let slides = document.getElementsByClassName("slide");
				for (let i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) {
					slideIndex = 1;
				}
				slides[slideIndex - 1].style.display = "block";
				setTimeout(showSlides, 3000); // Change image every 3 seconds
			}
		</script>
	</div>

	<footer>
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
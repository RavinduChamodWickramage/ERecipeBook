<html>
<title>Login Page</title>

<head>
	<link rel="stylesheet" type="text/css" href="style.css" />

	<!-- Google Sign-In SDK -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Facebook SDK -->
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

	<script src="SocialMedia.js"></script>
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
		<form action="login.php" method="post">
			<center>
				<div class="form.imgcontainer">
					<img src="login.png" alt="Avatar" class="avatar">
				</div>
			</center>

			<div class="form.container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<button type="submit">Login</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="form.container" style="background-color:#f1f1f1">
				<button type="button" class="cancelbtn">Cancel</button>
				<span class="psw"><a href="#">Forgot password?</a></span>
			</div>
		</form>
		<center>
			<div class="socialmedia">
				<a href="SigninPage.php"><button style="background-color: #000000;"><img src="email.png" alt="Logo" style="width:15px; margin-right:10px;"> Sign in with Email</button></a>
				<div class="g-signin2" data-onsuccess="onSignIn">
					<button style="background-color: #dd4b39;"><img src="google.png" alt="Logo" style="width:15px; margin-right:10px;"> Sign in with Google</button></a>
				</div>
				<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
					<button style="background-color: #3b5998;"><img src="facebook2.png" alt="Logo" style="width:7.5px; margin-right:10px;"> Sign in with Facebook</button>
				</fb:login-button>
			</div>

		</center>
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
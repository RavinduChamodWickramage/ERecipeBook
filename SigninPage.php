<html>
	<title>Signin Page</title>
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
		<form action="signin.php" method="post">
		<center>
		  <div class="form.imgcontainer">
			<img src="login.png" alt="Avatar" class="avatar">
		  </div>
		</center>

		  <div class="form.container">
			<label for="firstname"><b>First Name</b></label>
			<input type="text" placeholder="Enter First Name" name="firstname" required>
			
			<label for="lastname"><b>Last Name</b></label>
			<input type="text" placeholder="Enter Last Name" name="lastname" required>
			
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>
			
			<label for="rpsw"><b>Confirm Password</b></label>
			<input type="password" placeholder="Confirm Password" name="rpsw" required>
			
			<button type="submit">Signin</button>
		  </div>
		</form>
		
		<footer style="margin-top: 0px;">
		<center>
				<button class="button"><img src="facebook.png"><a href="https://www.facebook.com"></a></button>
				<button class="button"><img src="instagram.png"><a href="https://www.instagram.com"></a></button>
				<button class="button"><img src="tiktok.png"><a href="https://www.tiktok.com"></a></button>
				<button class="button"><img src="whatsapp.png"><a href="https://www.whatsapp.com"></a></button>
		</center>
                <center><h3>E-Recipe Book</h3></center>
                <p>Cooking is an essential part of our daily lives, and the recipe book has been a valuable tool for home cooks for centuries. However, with the rise of technology, people are increasingly turning to digital platforms for recipe discovery and management. E-Recipe Book aims to solve the challenges modern home cooks face in managing their recipes.</p>
                <p class="copyright">E-Recipe Book © 2023</p>
        </footer>
	</body>
</html>
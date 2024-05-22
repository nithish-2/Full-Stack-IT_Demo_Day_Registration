<?php
// Start a new session
if (!isset($_SESSION)) {
	session_start();
}

// Check if the user is logged in
if (isset($_SESSION["username"])) {
	// Redirect to the first shopping page
	header("Location: RegistrationPage.php");
	exit();
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" ){	
		
	$name = $_POST["username"];
	$password = $_POST["userpassword"];
	if(($name != "admin") || ($password != "admin")){
		$loginError = "Invalid user name and password";
	}
	else{
		$_SESSION["username"] = $name;
		header("Location: RegistrationPage.php");
		}
}
?>



<!DOCTYPE html>
<html>
<!-- Header Section -->
<head>
	<title>Registration - IT Demo Day</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="includes\script.js"></script>
</head>

<!-- Body Section -->
<body>
	<header>
		<nav>
			<ul>
				<li><img src="Images/NITHISH JAGADEESAN.png" alt="Registration - IT Demo Day Logo"></li>
				<li><a href="RegistrationPage.php"><b>Register your team</b></a></li>
			</ul>
		</nav>
	</header>
	<div class="image">
        <img src="Images/banner.jpg" alt="banner" width=100% height=400px>
    </div>
	<div class="login-popup" id="login-popup">
		<div class="login-content">
			<h2>Log In</h2>
			<form method="post">
				<label for="name">Enter your name:</label>
				<input type="text" name="username" id="username" placeholder="admin" required>
				<label for="password">Enter your password:</label>
				<input type="password" name="userpassword" id="userpassword" placeholder="admin" required>
				<span class="error">
				<?php if (isset($loginError)) echo $loginError; ?>
				</span><br />
				<button id="submit-btn" type="submit">Sign in</button>
			</form>
		</div>
	</div>

<!-- Footer Section -->
	<footer>
		<p>&copy; 2023 - IT Demo Day - All rights reserved</p>
	</footer>
</body>

</html>
<?php
include 'main.php';
check_loggedin($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Home Page</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Authentication Master</h1>
				<a href="home.php"><i class="fas fa-home"></i>Home</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<?php if ($_SESSION['role'] == 'Admin'): ?>
				<a href="admin/index.php" target="_blank"><i class="fas fa-user-cog"></i>Admin</a>
				<?php endif; ?>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p class="block">Welcome back, <?=$_SESSION['name']?>!
				<br /> You have successfully used our Authentication Master prototype. Please logout of the system! 
			   
			</p>
			
		</div>
	</body>
</html>

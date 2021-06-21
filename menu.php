<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Menu</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>
			<nav class="header-menu">
				<ul class="nav-menu" >
					<li class="<?php if($page=='home'){echo 'active';} ?>"><a href="index.php">Home</a></li>
					<li class="<?php if($page=='solutions'){echo 'active';} ?>"><a href="solutions.php">Solutions</a></li>
					<li class="<?php if($page=='career'){echo 'active';} ?>"><a href="career.php">Career</a></li>
					<li class="<?php if($page=='support'){echo 'active';} ?>"><a href="support.php">Support</a></li>
					<li class="<?php if($page=='event'){echo 'active';} ?>"><a href="event.php">Events & Learning</a></li>
					<li class="<?php if($page=='news'){echo 'active';} ?>"><a href="news.php">News </a></li>
					<li class="<?php if($page=='company'){echo 'active';} ?>"><a href="company.php">Company </a></li>
					<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="contact.php">Contact Sales </a></li>
				</ul>
				</h1>
			</nav>
		</header>
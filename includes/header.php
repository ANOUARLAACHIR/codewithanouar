<!DOCTYPE html>
<html lang="en">

<head>
	<title>CodeWithAnouar Academy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo "/codewithanouar/css/style.css"; ?>">
	<link rel="stylesheet" href="<?php echo "/codewithanouar/css/asideStyle.css"; ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+212-670-251680</a></p>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="https://www.facebook.com/anouar.laachir" target="_blanc"
								class="d-flex align-items-center justify-content-center"><span
									class="fa-brands fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa-brands fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa-brands fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="https://www.youtube.com/@becomeengineer" target="_blanc"
								class="d-flex align-items-center justify-content-center"><span
									class="fa-brands fa-youtube"><i class="sr-only">Youtube</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo "/codewithanouar/index.php"; ?>">CodeWithAnouar
				<span>Academy</span></a>
			<form action="#" class="searchform order-sm-start order-lg-last">
				<div class="form-group d-flex">
					<input type="text" class="form-control pl-3" placeholder="Search">
					<button type="submit" placeholder="" class="form-control search"><span
							class="fa fa-search"></span></button>
				</div>
			</form>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item active"><a href="<?php echo "/codewithanouar/index.php"; ?>"
							class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Programmation</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="#">C Language</a>
							<a class="dropdown-item" href="#">JAVA</a>
							<a class="dropdown-item" href="#">Python</a>
							<a class="dropdown-item" href="#">DART</a>
						</div>
					</li>
					<li class="nav-item"><a href="#" class="nav-link">Catalog</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="<?php echo "/codewithanouar/forms/login.php"; ?>" class="nav-link"
							data-toggle="modal">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="row">
		<?php include("sidebar.php"); ?>
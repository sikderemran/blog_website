<?php include 'config/config.php' ?>
<?php include "database.php" ?>
<?php include "format.php" ?>
<?php 
	$db= new Database();
	$fm=new format();
?>
<!DOCTYPE html>
<html>
<head>
	<title>my blog site</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd; >


	<a class="navbar-brand" href="index.php"></a>
	<a class="navbar-brand" href="index.php"><img src="img/logoNav.png" id="logo"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="index.php"><h2>Shadinatha Beakhar Diploma Pharmacist Association(SBDPA)</h2></a>
	</ul>
	<form class="form-inline my-2 my-lg-0" action="search.php" method="get">
		<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
	</div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
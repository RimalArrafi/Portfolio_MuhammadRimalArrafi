<!DOCTYPE html>
<html>
<head>
	<?php 
	include "connection.php";
				
	$query = mysqli_query($conn, "SELECT * FROM background WHERE id = '6901'");
	$row_query = mysqli_fetch_assoc($query);
	
	?>
	<body background="img/<?= $row_query['background'] ?>" style="background-size: cover;background-position: center"/>
	<?php
	?>
	<title>Home</title>
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<style>
	*{
	padding: 0;
	margin: 0;
	font-family: 'Josefin Sans', sans-serif;
	box-sizing: border-box;
	}
	.hero{
	height: 100vh;
	width: 100%;
	}
	nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 45px;
	padding-left: 10%;
	padding-right: 25%;
	}
	.logo{
	color: white;
	font-size: 35px;
	letter-spacing: 1px;
	}
	nav ul li{
	list-style-type: none;
	display: inline-block;
	padding: 10px  25px;
	}
	nav ul li a{
	color: white;
	text-decoration: none;
	text-align: justify;
	font-weight: bold;
	text-transform: capitalize;
	font-size: 20px;
	}
	nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
	}
	.content{
	position: absolute;
	top: 50%;
	left:8%;
	transform: translateY(-50%);
	}
	h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 75px;
	}
	h3{
	color: white;
	font-size: 25px;
	margin-bottom: 50px;
	}
	h4{
	color: #fcfc;
	letter-spacing: 2px;
	font-size: 20px;
	}
</style>
</head>
<body>
<div class="hero">
		<nav>
		<?php 
		include "connection.php";
				
		$query = mysqli_query($conn, "SELECT * FROM title WHERE id = '601'");
		$row_query = mysqli_fetch_assoc($query);
	
		?>
		<h2 class="logo"><?= $row_query['nama'] ?></h2>
		<?php
		?>
			<ul>
			<?php 
			include "connection.php";
				
			$querySQL = "SELECT * FROM navi";
			$execQuerySQL = mysqli_query($conn,$querySQL);
			
			if (mysqli_num_rows($execQuerySQL) > 0) {
			while($row = mysqli_fetch_assoc($execQuerySQL)) {
			?>
				<li><a href="<?= $row['url'] ?>"> <?= $row['nama'] ?> </a></li>
            <?php
				}
			}?>
			</ul>
		</nav>

		<div class="content">
			<?php 
			include "connection.php";
				
			$querySQL = "SELECT * FROM home";
			$execQuerySQL = mysqli_query($conn,$querySQL);
			
			if (mysqli_num_rows($execQuerySQL) > 0) {
			while($row = mysqli_fetch_assoc($execQuerySQL)) {
			?>
				<h4><?= $row['hello'] ?></h4>
				<h1><?= $row['name'] ?></h1>
				<h3><?= $row['job'] ?></h3>
			<?php
				}
			}?>
		
		</div>
</div>
</body>
</html>
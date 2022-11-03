<!DOCTYPE html>
<html>
<head>
	<?php 
	include "connection.php";
				
	$query = mysqli_query($conn, "SELECT * FROM background WHERE id = '6904'");
	$row_query = mysqli_fetch_assoc($query);
	
	?>
	<body background="img/<?= $row_query['background'] ?>" style="background-size: cover;background-position: center"/>
	<?php
	?>
	<title>Contact Us</title>
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
	cursor: pointer;
	}
	nav ul li{
	list-style-type: none;
	display: inline-block;
	padding: 10px  25px;
	}
	nav ul li a{
	color: white;
	text-decoration: none;
	font-weight: bold;
	text-transform: capitalize;
	font-size: 20px;
	}
	nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
	}
	.title h2{
	color: white;
	font-size: 75px;
	width: 1130px;
	margin: 10px auto;
	text-align: center;
	padding-top: 60px;
	}
	.social{
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	padding-top: 20px;
	}
	.social img{
	width: 90px;
	height: 90px;
	margin:25px 0px;
	}
	.social img:hover{
	transform: scale(1.3);
	transition: .3s;
	}
	.socialm{
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	padding-left: 70px;
	padding-right: 45px;
	}
	.socialm p{
	color: white;
	font-size: 25px;
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

		<div class="title">
		<?php 
		include "connection.php";
				
		$query = mysqli_query($conn, "SELECT * FROM title WHERE id = '604'");
		$row_query = mysqli_fetch_assoc($query);
	
		?>
		<h2 class="logo"><?= $row_query['nama'] ?></h2>
		<?php
		?>
		</div>
		
	<div class="social">
		<?php 
		include "connection.php";
				
		$querySQL = "SELECT * FROM contact";
		$execQuerySQL = mysqli_query($conn,$querySQL);
			
		if (mysqli_num_rows($execQuerySQL) > 0) {
		while($row = mysqli_fetch_assoc($execQuerySQL)) {
		?>
			<a href="<?= $row['url'] ?>">
				<img src="img/<?= $row['gambar'] ?>"/>
			</a>
		<?php
			}
		}?>
	</div>
	<div class="socialm">
		<?php 
		include "connection.php";
				
		$querySQL = "SELECT * FROM contact";
		$execQuerySQL = mysqli_query($conn,$querySQL);
			
		if (mysqli_num_rows($execQuerySQL) > 0) {
		while($row = mysqli_fetch_assoc($execQuerySQL)) {
		?>
			<p><?= $row['nama'] ?></p>
		<?php
			}
		}?>
	</div>		
</div>
</body>
</html>
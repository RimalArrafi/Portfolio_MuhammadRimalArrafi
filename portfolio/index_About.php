<!DOCTYPE html>
<html>
<head>
	<?php 
	include "connection.php";
				
	$query = mysqli_query($conn, "SELECT * FROM background WHERE id = '6902'");
	$row_query = mysqli_fetch_assoc($query);
	
	?>
	<body background="img/<?= $row_query['background'] ?>" style="background-size: cover;background-position: center"/>
	<?php
	?>
	<title>About</title>
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
	font-weight: bold;
	text-transform: capitalize;
	font-size: 20px;
	}
	nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
	}
	.hero img{
	padding-top: 100px;
	height: auto;
	width: 400px;
	}
	.about-text{
	width: 550px;
	}
	.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
	}
	.about-text h2{
	color: white;
	font-size: 75px;
	text-transform: capitalize;
	margin-bottom: 20px;
	padding-top: 85px;
	}
	.about-text h5{
	color: white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
	}
	.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
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

		<div class="main">
		<?php 
		include "connection.php";
				
		$querySQL = "SELECT * FROM images";
		$execQuerySQL = mysqli_query($conn,$querySQL);
		$row = mysqli_fetch_assoc($execQuerySQL);
		
		?>
		<img src="img/<?= $row['gambar'] ?>"/>
		<?php
		?>
		
			<div class="about-text">
            <?php 
			include "connection.php";
				
			$querySQL = "SELECT * FROM about";
			$execQuerySQL = mysqli_query($conn,$querySQL);
			
			if (mysqli_num_rows($execQuerySQL) > 0) {
			while($row = mysqli_fetch_assoc($execQuerySQL)) {
			?>
				<h2><?= $row['head'] ?></h2>
				<h5><?= $row['tittle'] ?></h5>
				<p><?= $row['content'] ?></p>
            <?php
                }
            }?>
			</div>
		</div>
</div>	
</body>
</html>
<?php
	session_start();
	function ln_countr(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$ln_count = 0;
		$query1 = "select count(*) as count1 from light_novel";
		$query_run = mysqli_query($connection,$query1);
		while($row=mysqli_fetch_assoc($query_run)){
			$ln_count=$row['count1'];
		}
		return($ln_count);}
		function ln_countr1(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$ln_count = 0;
		$query1 = "select count(*) as count1 from anime";
		$query_run = mysqli_query($connection,$query1);
		while($row=mysqli_fetch_assoc($query_run)){
			$ln_count=$row['count1'];
		}
		return($ln_count);}
		function ln_countr2(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$ln_count = 0;
		$query1 = "select count(*) as count1 from manga";
		$query_run = mysqli_query($connection,$query1);
		while($row=mysqli_fetch_assoc($query_run)){
			$ln_count=$row['count1'];
		}
		return($ln_count);}
		?>
<!DOCTYPE html>
<html>
<head>
	<title>anime</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			color: #ffffff;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Anime Database Management System</a>
			</div>
		</div>
	</nav><br>
	<span><marquee style="background-image: url('img/bg.png'); color: #ffffff; height:40px;">Welcome to our anime world.</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar" style="background-image: url('img/background.jpg');" text>
			<h5>Upcoming Animes</h5>
			<ul>
				<li>Solo Leveling</li>
				<li>The Begining After The End</li>
				<li>Mob Psycho 100 (Season 3)</li>
			</ul>
			<h5>Best Running Animes</h5>
			<ul>
				<li>One Piece</li>
				<li>Jujutsu Kaisen</li>
				<li>Demon Slayer</li>
				<li>Boruto</li>
				<li>Attack On Titan</li>
			</ul>
		</div>		
		<div class="col-md-8" id="main_content" style="background-image: url('img/bg2.jpg'); color: #ffffff;" >
			<center><h3>Options</h3></center>
			<center><h3>Number of light novels: <?php echo ln_countr();?></h3></center>
			<center><h3>Number of anime: <?php echo ln_countr1();?></h3></center>
			<center><h3>Number of manga: <?php echo ln_countr2();?></h3></center><br>
			<center><a href="anime.php"><button class="btn btn-primary">View Anime</button></a></center><br>
			<center><a href="manga.php"><button class="btn btn-primary">View Manga</button></a></center><br>
			<center><a href="lightnovel.php"><button class="btn btn-primary">View Light Novel</button></a></center>

			
	</div>
	</div>
</body>
</html>
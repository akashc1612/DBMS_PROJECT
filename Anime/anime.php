<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$anime_id="";
		$animename="";
		$director="";
		$dor="";
		$prod="";
		$bud="";
		$query = "select anime.*,budget,prname from anime,produces,productions where anime.animeid=produces.animeid and produces.prid=productions.prid";
		?>
<!DOCTYPE html>
<html>
<head>
	<title>anime</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Anime Database Management System</a>
			</div>
		</div>
	</nav><br>
	<span><marquee style="background-image: url('img/bg.png'); color: #ffffff; height:40px;">This is our anime database.</marquee></span><br><br>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Anime ID:</th>
					<th>Anime Name:</th>
					<th>Anime Director:</th>
					<th>First Date of Release:</th>
					<th>Productions:</th>
					<th>Budget per Episode:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$anime_id = $row['animeid'];
						$animename = $row['animename'];
						$director = $row['director'];
						$dor = $row['dor'];
						$prod = $row['prname'];
						$bud = $row['budget'];
				?>
						<tr>
							<td><?php echo $anime_id;?></td>
							<td><?php echo $animename;?></td>
							<td><?php echo $director;?></td>
							<td><?php echo $dor;?></td>
							<td><?php echo $prod;?></td>
							<td><?php echo $bud;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div><br><br>
<center><a href="addanimefromln.php"><button class="btn btn-primary">Convert Anime from Light Novel</button></a></center><br>
<center><a href="addanimefrommanga.php"><button class="btn btn-primary">Convert Anime from Manga</button></a></center><br>
</body>
</html>
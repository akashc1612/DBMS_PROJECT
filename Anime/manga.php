<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$manga_id="";
		$manganame="";
		$writer="";
		$dor="";
		$artist="";
		$sales="";
		$query = "select * from manga";
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
	<span><marquee style="background-image: url('img/bg.png'); color: #ffffff; height:40px;">This is our manga database.</marquee></span><br><br>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Manga ID:</th>
					<th>Manga Name:</th>
					<th>Writer:</th>
					<th>First Date of Release:</th>
					<th>Artist:</th>
					<th>Sales:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$manga_id = $row['mangaid'];
						$manganame = $row['manganame'];
						$writer = $row['writer'];
						$dor = $row['dor'];
						$artist = $row['artist'];
						$sales = $row['sales'];
				?>
						<tr>
							<td><?php echo $manga_id;?></td>
							<td><?php echo $manganame;?></td>
							<td><?php echo $writer;?></td>
							<td><?php echo $dor;?></td>
							<td><?php echo $artist;?></td>
							<td><?php echo $sales;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div><br><br>
<center><a href="addmanga.php"><button class="btn btn-primary">Convert Manga from Light Novel</button></a></center><br>
	
</body>
</html>




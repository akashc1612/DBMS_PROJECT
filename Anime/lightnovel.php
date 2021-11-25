<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$ln_id="";
		$lnname="";
		$author="";
		$dor="";
		$ratings="";
		$query = "select * from light_novel";
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
	<span><marquee style="background-image: url('img/bg.png'); color: #ffffff; height:40px;">This is our Light Novel database.</marquee></span><br><br>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>Light Novel ID:</th>
					<th>Light Novel Name:</th>
					<th>Author:</th>
					<th>First Date of Release:</th>
					<th>Rating:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$ln_id = $row['lnid'];
						$lnname = $row['lnname'];
						$author = $row['author'];
						$dor = $row['dor'];
						$ratings = $row['ratings']
				?>
						<tr>
							<td><?php echo $ln_id;?></td>
							<td><?php echo $lnname;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $dor;?></td>
							<td><?php echo $ratings;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div><br><br>
</body>
</html>
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
	<span><marquee style="background-image: url('img/bg.png'); color: #ffffff; height:40px;">Convert Light Novel to Manga.</marquee></span><br><br>
	<div class="col-md-8" id="main_content">
		<center><h3>Please Enter the details:</h3></center>
		<form action="addmanga1.php" method="post">
			<div class = "form-group">
				<label for="lnid">Light Novel ID:</label>
				<input type="text" name="lnid" class="form-control" required>
			</div>
			<div class= "form-group">
				<label for="artist">Artist:</label>
				<input type="text" name="artist" class="form-control" required>
			</div>
			</div>
			<center><button type="submit" class="btn btn-primary">Add</button></center>
		</form>
	</div>
</body>
</html>

<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$query0 = "select manganame,dor from manga where mangaid=$_POST[mangaid]";
		$manganame="";
		$dor="";
		$query_run0=mysqli_query($connection,$query0);
		while($row = mysqli_fetch_assoc($query_run0)){
			$manganame = $row['manganame'];
			$dor = $row['dor'];
		}
		$query = "insert into anime values(null,'$manganame','$_POST[director]','$dor',null,'$_POST[mangaid]')";
		$query_run = mysqli_query($connection,$query);
		$query2 = "select animeid from anime where mangaid=$_POST[mangaid]";
		$animeid="";
		$query_run2 = mysqli_query($connection,$query2);
		while($row = mysqli_fetch_assoc($query_run2)){
			$animeid = $row['animeid'];
		}
		$query1 = "insert into produces values('$animeid','$_POST[prid]','$_POST[budget]')";
		$query_run1 = mysqli_query($connection,$query1);
		?>
		<script type="text/javascript">
			alert("Converted to Anime Successfully")
			window.location.href = "anime.php";
		</script>
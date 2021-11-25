<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$query0 = "select lnname,dor from light_novel where lnid=$_POST[lnid]";
		$lnname="";
		$dor="";
		$query_run0=mysqli_query($connection,$query0);
		while($row = mysqli_fetch_assoc($query_run0)){
			$lnname = $row['lnname'];
			$dor = $row['dor'];
		}
		$query = "insert into anime values(null,'$lnname','$_POST[director]','$dor','$_POST[lnid]',null)";
		$query_run = mysqli_query($connection,$query);
		$query2 = "select animeid from anime where lnid=$_POST[lnid]";
		$animid="";
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
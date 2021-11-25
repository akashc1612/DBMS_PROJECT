<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"anime");
		$query0 = "select lnname,dor,author from light_novel where lnid=$_POST[lnid]";
		$lnname="";
		$dor="";
		$writer="";
		$sales=0;
		$query_run0=mysqli_query($connection,$query0);
		while($row = mysqli_fetch_assoc($query_run0)){
			$lnname = $row['lnname'];
			$dor = $row['dor'];
			$writer = $row['author'];
		}
		$query = "insert into manga values(null,'$lnname','$sales','$writer','$dor','$_POST[artist]')";
		$query_run = mysqli_query($connection,$query);
		$query2 = "select mangaid from manga where mangaid=(select max(mangaid) from manga)";
		$mangaid="";
		$astatus="FULL";
		$query_run2 = mysqli_query($connection,$query2);
		while($row = mysqli_fetch_assoc($query_run2)){
			$mangaid = $row['mangaid'];
		}
		$query1 = "insert into adapts values('$_POST[lnid]','$mangaid','$astatus')";
		$query_run1 = mysqli_query($connection,$query1);
		?>
		<script type="text/javascript">
			alert("Converted to Manga Successfully")
			window.location.href = "manga.php";
		</script>
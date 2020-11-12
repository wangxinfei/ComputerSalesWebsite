<?php
include("dbconfig.php");
	if(ensure_logged_in()){
		$uiphone=$_SESSION['uiphone'];
		$sql="DELETE from temp_cart where tuiphone = '$uiphone'";
		$res=$db->query($sql);
		echo "<script> location.href='member_order.php'; </script>";
	}
?>

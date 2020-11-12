<?php
include("dbconfig.php");
	if(ensure_logged_in()){
	
		$ocoid=$_GET['ocoid'];
		$coid='100002117926';
		$uiphone=$_SESSION['uiphone'];

		$sql = "SELECT ocoid FROM morder where ocoid = $ocoid and ouiphone = '$uiphone'";
		$res = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($res) > 0) {
			$sql = "delete from morder where ocoid = $ocoid and ouiphone = '$uiphone'";
			$result = mysqli_query($db, $sql);
			echo "<script> alert('删除订单成功');parent.location.href='member_order.php'; </script>"; 
		} else {
			echo "删除订单失败";
		}
		mysqli_close($db);
	}
?>
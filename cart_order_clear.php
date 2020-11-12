<?php
include("dbconfig.php");
	if(ensure_logged_in()){
		$uiphone=$_SESSION['uiphone'];
		$sql="DELETE from cart where cauiphone = '$uiphone'";
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			echo "SQL错误";
			exit;
		}
		echo "<script> location.href='member_order.php'; </script>";
	}
?>

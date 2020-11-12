<?php
header("charset=utf-8");
include("dbconfig.php");
	$uiphone=$_GET['uiphone'];
	//echo $uiphone;
	$sql="DELETE from cart where cauiphone = '$uiphone'";
	$db->query($sql);
	//echo $sql;
	echo "<script>alert('删除成功！'); location.href='cart.php';</script>";
?>
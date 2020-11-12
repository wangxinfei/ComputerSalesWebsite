<?php
header("charset=utf-8");
include("dbconfig.php");
	$cid=$_GET['cid'];
	$sql="DELETE from computer where cid = '$cid'";
	$db->query($sql);
	echo "<script>alert('删除成功！'); location.href='goods.php';</script>";
?>
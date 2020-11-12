<?php
header("charset=utf-8");
include("dbconfig.php");

	if(isset($_GET['cid'])){
		$cid=$_GET['cid'];
		$sql="DELETE from computer where cid = '$cid'";
		$db->query($sql);
		echo "<script>alert('删除成功！'); location.href='goods.php';</script>";
	}
	if(isset($_GET['uiphone'])){
		$uiphone=$_GET['uiphone'];
		$sql="DELETE from userinfo where uiphone = '$uiphone'";
		$db->query($sql);
		echo "<script>alert('删除成功！'); location.href='members.php';</script>";
	}
?>
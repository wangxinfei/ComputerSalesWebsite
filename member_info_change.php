<?php
include("dbconfig.php");
//header("charset=utf-8");
	
	$uiphone = $_SESSION['uiphone'];
    $uickname = $_POST['uickname'];
    $uiname = $_POST['uiname'];
    $uisex = $_POST['uisex'];
    $uiadress = $_POST['uiadress'];

	$sql = "SELECT uiphone FROM userinfo where uiphone = '$uiphone'";
	$res = mysqli_query($db, $sql);
	if (mysqli_num_rows($res) > 0) {
		$sqlalter = "update userinfo set uickname = '$uickname', uiname = '$uiname', uisex = '$uisex', uiadress = '$uiadress' where uiphone = '$uiphone'";
		$db->query($sqlalter);
		echo "<script>alert('修改成功！'); location.href='member_info.php';</script>";
	} else {
		echo "<script>alert('修改失败！');</script>";
	}
	mysqli_close($db);
	
?>
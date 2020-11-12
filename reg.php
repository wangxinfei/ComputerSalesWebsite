<?php
include("dbconfig.php");

	$uphone=$_POST['user'];
	$upwd=$_POST['mobile_pwd'];
	$uitime=date("Y-m-d");
	$sql = "INSERT INTO user ".
        "(uphone,upwd) ".
        "VALUES ".
        "('$uphone','$upwd')";
	//接收返回值
	$mysqli_result=$db->query($sql);
	if($mysqli_result == false){
		echo "SQL错误";
		exit;
	}else{
		$sql = "INSERT INTO userinfo ".
        "(uiphone,uicart,uitime) ".
        "VALUES ".
        "('$uphone','$uphone','$uitime')";
        //echo $sql;
        $mysqli_result=$db->query($sql);
        if($mysqli_result == true){
        	$_SESSION["uiphone"] = $uphone;
        	echo "<script>alert('注册成功！点击进入我的首页，完善信息'); location.href='member_info.php';</script>";
        }
	}
?>
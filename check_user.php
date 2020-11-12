<?php 
header("Content-type:text/html;charset=utf-8"); 
include("dbconfig.php"); 
	if($_POST['user']){ 
		$user=$_POST['user']; 
		$check = '/^(1(([35789][0-9])|(47)))\d{8}$/';
		if (preg_match($check, $user)) {

			$sql="SELECT uphone FROM user where uphone = '$user'";
			//接收返回值
			$mysqli_result=mysqli_query($db, $sql);
			$row=mysqli_fetch_row($mysqli_result);
			if($row) 
				echo "<font color=red>此手机号已被注册！</font>"; 
			else 
				echo "<font color=red></font>"; 
		}else{
			echo "<font color=red>输入手机号不合法</font>";
		}
		
	}else{
		echo "<font color=red>请输入手机号</font>";
	}
?> 
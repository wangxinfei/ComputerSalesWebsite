<?php
	include("dbconfig.php");
	if(isset($_POST['uphone']) && isset($_POST['upwd'])){
		$uphone = $_POST['uphone'];
    	$upwd = $_POST['upwd'];

    	if(is_password_correct($uphone, $upwd)){
    		if(isset($_SESSION)){
    			session_destroy();
    			session_regenerate_id(true);
    			session_start();
    		}
    		$_SESSION["uiphone"] = $uphone;
    		redirect("index.php", "登录成功！");
    	}else{
    		//echo "fail111";
    		echo "<script>alert('账号或密码错误！'); location.href='login.html';</script>";
    	}
	}
?>
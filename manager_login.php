<?php
include("dbconfig.php");
	if(isset($_POST['madmin']) && isset($_POST['mpaw'])){
		$madmin = $_POST['madmin'];
    	$mpaw = $_POST['mpaw'];

    	if(is_password_correct_manager($madmin, $mpaw)){
    		if(isset($_SESSION)){
    			session_destroy();
    			session_regenerate_id(true);
    			session_start();
    		}	
    		$_SESSION["manager"] = $madmin;
    		redirect("goods.php", "登录成功！");
    	}else{
    		echo "fail111";
    		echo "<script>alert('账号或密码错误！'); location.href='manager_login.html';</script>";
    	}
	}
	mysqli_close($db);
?>
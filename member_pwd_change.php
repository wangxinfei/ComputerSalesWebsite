<?php
include("dbconfig.php");
	$uiphone=$_SESSION['uiphone'];
	$upwd=$_POST['newpwd'];
	$sql="SELECT * FROM user where uphone = '$uiphone'";
  //接收返回值
  $mysqli_result=$db->query($sql);
  if($mysqli_result == false){
    echo "SQL错误";
    exit;
  }
  //用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
  $user;
  if($mysqli_result->fetch_array(MYSQL_ASSOC)){
    $sql="UPDATE user set upwd = '$upwd' where uphone = '$uiphone'";
    $result=$db->query($sql);
    if($result){
    	echo "<script>alert('修改密码成功，请重新登录！'); location.href='login.html';</script>";
    }else{
		echo "error123";
    }
  }

?>
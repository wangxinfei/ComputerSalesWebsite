<?php
	$uiphone=$_SESSION['uiphone'];
	
	$sql="SELECT * FROM userinfo where uiphone = '$uiphone'";
	//接收返回值
	$mysqli_result=$db->query($sql);
	if($mysqli_result == false){
		echo "SQL错误";
		exit;
	}
	//用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$user=$row;
	}
?>
<div class="cmain">
	<div class="headtop">
		<!--头部左边-->
		<div class="top-left fl">
			<a title="七颗星" href="index.php"> <img width="187" height="42" alt="七颗星官网" src="images/logos/logo.jpg" /> </a>
			<span style="font-weight: normal;">七颗星电脑商城</span>
		</div>
		<!--头部左边end-->
		<!--头部右边-->
		<div class="top-right fr">	
			<!--登录注册-->
			<ul class="tright-ul fl">
				<div id="ctl00_ucheader_pllogin2">
					<li><a><span id="ctl00_ucheader_lit">欢迎您：<?php echo $user['uickname']; ?></span></a></li>
					<li> <a href="logoutuser.php" onClick="return confirm('确定退出吗?');" rel="nofollow">退出</a><em>|</em> </li>
					<li><a target="black" rel="nofollow" href="member_index.php">我的</a><em>|</em></li>
					<li class="headed"><em class="icon shooping"></em><a target="black" rel="nofollow" href="cart.php">购物车</a><i></i></li>
				</div>
			</ul>
		</div>
		<!--头部右边end-->
	</div>
</div>
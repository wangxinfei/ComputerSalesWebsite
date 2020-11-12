<?php
include("dbconfig.php");
	if(ensure_logged_in()){
		$uiphone=$_SESSION['uiphone'];
		$type=2;
		if(isset($_GET['type'])){
			$type=$_GET['type'];
		}
		$summoney=$_GET['summoney'];
		$sql="SELECT * FROM userinfo where uiphone = '$uiphone'";
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			echo "SQL错误";
			exit;
		}
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$user=$row;
		}
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<meta charset="utf-8" />
		<title>购物车 - 订单提交成功</title>
		<meta charset="utf-8" />
		<link href="css/shopping.css?v=1.3.5" type="text/css" rel="stylesheet" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/shoppcart.js" type="text/javascript"></script>
		<script src="js/ma3.js" type="text/javascript"></script>
		<script type="text/javascript">
			<?php

				if($type==1){
			?>
				function toPay() {
					alert("支付成功");
					location.href="order_add.php";
				}
			<?php
				}else if($type==2){
			?>
				function toPay() {
					alert("支付成功");
					location.href="cart_order_clear.php";
				}
			<?php
				}
			?>
			
		</script>
	</head>

	<body>

		<iframe src="javascript:false;" style="display: none;"></iframe>
		<form id="aspnetForm" action="/ncart/ConfirmOrder.aspx?orderid=20150707888887&amp;process=darryring" method="post" name="aspnetForm">

			<!--全部背景-->
			<div class="all-thing">
				<!--中间内容-->
				<div class="tcmain">
					<!--头部-->
					<div class="shop_top">
						<div class="shopt_left fl">
							<a title="Darry Ring" href="index.php"> <img width="186" height="42" src="images/logos/logo.jpg" /> </a>
							<span>七颗星电脑商城</span>
						</div>
						<div class="shopt_right fr">
							<span id="ctl00_ltlUname">你好！<?php echo $user['uickname']; ?></span>
							<a class="my_dr" href="member_index.php">我的</a>
							<a onClick="javascript:logout()" class="tc_dr" href="logout.php">退出</a>
							<a class="help_dr" href="help.php">帮助中心</a>
						</div>
					</div>
					<!--头部end-->
					
					<!--订单提交-->
					<div class="shop_of-for">
						<div class="shop_ofor-top">
							<img width="54" height="67" src="images/right.png" />
							<h3>订单提交成功，请您尽快完成支付！</h3>
							<h4>请您在24小时内完成付款，超过24小时后系统将自动取消订单。</h4>
							<p class="shop_ofor-font"> <span> 应付总金额：</span> <i style="font-family:微软雅黑;">￥<?php echo $summoney; ?></i> <a target="_blank" href="javascript:history.back(-1);">查看订单&gt;&gt;</a> </p>
						</div>
						<h2>网上支付方式</h2>
						<!--银行-->
						<ul class="shop_ofor-bank">
							<li> <input type="radio" value="85" id="bankzhongguo" name="target" /> <label for="bankzhongguo"> <img width="160" height="43" src="images/bank14.jpg" /> </label> </li>
							<li> <input type="radio" value="59" id="bankyouzheng" name="target" /> <label for="bankyouzheng"> <img width="160" height="43" src="images/bank16.jpg" /> </label> </li>
							<li> <input type="radio" value="8607" id="bankzaixian" name="target" /> <label for="bankzaixian"> <img width="160" height="43" src="images/bank17.jpg" /> </label> </li>
							<li> <input type="radio" value="alipay" id="bankzhifubao" name="target" /> <label for="bankzhifubao"> <img width="160" height="43" src="images/bank18.jpg" /> </label> </li>
						</ul>

						<!--银行end-->
						<!--提交按钮-->
						<div class="shop_ofor-button">
							<div onClick="toPay()" class="bt3">
								<span>立即支付</span>
							</div>
						</div>
						<!--提交按钮end-->
					</div>

					<!--底部-->
					<div class="cmain shop_foot">
						<p>Copyright &copy; 2019 winner winner,chicken dinner All Rights Reserved. 粤ICP备11012085号</p>
						<p>中国互联网违法信息举报中心 | 中国公安网络110报警服务 | 本网站提供所售商品的正式发票</p>
						<div class="shop_foot-img">
							<img width="92px" height="26px" src="images/db.jpg" />
						</div>
					</div>
					<!--底部end-->
				</div>
				<!--全部背景end-->
			</div>
			<script type="text/javascript">
				function logout() {
					if (window.confirm('确定退出吗？')) {
						$.get("/nAPI/QuitExit.ashx", function(data) {
							window.location.href = "logout.php";
						});
					}
				}
			</script>
		</form>

	</body>

</html>
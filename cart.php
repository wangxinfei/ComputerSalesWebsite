<?php

include("dbconfig.php");
	if(ensure_logged_in()){
		
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
		//SQL查询语句，并倒序输出
		$sql="SELECT * FROM cart where cauiphone = '$uiphone'";
		//接收返回值
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			echo "SQL错误";
			exit;
		}
		//用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
		$sum=0;
		$summoney=0;
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$carts[]=$row;
			$sum+=$row['cacoamount'];
			$summoney+=$row['cacomoney'];
		}
	}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">
	<head>
		<title>购物车</title>
		<meta charset="utf-8" />
		<link href="css/shopping.css?v=1.3.5" type="text/css" rel="stylesheet" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/shoppcart.js" type="text/javascript"></script>
	</head>

	<body>
		<iframe src="javascript:false;" style="display: none;"></iframe>
		<form id="aspnetForm" action="/nCart/Cart.aspx" method="post" name="aspnetForm">
			<!--全部背景-->
			<div class="all-thing">
				<!--中间内容-->
				<div class="tcmain">
					<!--头部-->
					<div class="shop_top">
						<div class="shopt_left fl">
							<a title="七颗星" href="index.php"> <img width="186" height="42" src="images/logos/logo.jpg" /> </a>
							<span>七颗星电脑商城</span>
						</div>
						<div class="shopt_right fr">
							<span id="ctl00_ltlUname">你好！<?php echo $user['uickname']; ?></span>
							<a class="my_dr" href="member_index.php">我的</a>
							<a onClick="javascript:logout()" class="tc_dr" href="logoutuser.php">退出</a>
							<a class="help_dr" href="help.php">帮助中心</a>
						</div>
					</div>
					<!--头部end-->
					<!--导航条-->
				
					<!--导航条end-->

					<script type="text/javascript">
						function deleteCart(cid) {
							if (confirm("确认删除？")) {
								
								$.get("/nAPI/Cart.aspx?action=delete&cid=" + cid, function() {
									window.location.reload();
								});
							}
						}

						function clearCart() {
							window.location = "cart_clear.php?uiphone=<?php echo $uiphone ?>";
						}

						function toPay() {
							window.location = "cart_order.php?sum=$sum&&summoney=$summoney&&info='.base64_encode(serialize($carts)).'";

						}
					</script>
					<!--内容-->
					<div class="shop_cort">
						<!--左边-->
						<div class="shop_cort-left fl">
							<h3>查看我的购物车</h3>
							<!--购物车-->
					
							<table cellspacing="0" cellpadding="0" border="0" class="shop_tabble">
								<tbody>
									<tr class="nav_tr">
										<td style="width:240px" class="sp_td">商品</td>
										<td style="width:100px" class="cz_td">品牌</td>
										<td style="width:100px" class="sc_td">类型</td>
										<td style="width:100px" class="kz_td">数量</td>
										<td class="gm_td">购买价</td>
									</tr>
						<?php 
						if(isset($carts))
							foreach ($carts as $cart) {
						?>
									<tr class="cp_tr">
										<td class="sp_td">
											<a href="#" class="jx_shop"> <img width="85" height="85" src="/images/computers/<?php echo $cart['cacopic']?>" /> <span> <?php echo $cart['caconame']; ?></span></a>
										</td>
										<td class="cz_td"><?php echo $cart['cacobrand']; ?></td>
										<td class="sc_td"><?php echo $cart['cacotype']; ?></td>
										<td class="kz_td"><?php echo $cart['cacoamount']; ?></td>
										<td style="font-family:微软雅黑" class="gm_td">￥<?php echo $cart['camoney']; ?></td>
										<td class="close_td"><span onClick="deleteCart(<?php echo $cart['cacoid']; ?>);" class="sicon s_close"></span></td>
									</tr>
						<?php 
							}
						?>
								</tbody>
							</table>
					
							<!--购物车end-->
							<!--结算-->
							<div class="shop_js">
								<a class="jx_shop" href="lists.php">继续购物</a>
								<a class="qk_shop" href="javascript:clearCart();">清空购物车</a>
								<span>你购买了<i><?php echo $sum; ?></i>件商品</span>
								<span>总计：<i style="font-family:微软雅黑" class="fw_bold">￥<?php echo $summoney; ?></i></span>
								<span onClick="toPay();" class="end_bt"><em>立即支付</em></span>
							</div>
							<!--结算end-->
						</div>
						<!--左边end-->
						<!--右边-->
						<!--右边-->
						<div class="shop_cort-right fr">
							<div class="shop_right-nr">
								<h3>购物帮助指南</h3>
								<div class="shop_right-zx line_bottom">
									<p class="shop_lx">24小时在线客服</p>
									<p class="shop_tel">400-13-14520</p>
								</div>
								<div class="shop_right-zf line_bottom">
									<h4>支付安全保障</h4>
									<p>安全支付系统采用SSL加密。</p>
									<ul class="shop_right-ul">
										<li class="shop_cor-yl"></li>
										<li class="shop_cor-cft"></li>
										<li class="shop_cor-zf"></li>
									</ul>
								</div>
								<div class="shop_right-ps">
									<h4>全球配送</h4>
									<p class="shop_kd">支持全球配送,店铺取货</p>
									<p class="shop_bj">全程保价 无风险</p>
								</div>
							</div>
						</div>
						<!--右边end-->
						<!--右边end-->
					</div>
					<!--底部-->
					<div class="cmain shop_foot">
						<p>Copyright &copy; 2019 七颗星 All Rights Reserved. 粤ICP备11012085号</p>
						<p>中国互联网违法信息举报中心 | 中国公安网络110报警服务 | 本网站提供所售商品的正式发票</p>
						<div class="shop_foot-img">
							<img src="images/db.jpg" />
						</div>
					</div>
					<!--底部end-->
				</div>
				<!--全部背景end-->
			</div>
			<script type="text/javascript">
				function logout() {
					if (window.confirm('确定退出吗？')) {
						logoutuser();
					}
				}
			</script>
		</form>
	</body>

</html>
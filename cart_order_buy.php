<?php
include("dbconfig.php");
	if(ensure_logged_in()){

		$uiphone=$_SESSION['uiphone'];

		$cacoid=$_GET['cacoid'];
		$caconame=$_GET['caconame'];
		$cacobrand=$_GET['cacobrand'];
		$cacotype=$_GET['cacotype'];
		$cacopic=$_GET['cacopic'];
		$cacoamount=$_GET['cacoamount'];
		$cacomoney=$_GET['cacomoney'];
		$camoney=$cacoamount*$cacomoney;

		$sql = "INSERT INTO temp_cart (tuiphone, tcacocid, tcaconame, tcacobrand, tcacomoney, tcacopic) VALUES ('".$uiphone."', '" .$cacoid."', '" .$caconame."', '" .$cacobrand."' , '" .$cacomoney."', '" .$cacopic."')";
		mysqli_query($db, $sql);

		$sql="SELECT * FROM userinfo where uiphone = '$uiphone'";
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			echo "SQL错误";
			exit;
		}
		//用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$user=$row;
		}

		//$sql="INSERT into temp_cart (tuiphone, tcacoid, tcaconame, tcacobrand, tcacomoney, tcacopic) values ('$uiphone', '$cacoid', '$caconame', '$cacobrand', '$cacomoney', '$cacopic')";
		
		//echo $sql;
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<meta charset="utf-8" />
		<title>购物车 - 提交订单</title>
		<link href="css/shopping.css?v=1.3.5" type="text/css" rel="stylesheet" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/shoppcart.js" type="text/javascript"></script>
	</head>

	<body>

		<iframe src="javascript:false;" style="display: none;"></iframe>
		<form id="aspnetForm" action="Address.aspx?action=post&amp;process=darryring" method="post" name="aspnetForm">
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
							<a onClick="javascript:logout()" class="tc_dr" href="#">退出</a>
							<a class="help_dr" href="help.php">帮助中心</a>
						</div>
					</div>
					<!--头部end-->
					<script type="text/javascript">
						function addressItemSelected(control) {
							$(control).addClass("check_bk").siblings().removeClass("check_bk");
							$(control).find("input:radio").attr("checked", true);
						}
						//市数据加载事件

						var CityDataLoadEvent = function() {};
						var DistrictDataLoadEvent = function() {};

						$(function() {
							//绑定地址点击事件
							$(".shop_adress-top:not(:last)").each(function() {
								$(this).click(function() {
									hideNewAddress();
									addressItemSelected(this);
								});
							});
							//绑定新增地址事件
							$(".shop_adress-top:last").click(function() {
								//地址标题，新增还是修改
								$(".shop_adress-add h4").text("新增新地址");
								addressItemSelected(this);
								showNewAddress();
							});


							//保存地址按钮事件
							$(".save").click(function() {
								var data = getData();
								if (data.name == "") {
									alert("收货人不能为空。");
									return;
								}
								if (data.street == "") {
									alert("详细地址不能为空。");
									return;
								}
								if (data.postcode == "") {
									alert("邮编不能为空。");
									return;
								}
								if (data.mobile == "" && data.telephone == "") {
									alert("手机号/固定电话必填一个。");
									return;
								}
								var action = "save";
								if (isNaN(data.ID)) {
									action = "add";
								}
							});
						});

						function bindDdlData(cid, data) {
							$(cid).append($("<option value=\"" + data.code + "\">" + data.name + "</option>"));
						}

						function showAddress(id) {
							//地址标题，新增还是修改
							$(".shop_adress-add h4").text("修改地址");
							$(".shop_adress-add").show();
							$(".shop_adress-add").attr("id", "address_" + id);
						}

						function showNewAddress() {
							resetNewAddress();
							$(".shop_adress-add").show();
						}

						function hideNewAddress() {
							$(".shop_adress-add").hide();
						}

						function resetNewAddress() {
							$("#addressName").val("");
							$("#province").val("-1");
							$("#city").val("-1");
							$("#space").val("-1");

							$("#street").val("");
							$("#postcode").val("");
							$("#mobile").val("");
							$("#telephone").val("");
							$("#cbDefaultAddress").attr("checked", false);

							$("#city option:not(:first)").remove();
							$("#district option:not(:first)").remove();
						}

						function getData() {
							var id = $(".shop_adress-add").attr("id");
							id = id ? id.replace("address_", "") : undefined;
							return {
								"ID": id,
								"name": $("#addressName").val(),
								"province": $("#province option:selected").val() == "-1" ? "" : $("#province option:selected").text(),
								"city": $("#city option:selected").val() == "-1" ? "" : $("#city option:selected").text(),
								"district": $("#district option:selected").val() == "-1" ? "" : $("#district option:selected").text(),
								"street": $("#street").val(),
								"postcode": $("#postcode").val(),
								"mobile": $("#mobile").val(),
								"telephone": $("#telephone").val(),
								"IsDefault": $("#cbDefaultAddress").attr("checked")
							};
						}

						function setAddress(data) {
							$("#addressName").val(data.name);
							$("#province option").each(function() {
								if (data.city.indexOf($(this).text()) != -1) {
									$("#province").val($(this).val());
									$("#province").change();
								}
							});
							CityDataLoadEvent = function() {
								$("#city option").each(function() {
									if (data.city.indexOf($(this).text()) != -1) {
										$("#city").val($(this).val());
										$("#city").change();
									}
								});
							};
							DistrictDataLoadEvent = function() {
								$("#district option").each(function() {
									if (data.city.indexOf($(this).text()) != -1) {
										$("#district").val($(this).val());
									}
								});
							};

							$("#street").val(data.street);
							$("#postcode").val(data.code);
							$("#mobile").val(data.mobile);
							$("#telephone").val(data.phone);
							$("#cbDefaultAddress").attr("checked", data.IsDefault);
						}

						function deleteAddress(id) {
							if (confirm("确认是否删除？")) {}
						}

						$(function() {
							$("#aspnetForm").attr("action", "cart_order_success.php?summoney='<?php echo $summoney; ?>'");
						});
					</script>
					<!--内容-->
					<div class="shop_cort">
						<!--左边-->
						<div class="shop_cort-left fl">
							<h3>收货人信息</h3>
							<!--填写地址信息-->
							<div class="shop_cort-adress">
								<!--地址-->
								<div class="shop_adress-top">
									<input type="radio" checked="checked" name="adress" value="61921" />
									<label><?php echo $user['uiadress'] ?> </label>
									<label> <?php echo $user['uiname'] ?>(收) <?php echo $user['uiphone'] ?></label>
									<span>默认地址</span>
								</div>
								<!--地址end-->
								
								<div class="shop_adress-qr">
									<div class="shop_adressqr-top"><a class="fr" href="cart.php">返回购物车&gt;&gt;</a> <span>确认订单信息</span> </div>
									<!--订单-->
									<table cellspacing="0" cellpadding="0" border="0" class="shop_adressqr-of">
										<tbody>
											<tr class="shop_adressqr-first">
												<td class="shop_adress-shoop">商 品</td>
												<td class="shop_adress-cz">品 牌</td>
												<td class="shop_adress-sc">类 型</td>
												<td class="shop_adress-kz">数 量</td>
												<td class="shop_adress-pirce">价 格</td>
											</tr>

												<tr class="shop_adressqr-sec">
													<td class="shop_adress-shoop"><?php echo $caconame ?></td>
													<td class="shop_adress-cz"><?php echo $cacobrand ?></td>
													<td class="shop_adress-sc"><?php echo $cacotype ?></td>
													<td class="shop_adress-kz">1</td>
													<td class="shop_adress-pirce"><span style="font-family:微软雅黑">￥<?php echo $cacoamount ?></span></td>
												</tr>

										</tbody>
									</table>
									<!--订单end-->
									<!--总计-->
									<div class="shop_adress-zj">
										<div class="fl">
											<span>总计</span>
										</div>
										<div class="fr">
											<i>1</i>
											<span>件商品</span>
											<span>应付金额：</span>
											<i style="font-family:微软雅黑" class="fw_bold">￥<?php echo $cacomoney; ?></i>
										</div>
									</div>
									<!--总计-->
									<!--最后一块-->
									<div class="shop_adress-last">
										<div class="shop_adress-ddbz fl">
											<p>订单备注</p>
											<textarea placeholder="此处请勿填写有关支付方面的信息,留言请在50字以内。" class="shop_adress-text" name="ordernote"></textarea>
										</div>
										<div onClick="submitOrder();" class="shop_adress-tjdd fr">
											<div class="bt1 fr">
												<a href="cart_order_success.php?type=1&&summoney=<?php echo $cacomoney; ?>"><span>立即提交订单</span></a>
											</div>
										</div>
									</div>
									<!--最后一块end-->
								</div>
							</div>
							<!--填写地址信息end-->
						</div>
						<!--左边end-->
						<!--右边-->
						<!--右边-->
						<div class="shop_cort-right fr">
							<div class="shop_right-nr">
								<h3>购物帮助指南</h3>
								<div class="shop_right-zx line_bottom">
									<p class="shop_lx">24小时在线客服</p>
									<p class="shop_tel">400-13-13133</p>
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
					<!--内容end-->
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
							window.location.href = "logoutuser.php";
						});
					}
				}
			</script>
		</form>

	</body>

</html>
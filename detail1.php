<?php
	//预先定义连接数据库的参数
	// $host='127.0.0.1';
	// $user='root';
	// $pwd='root';
	// $dbname='db_computermalls';
	// $cid=$_GET['cid'];
	// //通过函数传入参数，与数据库建立连接
	// $db=new mysqli($host, $user, $pwd, $dbname);
	// if($db -> connect_error <> 0){
	// 	echo "连接失败,";
	// 	echo $db-> connect_error;
	// 	exit;
	// }
	// //使不出现乱码
	// $db->query("SET NAMES UTF8");
	//SQL查询语句，并倒序输出
	$sql="SELECT * FROM computer where cid = $cid";
	//接收返回值
	$mysqli_result=$db->query($sql);
	if($mysqli_result == false){
		exit;
	}
	//用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
	$detail;
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$detail=$row;
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<title>钻戒详情</title>
		<meta charset="utf-8" />
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<link href="css/dr.css?v=1.3.5.0" type="text/css" rel="stylesheet" />
		<link href="css/jiathis_counter.css" rel="stylesheet" type="text/css" />
		<link href="css/jiathis_share.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
		<script src="js/buy_xq.js" type="text/javascript"></script>
		<script src="js/Magnifier.js" type="text/javascript"></script>
		<script src="js/fd_hd.js" type="text/javascript"></script>
		<script src="js/navQH.js" type="text/javascript"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/zh_cn.js?siteid=kf_9883" data-requiremodule="lang"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/chat.in.js?siteid=kf_9883" data-requiremodule="chatManage"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/nt2.js?siteid=kf_9883" data-requiremodule="Window"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/zh_cn.js?siteid=kf_9883" data-requiremodule="lang"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/chat.in.js?siteid=kf_9883" data-requiremodule="chatManage"></script>
		<script type="text/javascript" async="async" charset="utf-8" src="js/nt2.js?siteid=kf_9883" data-requiremodule="Window"></script>
		<script language="javascript" type="text/javascript">
			var CurrentDiamondPrice = 0.00 * 45;
			var FDiamondPrice = 0 * 0;
			var CurrentMaterialPrice = 0;

			function getProductPrice() {
				return formatCurrency(CurrentDiamondPrice + FDiamondPrice + CurrentMaterialPrice);
			}

			$(function() {
				MaterialChoosedEvent = function(m, p) {
					CurrentMaterialPrice = p;
					$(".byright_top span").text("¥" + getProductPrice());
				};
			});

			function addCart(msg) {
				//            alert(msg);
				window.location = "/nCart/Cart.aspx";

			}

			var addCartComplete = function() {};

			function addCartFun() {
				var data = {
					pid: 404,
					caizhi: $(".thr_first .iborder").text()
				};
				$.post("/nAPI/Cart.aspx?action=addcart&type=jewelry", data, function(msg) {
					addCart(msg);

				});
			}

			function formatCurrency(num) {
				num = num.toString().replace(/\$|\,/g, '');
				if (isNaN(num))
					num = "0";
				sign = (num == (num = Math.abs(num)));
				num = Math.floor(num * 100 + 0.50000000001);
				cents = num % 100;
				num = Math.floor(num / 100).toString();
				if (cents < 10)
					cents = "0" + cents;
				for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
					num = num.substring(0, num.length - (4 * i + 3)) + ',' +
					num.substring(num.length - (4 * i + 3));
				var str = (((sign) ? '' : '-') + num + '.' + cents);
				str = str.substr(0, str.length - 3);
				return str;
			}
		</script>
	</head>

	<body>

		<iframe src="javascript:false;" style="display: none;"></iframe>
		<iframe frameborder="0" style="position: fixed; display: none; opacity: 0;"></iframe>
		<div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; top: 50%; left: 50%; overflow: auto;"></div>
		<div class="jiathis_style" style="position: absolute; z-index: 1000000000; display: none; overflow: auto;"></div>
		<form id="aspnetForm" action="/jewelry/404.html" method="post" name="aspnetForm">
			<div>
				<script type="text/javascript">
					function showSearch() {
						window.location = "/diydr/?pname=" + encodeURI($(".search input").val()) + "&bprice=&eprice=&bct=&ect=&orderby=&pagenum=1";
					}
				</script>
				<!--头部-->
				<div class="cmain">
					<div class="headtop">
						<!--头部左边-->
						<div class="top-left fl">
							<a title="Darry Ring" href="index.html"> <img width="187" height="42" alt="七颗星官网" src="images/logos/logo.jpg" /> </a>
							<span style="font-weight: normal;">笔记本电脑商城</span>
						</div>
						<!--头部左边end-->
						<!--头部右边-->
						<div class="top-right fr">
							<!--登录注册-->
							<ul class="tright-ul fl">
								<div id="ctl00_ucheader_pllogin1">
									<li><a rel="nofollow" href="login.html">登录</a><em>|</em></li>
									<li><a rel="nofollow" href="reg.html">注册</a></li>
									<li class="headed"><em class="icon shooping"></em><a target="black" rel="nofollow" href="cart.html">购物车</a><i>(0)</i></li>
								</div>
							</ul>

							<!--搜索框-->
							<div style="display:none;" class="search">
								<input type="text" placeholder="笔记本" class="txt1" />
								<div onClick="showSearch()" class="icon toser">
								</div>
							</div>
						</div>
						<!--头部右边end-->
					</div>
				</div>
				<!--头部end-->
				<!--导航-->
				<div class="nav">
			<div class="cmain">
				<!--导航的左边-->
				<ul class="nav-ul fl">
					<li><a href="index.html">首页</a> </li>
					<li><a href="brand.html">品牌文化</a> </li>
					<li><a style="font-family:arial" href="lists.php">商品</a>
						<div class="nav-div">
							<div class="navdiv_top">
								<div class="navdiv-right">
									<p> <a href="lists.php"> 查看所有款</a></p>
									<p> <a href="/dr_series/12_22.html">轻薄本系列</a></p>
									<p> <a href="/dr_series/11_20.html">游戏本系列</a></p>
									<p> <a href="/dr_series/16_30.html">商用本系列</a></p>
									<p> <a href="/dr_series/15_28.html">二合一系列</a></p>
									<p> <a href="/dr_series/13_24.html">超级本系列</a></p>
								</div>
								<div class="navdiv-left">
									<h3> NEW</h3>
									<a href="detail.html"> <img width="118" height="110" src="images/computers/21.png"/></a>
									<div class="more_cp">
										<a href="detail.html">&gt; 了解该系列产品</a>
									</div>
								</div>
							</div>
							<div class="navdiv_bottom"></div>
						</div>
					</li>
					<li><a href="question.html">常见问题</a></li>
				</ul>

			</div>
		</div>
		<!--导航end-->
				<div class="cort">
					<!--遮罩-->
					<div class="backall">
					</div>
					<!--遮罩end-->
					<!--钻戒页面中间-->
					<div class="cort">
						<div class="tobuy cmain">
							
							<!--购买页中间-->
							<div class="buy_cort">
								<script type="text/javascript">
									/*收藏事件*/
									var favoritesEvent = function() {};
									$(function() {
										try {
											favoritesEvent = function() {
												var _self = this;
												$(_self).unbind("click");
												var url = window.location.href;
												var arr = url.split("/");
												url = arr[arr.length - 1].toString();
												url = url.substring(0, url.indexOf(".html"));
												var price = $(".byright_top span").text();
												price = price.substr(1);
												$.get("/nAPI/favorites.ashx?action=add&pid=404&myParm=" + url + "&price=" + price, function(msg) {
													$(_self).click(favoritesEvent);

													if (msg != "") {
														alert(msg);
													} else {
														favoritesCss(true);
														alert("收藏成功。")
													}
												}, "html");
											};
										} catch (e) {}
										$(".share_sc").click(function() {
											if ('false' == 'false') {
												alert("请登录！");
												window.location.href = 'login.html?forward=index.html/jewelry/404.html';
											}
										});

									});
								</script>
								<!--购买页中间的中间图片-->
								<div class="buycort_center fl">
									<ul class="ul_center">
										<li id="magnifier2083" style="display: list-item;"> <img src="/images/computers/<?php echo $detail['cpicture']?>" alt="锁住一生 LOCK套链 0.006 G-I" /> <span style="position: absolute; left: 248px; top: 248px; display: none; width: 150px; height: 150px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; border: 1px solid rgb(0, 0, 0); cursor: move; opacity: 0.4;"></span>
											<div style="position: absolute; overflow: hidden; width: 300px; height: 300px; top: 0px; right: -385px; border: 1px solid rgb(204, 204, 204); z-index: 99998; display: none;">
												<img src="/images/computers/<?php echo $detail['cpicture']?>" style="position: absolute; left: -498px; top: -498px; width: 800px; height: 800px;" />
											</div>
										</li>
									</ul>
									<!--分享-->
									<div class="share">
										<!-- JiaThis Button BEGIN -->
										<div class="jiathis_style fl">
											<span class="jiathis_txt">分享到：</span>
											<a class="jiathis_button_qzone" title="分享到QQ空间"><span class="jiathis_txt jtico jtico_qzone"></span></a>
											<a class="jiathis_button_tsina" title="分享到新浪微博"><span class="jiathis_txt jtico jtico_tsina"></span></a>
											<a class="jiathis_button_tqq" title="分享到腾讯微博"><span class="jiathis_txt jtico jtico_tqq"></span></a>
											<a class="jiathis_button_renren" title="分享到人人网"><span class="jiathis_txt jtico jtico_renren"></span></a>
											<a target="_blank" class="jiathis jiathis_txt jtico jtico_jiathis" href="http://www.jiathis.com/share"></a>
										</div>
										<script charset="utf-8" src="js/jia.js" type="text/javascript"></script>
										<script charset="utf-8" src="js/plugin.client.js" type="text/javascript"></script>
										<!-- JiaThis Button END -->
									</div>
									<!--分享end-->
								</div>
								<!--购买页中间的中间图片end-->
								<!--购买页中间的右边购买选项-->
								<div class="buycort_right fr">
									<!--钻戒-->
									<div class="byright_top">
										<b style="font-size: 22px;font-style:oblique;"><?php echo $detail['cbrand'].' '.$detail['cname'] ?></b>
										<p style="color: red;font-size: 25px;"> <span>&yen;<?php echo $detail['cprice'] ?></span> </p>
										<div class="byright_top-xq">
											<i>库存：<?php echo $detail['camount'] ?></i>
											<i>类型：<?php echo $detail['ctype'] ?></i>
										</div>
									</div>
									<!--钻戒end-->
									<!--参数-->
									<div class="pho_cs" id="ctl00_content_zbDiv">
										<p> <span>上市时间：</span> <i><?php echo $detail['cprodata'] ?></i> </p>
									</div>
									<!--参数end-->
									<!--选择材质刻字等-->
									<div class="byright_thr">
										<!--第一行-->
										<div id="materialDiv" class="thr_first">
											<span>配置：</span>
										</div>
										<!--第二行-->
										<div class="thr_secound">
											<p style="color:red;word-wrap:break-word;"><?php echo $detail['cdetail'] ?></p>
										</div>
									</div>
									<!--选择材质刻字等end-->
									<p class="thered_word">中国大陆用户付款后15个工作日内可收到货品,其它地区请咨询客服。</p>
									<!--购买选项-->
									<div id="addCa" class="button buy_button">
										<div title="购买darry ring钻戒" class="bt1">
											<span>加入购物车</span>
										</div>
										<div title="把darry ring加入购物车" class="bt2">
											<span>立即购买</span>
										</div>
									</div>
								</div>
								<!--购买页中间的右边end-->
							</div>
							<!--购买页中间end-->
						</div>
						<script type="text/javascript" language="javascript">
							$(function() {
								CommentLoadEvent = function(datacount) {
									$(".gdnav_ul #commentDataCount").text("(" + datacount + ")");
								};

							});
						</script>
						<script>
							function addy(id) {

								$.post("/API/ProductAPI.ashx", {
									action: 'addy',
									id: id
								}, function(data) {
									$("#addy" + id).text('(' + data + ')是');

								});
							}

							function addn(id) {

								$.post("/API/ProductAPI.ashx", {
									action: 'addn',
									id: id
								}, function(data) {
									$("#addn" + id).text('(' + data + ')否');
								});
							}
						</script>
						<script>
							$("#btnyd").click(function() {
								var slect = $("#ctl00_content_ucrelatedinfo_ucappointment_drpListShop option:checked").val();
								var name = $("#txtName").val();
								var tel = $("#txtTel").val();

								if (slect == "-1") {
									alert("请选择预约门店");
									return false;
								}
								if (name == "") {
									alert("请输入姓名！");
									return false;
								}
								if (!checkTel(tel)) {
									alert("请输入正确的手机号！");
									$("#txtTel").val("");
									return false;
								}

								sendMessage(slect, tel);

							});

							function sendMessage(action, tel) {
								$.get("/API/SendMessageAPI.ashx", {
									action: action,
									tel: tel
								}, function(data) {
									if (contains(data, "ok", true)) {
										alert("店铺地址发送成功！");
										$("#txtTel").val("");
										$("#txtName").val("");
									}
								});
							}

							function contains(string, substr, isIgnoreCase) {
								if (isIgnoreCase) {
									string = string.toLowerCase();
									substr = substr.toLowerCase();
								}
								var startChar = substr.substring(0, 1);
								var strLen = substr.length;
								for (var j = 0; j < string.length - strLen + 1; j++) {
									if (string.charAt(j) == startChar) //如果匹配起始字符,开始查找
									{
										if (string.substring(j, j + strLen) == substr) //如果从j开始的字符与str匹配，那ok
										{
											return true;
										}
									}
								}
								return false;
							}
							//
							function checkTel(tel) {
								var mobile = /^1[3-8]+\d{9}$/;
								return mobile.test(tel);
							}
						</script>
						<!--预约其他功能end-->

						<!--验证购买-->
						<script src="js/click_hide.js" type="text/javascript"></script>
						<script src="js/index_clear.js" type="text/javascript"></script>
						<!--验证身份框-->
						<div class="yz_password">
							<div class="yzp_border">
								<div class="yzpb_top">
								</div>
								<!--未购买过Darryring-->
								<div style="display: none" class="yzpb_cort toyz_nobuy wgm">
									<h3> 真爱验证</h3>
									<h4> Darry Ring 求婚钻戒，男士一生只能定制一枚</h4>
									<p> <span id="ng"></span>先生 您好！</p>
									<p> 对不起,所有的饰品需要购买过Darry Ring求婚钻戒后才可以购买!</p>
									<p> 点击<a href="lists.html">这里</a>购买Darry Ring求婚钻戒，祝您购物愉快 ！</p>
								</div>
								<!--未购买过end-->
								<!--未登陆-->
								<div style="display: none" class="yzpb_cort toyz_buyit wdl">
									<h3> 真爱验证</h3>
									<h4> Darry Ring 求婚钻戒，男士一生只能定制一枚</h4>
									<p> 所有饰品仅限拥有Darry Ring求婚钻戒的恋人购买</p>
									<p> 您尚未登录，无法购买请<a href="javascript:backLogin();">登录</a>/<a href="reg.html">注册</a></p>
								</div>
								<!--未登陆 end-->
								<!--购买过Darry钻戒-->
								<div style="display: none" class="yzpb_cort toyz_buyit haveDarry">
									<h3> 真爱验证</h3>
									<h4> Darry Ring 求婚钻戒，男士一生只能定制一枚</h4>
									<p> <span id="cg"></span>先生 您好！</p>
									<p> 您已成功订购Darry Ring，所有饰品均可任意购买!</p>
									<p> 谢谢您对Darry Ring的支持 ，祝您购物愉快。</p>
									<div class="ts_button">
										<div id="btnBuy" class="bt2">
											<span>立即购买</span>
										</div>
									</div>
								</div>
								<!--购买过Darry钻戒-->
								<!--购买过Darry钻戒-->
								<div style="display: none" class="yzpb_cort toyz_buyit notCart">
									<h3> 真爱验证</h3>
									<h4> Darry Ring 求婚钻戒，男士一生只能定制一枚</h4>
									<p> <span id="noCart"></span>先生 您好！</p>
									<p> 您的购物车已存在Darry Ring钻戒，所有饰品均可任意购买!谢谢您对Darry Ring的支持 ，祝您购物愉快。</p>
									<div class="ts_button">
										<div id="btnbuy2" class="bt2">
											<span>立即购买</span>
										</div>
									</div>
								</div>
								<!--购买过Darry钻戒-->
								<!--未付款的DR钻戒订单-->
								<div style="display: none" class="yzpb_cort toyz_buyit" id="noPayOrder">
									<h3> 真爱验证</h3>
									<h4> Darry Ring 求婚钻戒，男士一生只能定制一枚</h4>
									<p> <span id="noPay"></span>先生 您好！</p>
									<p>你有未付款DR求婚钻戒订单，请先付款成为DR用户才能购买饰品<br />点击<a href="member_order.html">这里</a>进行付款，祝您购物愉快！</p>
								</div>
								<!--未付款的DR钻戒订单-->
								<div class="yzpb_bottom">
								</div>
							</div>
							<!--close-->
							<div class="yz_close">
							</div>
							<!--close end-->
						</div>
						<!--验证身份框end-->
						<script language="javascript" type="text/javascript">
							function backLogin() {
								var currentUrl = window.location.href;
								window.location.href = "login.html?forward=" + currentUrl;
							}

							function strlength(str) {
								num = str.length;
								var arr = str.match(/[^\x00-\x80]/ig);
								if (arr != null) num += arr.length;
								return num;
							}
							String.prototype.replaceAll = function(s1, s2) {
								return this.replace(new RegExp(s1, "gm"), s2);
							}
							$(function() {
								$('#addCa').click(function() {
									var manHand = $("#ctl00_content_ddlManHandsize").val();
									var womanHand = $("#ctl00_content_ddlWomanHandsize").val();
									if (manHand == -1 || womanHand == -1) {
										alert("请选择手寸。");
										return;
									}
									if ($(".thr_first .iborder").text() == null || $(".thr_first .iborder").text() == "") {
										alert("请选择材质");
										return;
									}
									if ($("#manFont").length > 0) {
										var mfontlen = strlength($("#manFont").val());
										if (mfontlen > 10) {
											alert("男戒刻字数超过了10个字符。");
										}
									}
									if ($("#womanFont").length > 0) {
										var wfontlen = strlength($("#womanFont").val());
										if (wfontlen > 10) {
											alert("女戒刻字数超过了10个字符。");
										}
									}
									if ($("#ipt_font").length > 0) {

										if ($("#ctl00_content_ddlHandSize").val() == -1) {
											alert("请选择手寸。");
											return;
										}

									}
									//判断是否登录
									if ('false' == "true") {
										$.get("/API/DarryringYzAPI.ashx", {
											action: 'darryhome'
										}, function(data) {
											var json = $.parseJSON(data);
											if (json.Status == "true") {

												$(".yz_password").hide();
												addCartFun();
												return false;
											} else if (json.MsgCode == "NoPay") {
												$(".notCart").hide();
												$(".haveDarry").hide();
												$(".wgm").hide();
												$('.yz_password').show();
												$('.backall').show();
												$("#noPayOrder").show();
												$("#noPay").text(json.Name);
												return false;
											} else {

												//未购买
												//判断购物车中是否存在Darry钻戒
												$.get("/API/DarryringYzAPI.ashx", {
													action: 'cart'
												}, function(dat) {
													//购物车中不存在Darry钻戒

													if (dat == "false") {

														$(".notCart").hide();
														$(".haveDarry").hide();
														$(".wgm").show();
														$('.yz_password').show();
														$('.backall').show();

														return false;
													} else {
														$(".yz_password").hide();
														addCartFun();
													}
												});
											}
										});

									} else {
										//未登录
										$(".wdl").show();
										$('.yz_password').show();
										$('.backall').show();

									}
								});
								$("#btnBuy").click(function() {
									addCartFun();
									$(".yz_password").hide();
									$(".wdl").hide();
									$(".carthave").hide();
									$('.yz_password').hide();
									$(".toyz_nobuy").hide();
									$('.backall').hide();
									$(".wgm").hide();
									$(".notCart").hide();
								});
								$("#btnbuy2").click(function() {
									addCartFun();
								});
								$('.yz_close').click(function() {
									$(".yz_password").hide();
									$(".wdl").hide();
									$(".carthave").hide();
									$('.yz_password').hide();
									$(".toyz_nobuy").hide();
									$('.backall').hide();
									$(".wgm").hide();
									$(".notCart").hide();
								});

							});
						</script>
					</div>
				</div>
				<!--底部-->
				<div class="footer">
					<!--错误-->
					<!--提示-->
					<div class="loverit_word2">
						Darry Ring严格规定男士凭身份证一生仅能定制一枚，象征男人一生真爱的最高承诺。输入身份证号码即可查询购买记录。
					</div>
					<!--提示end-->
					<div class="loverit_wrong2">
						<p>信息填写不正确，请重新输入。</p>
					</div>
					<!--错误end-->

					<div style="clear:both"></div>
					<div class="cmain">
						<ul class="Service_ul">
							<!--每一块li-->
							<li>
								<div class="Service_ul-img">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p>权威认证</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_2">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 一钻双证</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_3">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 终生保养</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_4">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 以小换大</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_5">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 15天退换</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_6">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 全国免运费</p>
								</a>
							</li>
							<!--每一块li-->
							<li>
								<div class="Service_ul-img bk_7">
									<a href="javascript:void(0)" rel="nofollow"></a>
								</div>
								<a href="javascript:void(0)" rel="nofollow">
									<p> 全程保险</p>
								</a>
							</li>
						</ul>
						<div class="tw-foot">
							<div class="auto" id="Copyright">
								<p> Copyright &copy; 2017 winner winner,chicken dinner All Rights Reserved. 粤ICP备11012085号-2.ICP经营许可证粤B2-20140279 </p>
								<p> 中国互联网违法信息举报中心 | 中国公安网络110报警服务 | 本网站提供所售商品的正式发票 </p>
							</div>
						</div>
					</div>
				</div>
				<div class="model" id="model">
					<div class="Prompt" id="Prompt">
					</div>
					<span id="log_uid" style="display:none"></span>
					<span id="log_uname" style="display:none"></span>
					<span id="log_orderid" style="display:none"></span>
					<span id="log_price" style="display:none"></span>
				</div>
				<script src="http://wpa.b.qq.com/cgi/wpa.php" charset="utf-8" type="text/javascript"></script>
				<!--客服(2014年8月29日)-->
				<div style="display:none" class="Ffloat_kf">
					<div class="fkf_top">
						<div style="cursor: pointer; display: none;" id="bridgehead">
						</div>
						<div id="BizQQWPA"></div>
						<div onClick="showModel(modelsever);" style="cursor: pointer;" class="qq_hover" id="qqTalk_head">
						</div>
						<div id="BizQQWPAB" class="sh">
						</div>
						<div id="bdBridge">
							<a href="javascript:NTKF.im_openInPageChat()"> <img width="75" height="37" src="images/zx.jpg" /></a>
						</div>
					</div>
					<div class="fkf_bottom">
						<img width="92" height="82" alt="Darry Ring 官方微信" src="images/to_erwei.jpg" />
						<a href="#"> <img width="92" height="26" src="images/db.jpg" /></a>
					</div>
				</div>
				<!--新版右边客服start-->
				<!--右边漂浮悬挂大的-->
				<div class="float_big">
					<div class="floatbig_hide fr"></div>
					<div class="floatbig_center">
						<!--客服-->
						<div onClick="javascript:void(0)" id="Bearonline" class="floatbig_center-kf"></div>
						<!--客服end-->
						<!--定制咨询-->
						<div id="dzzxonline" class="floatbig_center-zx">
							<a href="javascript:showModel(modelsever);"></a>
						</div>
						<!--定制咨询end-->
						<img src="images/ew.jpg" />
					</div>
				</div>
				<!--右边漂浮悬挂大的end-->
				<!--右边漂浮悬挂小的-->
				<div class="float_small">
					<div class="floatbig_show fr"></div>
					<div class="floatbig_center">
						<!--客服-->
						<div onClick="javascript:void(0)" class="floatsmall_center-kf fr"></div>
						<!--客服end-->
						<!--二维码-->
						<div class="floatsmall_erwei fr">
							<a href="#"></a>
						</div>
						<!--二维码end-->
					</div>
				</div>
				<!--右边漂浮悬挂小的end-->
				<!--返回顶部-->
				<div class="comeback"></div>
				<!--返回顶部end-->
				<!--新版右边客服end-->
				<div style="position: fixed; cursor: pointer; right: 6px; top: 289px; padding-bottom: 152px; z-index: 9999; width: 19px; height: 103px; display: none;" onClick="openserver();" id="openbnt">
					<img width="19" height="103" src="images/server_03.jpg" />
				</div>
				<div class="news_tc">
					<div class="newtc_left">
					</div>
					<div class="newtc_right">
						<span style="cursor: pointer" class="sszs">稍后再说</span>
						<span class="xzzx"><a onClick="showxiaon()" style="cursor: pointer" id="chatnow"> 现在咨询</a></span>
						<div style="cursor: pointer" class="tocclose">
						</div>
					</div>
				</div>
				<div class="mask" id="masks">
				</div>
				<div style="display:none;" class="modelsever" id="modelsever">
					<div class="cs_top">
						<div class="cs_topcenter">
							<div style="width:300px; height:40px; line-height:40px; float:left; display:inline-block; ">
								顾客常见疑问
							</div>
							<div style="width:385px; height:20px; float:left; text-align:right; padding-top:20px;">
								<img width="55" height="9" style="cursor: pointer;" onClick="CloseMaskser()" src="images/popup_window_btn_close.gif" />
							</div>
						</div>
					</div>
					<div class="cs_content clear">
						<div id="box1" class="box1">
							<div onClick="contenttxt(1,1)" id="content_title_11" class="content_title">
								<span style="margin-top:8px;">Q：Darry Ring 是否有实体店？</span>
							</div>
							<div id="content_title1_1" class="content_txt">
								<span style="margin-top:1px;">A：DR公司总部在香港，目前内地深圳市、北京市、重庆市、广州市、上海市、武汉市、南京市、长沙市设有实体店，支持到店订购，也支持全国在线官网订购。同时目前其他一线城市公司已在考察选址阶段，将陆续开设店面。</span>
							</div>
							<div onClick="contenttxt(1,2)" id="content_title_12" class="content_title">
								<span style="margin-top:8px;">Q：实体店具体位置？</span>
							</div>
							<div id="content_title1_2" class="content_txt">
								<span style="margin-top:1px;">A：深圳实体店地址：深圳南山区世界之窗旁欧陆小镇4号楼Darry Ring （地铁罗宝线世界之窗I出口）深圳店联系方式：0755-86621782。<p></p> 北京实体店地址：北京东二环朝阳门桥银河SOHO中心B座负一层2-109 （朝阳门地铁G出口） 北京店联系方式：010-59576758。<p></p> 上海实体店地址：上海长宁区淮海西路570号红坊创意园区G-108栋(近虹桥路) 上海店联系方式：021-60934520。<p></p> 广州实体店地址：广州市天河区天河北路233号中信广场商场136单元 广州店联系方式：020-38836315。<p></p> 重庆实体店地址：重庆市渝中区解放碑步行街民族路188号环球金融中心（WFC）LG-B02A 重庆店联系方式：023-63710835。<p></p> 武汉实体店地址：武汉市洪山区光谷意大利风情街5号楼一层51021号 武汉店联系方式：027-87688895。<p></p> 南京实体店地址：南京市长江路288号1912街区17号楼一层 南京店联系方式：025-83613520。<p></p> 长沙实体店地址：长沙市开福区中山路589号万达百货商场2楼 长沙店联系方式：0731-83878575。<p></p> 全国400客服热线：400 01 13520。</span>
							</div>
							<div onClick="contenttxt(1,3)" id="content_title_13" class="content_title">
								<span style="margin-top:8px;">Q：到店订购和官网订购的价格一致吗？</span>
							</div>
							<div id="content_title1_3" class="content_txt">
								<span style="margin-top:1px;">A：DR的所有商品，到店订购和官网订购的时间周期，价格，质量及售后服务均一致。</span>
							</div>
							<div onClick="contenttxt(1,4)" id="content_title_14" class="content_title">
								<span style="margin-top:8px;">Q：价格是否有折扣优惠？</span>
							</div>
							<div id="content_title1_4" class="content_txt">
								<span style="margin-top:1px;">A：DR的品牌寓意为一生唯一真爱，大多是用作见证彼此求婚或结婚这一神圣时刻，所以所有商品都是常年任何节假日没有折扣活动，就像彼此一生唯一真爱的承诺及永恒的爱情，永不打折。</span>
							</div>
							<div onClick="contenttxt(1,5)" id="content_title_15" class="content_title">
								<span style="margin-top:8px;">Q：为什么在官网上输入姓名身份证号后看不到款式？</span>
							</div>
							<div id="content_title1_5" class="content_txt">
								<span style="margin-top:1px;">A：www.darryring.com 官网首页点击—求婚钻戒，进入页面后不需要填写任何信息，移动鼠标到最下方，就可以看到Darry Ring女戒的所有款式。</span>
							</div>
							<div onClick="contenttxt(1,6)" id="content_title_16" class="content_title">
								<span style="margin-top:8px;">Q：到实体店是否可以立刻拿到戒指？</span>
							</div>
							<div id="content_title1_6" class="content_txt">
								<span style="margin-top:1px;">A：您好，DR的所有商品都是需要根据您选择的款式、手寸大小及刻字信息来定制。实体店仅提供款式体验及预订，与官网购买的定制时间是一致的，可于15-20个工作日内送到或自取。</span>
							</div>
						</div>
						<div id="box2" class="box2">
							<div onClick="contenttxt(2,1)" id="content_title_21" class="content_title"></div>
							<div id="content_title2_1" class="content_txt"></div>
							<div onClick="contenttxt(2,2)" id="content_title_22" class="content_title"></div>
							<div id="content_title2_2" class="content_txt">
							</div>
							<div onClick="contenttxt(2,3)" id="content_title_23" class="content_title"></div>
							<div id="content_title2_3" class="content_txt">
							</div>
							<div onClick="contenttxt(2,4)" id="content_title_24" class="content_title"></div>
							<div id="content_title2_4" class="content_txt">
							</div>
						</div>
						<div id="box3" class="box3">
							<div onClick="contenttxt(3,1)" id="content_title_31" class="content_title"></div>
							<div id="content_title3_1" class="content_txt">
							</div>
							<div onClick="contenttxt(3,2)" id="content_title_32" class="content_title"></div>
							<div id="content_title3_2" class="content_txt"></div>
							<div onClick="contenttxt(3,3)" id="content_title_33" class="content_title"></div>
							<div id="content_title3_3" class="content_txt"></div>
							<div onClick="contenttxt(3,4)" id="content_title_34" class="content_title"></div>
							<div id="content_title3_4" class="content_txt"></div>
						</div>
						<div id="box4" class="box4">
							<div onClick="contenttxt(4,1)" id="content_title_41" class="content_title"></div>
							<div id="content_title4_1" class="content_txt"></div>
							<div onClick="contenttxt(4,2)" id="content_title_42" class="content_title"></div>
							<div id="content_title4_2" class="content_txt"></div>
							<div onClick="contenttxt(4,3)" id="content_title_43" class="content_title"></div>
							<div id="content_title4_3" class="content_txt"></div>
							<div onClick="contenttxt(4,4)" id="content_title_44" class="content_title"></div>
							<div id="content_title4_4" class="content_txt"></div>
						</div>
						<div id="box5" class="box5">
							<div onClick="contenttxt(5,1)" id="content_title_51" class="content_title"></div>
							<div id="content_title5_1" class="content_txt"></div>
							<div onClick="contenttxt(5,2)" id="content_title_52" class="content_title"></div>
							<div id="content_title5_2" class="content_txt">
							</div>
							<div onClick="contenttxt(5,3)" id="content_title_53" class="content_title"></div>
							<div id="content_title5_3" class="content_txt">
							</div>
							<div onClick="contenttxt(5,4)" id="content_title_54" class="content_title"></div>
							<div id="content_title5_4" class="content_txt">
							</div>
							<div onClick="contenttxt(5,5)" id="content_title_55" class="content_title"></div>
							<div id="content_title5_5" class="content_txt">
							</div>
							<div onClick="contenttxt(5,6)" id="content_title_56" class="content_title"></div>
							<div id="content_title5_6" class="content_txt">
							</div>
						</div>
						<div id="box6" class="box6">
							<div onClick="contenttxt(6,1)" id="content_title_61" class="content_title"></div>
							<div id="content_title6_1" class="content_txt"></div>
							<div onClick="contenttxt(6,2)" id="content_title_62" class="content_title"></div>
							<div id="content_title6_2" class="content_txt">
							</div>
							<div onClick="contenttxt(6,3)" id="content_title_63" class="content_title"></div>
							<div id="content_title6_3" class="content_txt">
							</div>
							<div onClick="contenttxt(6,4)" id="content_title_64" class="content_title"></div>
							<div id="content_title6_4" class="content_txt">
							</div>
							<div onClick="contenttxt(6,5)" id="content_title_65" class="content_title"></div>
							<div id="content_title6_5" class="content_txt">
							</div>
							<div onClick="contenttxt(6,6)" id="content_title_66" class="content_title"></div>
							<div id="content_title6_6" class="content_txt">
							</div>
						</div>
						<div id="box7" class="box7">
							<div onClick="contenttxt(7,1)" id="content_title_71" class="content_title"></div>
							<div id="content_title7_1" class="content_txt">
							</div>
							<div onClick="contenttxt(7,2)" id="content_title_72" class="content_title"></div>
							<div id="content_title7_2" class="content_txt">
							</div>
							<div onClick="contenttxt(7,3)" id="content_title_73" class="content_title"></div>
							<div id="content_title7_3" class="content_txt">
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					function showbox(id) {
						getQeestion(id);
						for (var i = 1; i <= 8; i++) {
							if (i == id) {
								showdiv(id);
							} else {
								hidediv(i);
							}
						}
					}

					function contenttxt(id, sid) {
						for (var i = 1; i <= 7; i++) {
							if (i == id) {
								showtxt(id, sid);
							} else {
								hidetxt(i, sid);
							}
						}

					}

					function showtxt(id, sid) {
						var objtitle = $("#content_title" + id + "_" + sid);

						if (objtitle.css("display") == "none") {
							objtitle.show("fast");
						} else {

							hidetxt(id, sid);
						}
						//$("#"+id).show("fast");
					}

					function hidetxt(id, sid) {
						var objtitle = $("#content_title" + id + "_" + sid);
						objtitle.hide("fast");
					}

					function hidediv(id) {
						$("#box" + id).hide("fast");

						$("#li" + id).css({
							"font-size": "14px",
							"color": "#7d7d7d"
						});
					}

					function showdiv(id) {
						if ($("#box" + id).css("display") == "none") {
							$("#box" + id).show("fast");
							$("#li" + id).css({
								"font-size": "18px",
								"color": "#000000"
							});
						}

					}
				</script>
				<script type="text/javascript">
					function showMask() {
						$("#masks").css("height", $(document).height());
						$("#masks").css("width", $(document).width());
						$("#masks").fadeIn();
					}

					function showModel(divName) {
						showMask();
						/* var top = ($(window).height() - $(divName).height()) / 5;
						 var left = ($(window).width() - $(divName).width()) / 2;
						 var scrollTop = $(document).scrollTop();
						 var scrollLeft = $(document).scrollLeft();*/
						$(divName).fadeIn();
					}

					function CloseMaskser() {

						$("#modelsever").fadeOut("slow");
						$("#masks").fadeOut("slow");
						$("#mask").fadeOut("slow");
					}
				</script>

	</body>

</html>
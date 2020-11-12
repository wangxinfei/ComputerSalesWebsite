<?php
include("dbconfig.php");
	if(isset($_GET['txtTitle'])){
		$name=$_GET['txtTitle'];
		$sql="SELECT * FROM computer where cname like '%$name%'";
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			exit;
		}
		$detail=0;
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$detail=$row;
		}
		if($detail==0){
			echo "<script>alert('抱歉，未找到此商品！'); location.href='lists.php';</script>";
			die;
		}
	}else{
		$cid=$_GET['cid'];
		$sql="SELECT * FROM computer where cid = $cid";
		if(isset($_SESSION['uiphone'])){
			$uiphone=$_SESSION['uiphone'];
		}
		$mysqli_result=$db->query($sql);
		if($mysqli_result == false){
			exit;
		}
		$detail;
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$detail=$row;
		}
	}
	
	
?>

<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<title>电脑详情</title>
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
				<?php 
				    if(isset($_SESSION["uiphone"])){
				      include("navigation_login.php");
				    }else{
				      include("navigation_logout.php");
				    }
				  ?>
				<!--头部end-->
				<!--导航-->
				<?php include("navigation.php") ?>
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
								<!--购买页中间的中间图片-->
								<div class="buycort_center fl">
									<ul class="ul_center">
										<li id="magnifier2083" style="display: list-item;"> <img src="/images/computers/<?php echo $detail['cpicture']?>" alt="" /> <span style="position: absolute; left: 248px; top: 248px; display: none; width: 150px; height: 150px; background: rgb(153, 153, 153) none repeat scroll 0% 0%; border: 1px solid rgb(0, 0, 0); cursor: move; opacity: 0.4;"></span>
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
									<!--商品-->
									<div class="byright_top">
										<b style="font-size: 22px;font-style:oblique;"><?php echo $detail['cbrand'].' '.$detail['cname'] ?></b>
										<p style="color: red;font-size: 25px;"> <span>&yen;<?php echo $detail['cprice'] ?></span> </p>
										<div class="byright_top-xq">
											<i>库存：<?php echo $detail['camount'] ?></i>
											<i>类型：<?php echo $detail['ctype'] ?></i>
										</div>
									</div>
									<!--商品end-->
									<!--参数-->
									<div class="pho_cs" id="ctl00_content_zbDiv">
										<p> <span>上市时间：</span> <i><?php echo $detail['cprodata'] ?></i> </p>
									</div>
									<!-- <div >
										数量<input type="number" name="12">
									</div> -->
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
										<div title="加入购物车" class="bt1">
											<!-- <span>加入购物车</span> -->
											<a href="cart_add.php?cacoid=<?php echo $detail['cid'] ?>&&caconame=<?php echo $detail['cname'] ?>&&cacobrand=<?php echo $detail['cbrand'] ?>&&cacotype=<?php echo $detail['ctype'] ?>&&cacopic=<?php echo $detail['cpicture'] ?>&&cacoamount=1&&cacomoney=<?php echo $detail['cprice'] ?>">加入购物车</a>
										</div>
										<div title="立即购买" class="bt2">
											<a href="cart_order_buy.php?cacoid=<?php echo $detail['cid'] ?>&&caconame=<?php echo $detail['cname'] ?>&&cacobrand=<?php echo $detail['cbrand'] ?>&&cacotype=<?php echo $detail['ctype'] ?>&&cacopic=<?php echo $detail['cpicture'] ?>&&cacoamount=1&&cacomoney=<?php echo $detail['cprice'] ?>">立即购买</a>
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
						
						<!--预约其他功能end-->

						<!--验证购买-->
						<script src="js/click_hide.js" type="text/javascript"></script>
						<script src="js/index_clear.js" type="text/javascript"></script>
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

						</script>
					</div>
				</div>
				<!--底部-->
				<div class="footer">
					<?php include("bottom.php") ?>
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
						<?php include("consulting.php") ?>
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
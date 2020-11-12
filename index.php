<?php
include("dbconfig.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">
	<head>
		<meta charset="utf-8" />
		<title>七颗星首页</title>
		<link href="css/index_A.css?v=1.3.7.1" type="text/css" rel="stylesheet" />
		<link href="css/same_A.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
	</head>

	<body>
		<!--遮罩-->
		<div class="backall"></div>
		<!--遮罩end-->
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
		<script type="text/javascript">
			function logout() {
				if (window.confirm('确定退出吗？')) {

					$.get("/nAPI/QuitExit.ashx", function(data) {
						window.location.href = "/";
					});
				}
			}
		</script>
		<div>
			<!--banner-->
			<div class="indexbanner-all">
				<ul class="indexbanner">
					<li class="tb_first" style="display: block; opacity: 0.982279;">
						<div class="cmain cb_main">
						</div>
					</li>
				</ul>
			</div>
			<!--中间的内容-->
			<div class="all-thing">
				<div class="cmain">
					<!--资讯内容的ul-->
					<ul class="news-ul">
						<!--每一块li-->
						<li>
							<div>
								<img width="235" height="130" alt="华硕" src="images/logos/asus.png" />
							</div>
							<div class="ul-center">
								<a href="javascript:void(0)" class="">华硕</a>
							</div>
							<div class="ul-bottom">
							</div>
						</li>
						<!--每一块li-->
						<li>
							<div>
								<img width="235" height="130" alt="惠普" src="images/logos/hp.jpg" />
								<div class="ul-center">
									<a href="javascript:void(0)" class="">惠普</a>
								</div>
								<div class="ul-bottom"> </div>
							</div>
						</li>
						<!--每一块li-->
						<li>
							<div>
								<img width="235" height="130" alt="华为" src="images/logos/huawei.jpg" />
							</div>
							<div class="ul-center">
								<a href="javascript:void(0)">华为</a>
							</div>
							<div class="ul-bottom">
							</div>
						</li>
						<!--每一块li-->
						<li>
							<div>
								<img width="235" height="130" alt="联想" src="images/logos/lenovo.jpg" />
							</div>
							<div class="ul-center">
								<a href="javascript:void(0)" class="">联想</a>
							</div>
							<div class="ul-bottom">
							</div>
						</li>
					</ul>
					<!--资讯内容的ul end-->
					<!--tab选项卡-->
					<!--tab选项卡ul-->
					<div class="ultab_all">
						<ul class="ul-tab">
							<li class=""><span>轻薄本系列</span></li>
							<li><span>游戏本系列</span> </li>
							<li><span>商用本系列</span> </li>
							<li><span>二合一系列</span> </li>
							<li class=""><span style="border: none; width: 196px">超极本系列</span> </li>
						</ul>
						<!--进度条-->
						<div class="ul_jdt">
							<div class="ul_jdrun" style="width: 798px;">
							</div>
						</div>
						<!--进度条end-->
						<div class="ul_bkjt-hover" style="width: 18px; left: 777.104px;">
						</div>
						<!--箭头end-->
					</div>
					<!--tab选项卡ul end-->
					<!--tab选项卡下的内容-->
					<ul class="all_tab">
						<li style="display: none;">
							<!--tab选项卡下的左边内容-->
							<div class="tab_left fl">
								<img width="504" height="314" alt="Forever经典系列" src="images/fimg6.png" />
							</div>
							<!--tab选项卡下的左边内容 end-->
							<!--tab选项卡下的右边内容-->
							<div class="tab_right fr">
								<h3>游戏本系列</h3>
								<p> 戴尔DELL游匣G3烈焰版 </p>
								<p> 15.6英寸英特尔酷睿i5游戏笔记本电脑</p>
								<div class="to_more">
									<div class="bt2">
										<a target="_blank" href="lists.php">了解更多</a>
									</div>
								</div>
							</div>
							<!--tab选项卡下的右边内容  end-->
						</li>
						<li style="display: none;">
							<!--tab选项卡下的左边内容-->
							<div class="tab_left fl">
								<img width="404" height="314" alt="Marry Me系列" src="images/fimg1.png" />
						</div>
						<!--tab选项卡下的左边内容 end-->
						<!--tab选项卡下的右边内容-->
						<div class="tab_right fr">
							<h3> 轻薄本系列</h3>
							<p> Apple MacBook Pro</p>
							<p> 13.3英寸笔记本电脑 银色 2018新款</p>
							<div class="to_more">
								<div class="bt2">
									<a target="_blank" href="lists.php">了解更多</a>
									</div>
								</div>
							</div>
							<!--tab选项卡下的右边内容  end-->
						</li>
						<li style="display: none;">
							<!--tab选项卡下的左边内容-->
							<div class="tab_left fl">
								<img width="404" height="314" alt="My heart系列" src="images/fimg4.png" />
						</div>
						<!--tab选项卡下的左边内容 end-->
						<!--tab选项卡下的右边内容-->
						<div class="tab_right fr">
							<h3> 商用本系列</h3>
							<p> 华为 MateBook</p>
							<p> 15.6英寸轻薄微边框笔记本</p>
							<div class="to_more">
								<div class="bt2">
									<a target="_blank" href="lists.php">了解更多</a>
									</div>
								</div>
							</div>
							<!--tab选项卡下的右边内容  end-->
						</li>
						<li style="display: list-item; opacity: 0.470565;">
							<!--tab选项卡下的左边内容-->
							<div class="tab_left fl">
								<img width="404" height="314" alt="My heart系列" src="images/fimg2.png" />
						</div>
						<!--tab选项卡下的左边内容 end-->
						<!--tab选项卡下的右边内容-->
						<div class="tab_right fr">
							<h3> 超级本系列</h3>
							<p> 惠普（HP）暗影精灵4代</p>
							<p> 15.6英寸游戏笔记本电脑</p>
							<div class="to_more">
								<div class="bt2">
									<a target="_blank" href="lists.php">了解更多</a>
									</div>
								</div>
							</div>
							<!--tab选项卡下的右边内容  end-->
						</li>
						<li style="opacity: 0.529435; display: list-item;">
							<!--tab选项卡下的左边内容-->
							<div class="tab_left fl">
								<img width="404" height="314" alt="My heart系列" src="images/fimg3.png" />
						</div>
						<!--tab选项卡下的左边内容 end-->
						<!--tab选项卡下的右边内容-->
						<div class="tab_right fr">
							<h3> 轻薄本系列</h3>
							<p> 华硕 a豆13</p>
							<p> 15.6英寸游戏笔记本电脑</p>
							<div class="to_more">
								<div class="bt2">
									<a target="_blank" href="lists.php">了解更多</a>
									</div>
								</div>
							</div>
							<!--tab选项卡下的右边内容  end-->
						</li>
					</ul>
					<!--tab选项卡下的内容  end-->
					<!--推荐款式-->
					<div class="hot-ks">
						<a class="fr" target="_blank" href="lists.php">更多</a>
						<span class="other_color" id="renqi"><i>人气最高</i><em></em> </span>
						<span id="rxph"><i>热销商品</i><em></em> </span>
					</div>
					<!--购买的款式-->
					<div class="cmain">
						<ul id="ullist" class="buyit">
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100007341442
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="Forever系列 " src="images/computers/05.png" />
									</div>
									<div style="opacity:0" class="bything-two">
										<img width="236px" height="236px" src="images/201409011935072849fe802f.jpg" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100007341442
'">游戏本系列&nbsp;戴尔&nbsp;游匣G3</a></p>
									<p> <span>￥5,900</span><i>销量：5698</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100003671676

'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="Forever系列 经典款&nbsp;40分&nbsp;D色" src="images/computers/15.png" />
									</div>
									
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100003671676
'">轻薄本系列&nbsp;戴尔&nbsp;灵越</a></p>
									<p> <span>￥5,299</span><i>销量：2413</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100004328110
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 简奢款&nbsp;30分&nbsp;E色" src="images/computers/20.png" />
									</div>
									
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100004328110
'">轻薄本系列&nbsp;华硕&nbsp;灵耀S2代</a></p>
									<p> <span>￥4,988</span><i>销量：1235</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100002117926
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 典雅&nbsp;40分&nbsp;F色" src="images/computers/09.png" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100002117926
'">二合一系列&nbsp;微软&nbsp;微软Surface Pro 6</a></p>
									<p> <span>￥6,987</span><i>销量：2654</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100007629508
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 典雅&nbsp;40分&nbsp;F色" src="images/computers/07.png" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100007629508
'">轻薄本系列&nbsp;Apple&nbsp;AppleMacBook Pro</a></p>
									<p> <span>￥13,500</span><i>销量：2654</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100007042933
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 典雅&nbsp;40分&nbsp;F色" src="images/computers/12.png" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100007042933
'">商用本系列&nbsp;华为&nbsp;MateBook D</a></p>
									<p> <span>￥5,188</span><i>销量：2654</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100007649679
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 典雅&nbsp;40分&nbsp;F色" src="images/computers/06.png" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100007649679
'">超级本系列&nbsp;惠普&nbsp;惠普暗影精灵GTX</a></p>
									<p> <span>￥6,199</span><i>销量：2654</i></p>
								</div>
							</li>
							<li>
								<div class="by_top">
									<a target="_blank" href="detail.php?cid='100003671700
'" rel="nofollow"></a>
									<div style="opacity:1" class="bything-one">
										<img width="236px" height="236px" alt="True Love系列 典雅&nbsp;40分&nbsp;F色" src="images/computers/21.png" />
									</div>
								</div>
								<div class="by_center"></div>
								<div class="by_bottom">
									<p><a target="_blank" href="detail.php?cid='100003671700
'">轻薄本系列&nbsp;戴尔&nbsp;灵越</a></p>
									<p> <span>￥6,599</span><i>销量：2654</i></p>
								</div>
							</li>
						</ul>
					</div>
					<!--款式end-->
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
				<!--   <script src="http://wpa.b.qq.com/cgi/wpa.php" charset="utf-8" type="text/javascript"></script> -->
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
						<div onClick="javascript:NTKF.im_openInPageChat();" id="Bearonline" class="floatbig_center-kf"></div>
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
						<div onClick="javascript:NTKF.im_openInPageChat();" class="floatsmall_center-kf fr"></div>
						<!--客服end-->
						<!--定制咨询-->
						<div class="floatsmall_center-zx fr">
							<a href="javascript:showModel(modelsever);"></a>
						</div>
						<!--定制咨询end-->
						<!--二维码-->
						<div class="floatsmall_erwei fr">
							<a href="#"></a>
						</div>
						<!--二维码end-->
					</div>
				</div>
				<!--右边漂浮悬挂小的end-->
				<!--返回顶部-->
				<div class="comeback" style="display: block;"></div>
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
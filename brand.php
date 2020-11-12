<?php
include("dbconfig.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<meta charset="utf-8" />
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
	</head>

	<body>
		<title>品牌文化</title>
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<link href="css/dr_culture.css?v=1.3.5.0" type="text/css" rel="stylesheet" />
		<div>
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
			<div class="cort">
				<!--中间-->
				<div class="cort">
					<!--内容-->
					<div class="cmain culture_same">
						<!--面包屑-->
						<div class="zbk_top spalid">
							<div class="zbk_top spalid">
								<span>您当前的位置：</span>
								<span id="ctl00_content_website_SiteMapPath1"><a href="#ctl00_content_website_SiteMapPath1_SkipLink"></a><span> <a target="_blank" href="index.html">七颗星</a> </span><span> <em>&gt;</em> </span><span> <span>品牌文化</span> </span>
								<a id="ctl00_content_website_SiteMapPath1_SkipLink"></a>
								</span>
							</div>
						</div>
						<!--面包屑end-->
						<!--标题-->
						<div class="culture_top">
							<div class="culture_top-tittle"><em></em> <span class="tittle_span">关于七颗星</span> <em></em></div>
							<h4> About us</h4>
						</div>
						<!--标题end-->
						<!--特殊颜色的P-->
						<div class="culture_wz">
							<p> 始创于2019年2月28日，七颗星有着自己的管理理念以及努力推出更好更新颖的品牌，</p>
							<p> 力求顾客能有更好的电脑体验。。</p>
						</div>
						<!--特殊颜色的P end-->
						<!--品牌理念-->
						<div class="culture_pp culture_first">
							<!--左边-->
							<div class="fl">
								<a target="_blank" href="javascript:void(0)"> <img width="470" height="300" src="images/background/bg1_brand.png" /> </a>
							</div>
							<!--左边end-->
							<!--右边-->
							<div class="culture_pp-word fr">
								<h3> 品牌理念</h3>
								<h4> Brand Beliefs</h4>
								<p> 七颗星，由七人创建，</p>
								<p> 一人代表着一颗星，</p>
								<p> 象征着冉冉升起的新星，势不可挡。</p>
							  <a class="to_more" target="_blank" href="https://user.qzone.qq.com/1952808112">了解更多</a>
							</div>
							<!--右边end-->
						</div>
						<!--品牌理念end-->
						<!--三大块-->
						<div class="three_yz">
							<a href="javascript:void(0)" target="_blank"> <img width="300" height="400" src="images/background/bg2_brand.png" /> </a>
							<a href="javascript:void(0)" target="_blank"> <img width="300" height="400" src="images/background/bg3_brand.png" /> </a>
							<a href="javascript:void(0)" target="_blank"> <img width="300" height="400" src="images/background/bg4_brand.png" /> </a>
						</div>
						<!--三大块end-->
						<!--社会名人-->
						<div class="culture_pp culture_sec">
							<!--左边-->
							<div class="culture_pp-word fl">
								<h3> 社会名人倾情推荐</h3>
								<h4> Expert Advice</h4>
								<p> 著名明星俊凯为小戴代言</p>
								<p> 当代花旦赵丽颖为小硕代言</p>
								<p> ...</p>
								<p> 我们公司都源于以上主流电脑制造商公司提供</p>
							  <a class="to_more" target="_blank" href="https://user.qzone.qq.com/1952808112">了解更多</a>
							</div>
							<!--左边end-->
							<!--右边-->
							<div class="culture_sec-right fr">
								<a target="_blank" href="javascript:void(0)"> <img width="367" height="250" src="images/background/bg5_brand.png" /> </a>
							</div>
							<!--右边end-->
						</div>
						<div class="culture_pp">
							<!--品质工艺-->
							<div class="culture_four-left fl">
								<img width="465" height="270" src="images/background/bg7_brand.png" />
								
								<!--工艺end-->
							</div>
							<!--品质工艺end-->
							<!--DR族-->
							<div class="culture_four-right fr">
								<img width="465" height="270" src="images/background/bg6_brand.png" />
							</div>
							<!--DR族end-->
						</div>
						<!--品质工艺与DR族end-->
						<!--DR社区与加入我们-->
						<div class="culture_pp">
							<!--左边-->
							<div class="culture_last fl">
								<a target="_blank" href="javascript:void(0)"> <img width="465" height="200" src="images/background/bg8_brand.png" /> </a>
							</div>
							<!--左边end-->
							<!--右边-->
							<div class="culture_last fr">
								<a target="_blank" href="javascript:void(0)"> <img width="466" height="200" src="images/background/bg9_brand.png" /> </a>
							</div>
							<!--右边end-->
						</div>
						<!--DR社区与加入我们end-->
						<!--分享-->
						<div class="culture_share">
							<div class="culture_share-tittle">
								<i></i>
								<span>分享至</span>
								<i></i>
							</div>
							<div class="culture_share-it">
								<a class="cshare_1" target="_blank" title="QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=index.htmlbrand.html"></a>
								<a class="cshare_2" id="wb" href="#"> </a>
								<a class="cshare_3" target="_blank" href="http://widget.renren.com/dialog/share?resourceUrl=index.htmlbrand.html&amp;title=一生唯一真爱，凭身份证一生只能购买一次!Darry Ring钻石戒指！"></a>
								<a class="cshare_4" href="http://share.v.t.qq.com/index.php?c=share&amp;a=index&amp;url=index.htmlbrand.html&amp;title=&amp;appkey=333cf198acc94876a684d043a6b48e14"></a>
								<a class="cshare_5" target="_blank" href="http://www.douban.com/share/service?href=index.htmlbrand.html&amp;name=品牌文化&amp;text=早于上个世纪90年代，戴瑞珠宝便在香港开始从事裸钻高级定制,以寻求、欣赏珍宝的眼光，苛刻的甄选标准，搜集来自世界各地的珍稀钻石。"></a>
							</div>
						</div>
						<!--分享end-->
					</div>
					<!--内容end-->
				</div>
				<!--中间end-->
				<script>
					$("#wb").click(function() {
						var href = "http://service.weibo.com/share/share.php?title=品牌文化 &url=index.htmlbrand.html";
						window.open(href, 'newwindow', 'height=700,width=650,top=300,left=400,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no');

					});
				</script>
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
							<span style="margin-top:8px;">Q：七颗星 是否有实体店？</span>
						</div>
						<div id="content_title1_1" class="content_txt">
							<span style="margin-top:1px;">A：DR公司总部在山东日照，目前内地日照市、北京市、上海市、深圳市设有实体店，支持到店订购，也支持全国在线官网订购。同时目前其他一线城市公司已在考察选址阶段，将陆续开设店面。</span>
						</div>
						<div onClick="contenttxt(1,2)" id="content_title_12" class="content_title">
							<span style="margin-top:8px;">Q：实体店具体位置？</span>
						</div>
						<div id="content_title1_2" class="content_txt">
							<span style="margin-top:1px;">A：日市照实体店地址：山东省日照市日照大学城 深圳店联系方式：183 **** ****。<p></p> B:北京实体店地址：北京东二环朝阳门桥银河SOHO中心B座 北京店联系方式：198 **** ****。<p></p> C:上海实体店地址：上海长宁区淮海西路570号红坊创意园区 上海店联系方式：183 **** ****。<p></p> D:深圳实体店地址：深圳市罗湖区梧桐山风景区 深圳店联系方式：183 **** ****。<p></p> E:全国400客服热线：400 **** ****。</span>
						</div>
						<div onClick="contenttxt(1,3)" id="content_title_13" class="content_title">
							<span style="margin-top:8px;">Q：到店订购和官网订购的价格一致吗？</span>
						</div>
						<div id="content_title1_3" class="content_txt">
							<span style="margin-top:1px;">A：七颗星的所有商品，到店订购和官网订购的时间周期，价格，质量及售后服务均一致。</span>
						</div>
						<div onClick="contenttxt(1,4)" id="content_title_14" class="content_title">
							<span style="margin-top:8px;">Q：价格是否有折扣优惠？</span>
						</div>
						<div id="content_title1_4" class="content_txt">
							<span style="margin-top:1px;">A：七颗星电脑商城的电脑，都直接以进价出售，为全网最低，如有发现同款电脑存在更低价，将以差价还返</span>
						</div>
						<div onClick="contenttxt(1,6)" id="content_title_16" class="content_title">
							<span style="margin-top:8px;">Q：到实体店是否可以立刻拿到电脑？</span>
						</div>
						<div id="content_title1_6" class="content_txt">
							<span style="margin-top:1px;">A：您好，七颗星的所有商品都是需要根据您选择的款式来购买。实体店仅提供款式体验及预订，与官网购买的定制时间是一致的，可于15-20个工作日内送到或自取。</span>
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

		</div>
	</body>

</html>
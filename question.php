<?php
include("dbconfig.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<title>常见问题</title>
		<meta charset="utf-8" />
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet">
		<link href="css/aboutUs.css?v=1.3.5.0" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
		<script src="js/aboutUs.js" type="text/javascript"></script>
	</head>

	<body><iframe src="javascript:false;" style="display: none;"></iframe>
		<form id="aspnetForm" action="question.html" method="post" name="aspnetForm">
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

				<script type="text/javascript">
					function logout() {
						if (window.confirm('确定退出吗？')) {

							$.get("/nAPI/QuitExit.ashx", function(data) {
								window.location.href = "logoutuser.php";
							});
						}
					}
				</script>

				<div class="cort">

					<!--中间-->
					<div class="cort">
						<!--内容-->
						<div class="cmain aboutUs">
							<!--主要内容-->
							<div class="about_center">
								<!--导航条（ 一 ）-->
								<div style="display:none" class="about_center-top">
									<!--左边-->
									<div class="ttop_left fl">
										购买流程
									</div>
									<!--左边end-->
									<!--右边-->
									<ul class="ttop_right fl">
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(89)" href="javascript:void(0);">1. 注册登录</a> </li>
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(90)" href="javascript:void(0);">2. 挑选款式</a> </li>
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(91)" href="javascript:void(0)">3. 挑选电脑</a> </li>
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(92)" href="javascript:void(0)">4. 提交订单</a> </li>
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(93)" href="javascript:void(0)">5. 支付</a> </li>
										<li><span class="tdnav-left"></span><a class="tdnav-center" onClick="buyaction(94)" href="javascript:void(0)">6. 完成</a><i class="tdnav-right"></i> </li>
									</ul>
									<!--右边end-->
								</div>
								<!--导航条（ 一 ）end-->
								<!--导航条（ 二 ）-->
								<div class="question_allnav">
									<ul class="question_allnav-top">
										<li>注册登录</li>
										<li>挑选款式</li>
										<li>挑选电脑</li>
										<li>提交订单</li>
										<li>支付</li>
										<li>完成</li>
									</ul>
									<ul class="question_allnav-bottom">
										<li class=""><span></span></li>
										<li><span></span></li>
										<li><span></span></li>
										<li><span></span></li>
										<li><span></span></li>
										<li><span></span></li>
									</ul>
									<div class="question_bottom"></div>
								</div>
								<!--导航条（ 二 ）end-->
								<!--中间内容-->
								<div class="about_center-cort">
									<!--右边-->
									<div class="ques_right fl">
										<!--常见问题-->
										<div class="common_question">
											<h3 id="commonqudestion">官网店铺：</h3>
											<ul class="com-question">
												<li>
													<h4><span style="margin-top:8px;">Q：为什么我只能购买一台电脑/为什么不能选择购买数量？</span></h4>
													<div style="display: block">
														<p><span style="margin-top:1px;">A：七颗星公司以防出现中间商赚差价的现象，一位消费者只能购买一台同类型电脑，即默认购买数量为：1</span></p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：七颗星 是否有实体店？</span></h4>
													<div>
														<p><span style="margin-top:1px;">A：七颗星公司总部在山东日照，目前内地日照市、北京市、上海市、深圳市设有实体店，支持到店订购，也支持全国在线官网订购。同时目前其他一线城市公司已在考察选址阶段，将陆续开设店面。</span></p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：实体店具体位置？</span>
</h4>
													<div>
														<p><span style="margin-top:1px;">A：日市照实体店地址：山东省日照市日照大学城 深圳店联系方式：183 **** ****。<p></p> B:北京实体店地址：北京东二环朝阳门桥银河SOHO中心B座 北京店联系方式：198 1234 4567<p></p> C:上海实体店地址：上海长宁区淮海西路570号红坊创意园区 上海店联系方式：183 9875 6542p></p> D:深圳实体店地址：深圳市罗湖区梧桐山风景区 深圳店联系方式：183 5236 4569
														<p></p>E:全国400客服热线：400 1234 5678。
														<p></p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：到店订购和官网订购的价格一致吗？</span></h4>
													<div>
														<p><span style="margin-top:1px;">A：七颗星的所有商品，到店订购和官网订购的时间周期，价格，质量及售后服务均一致。</span>
														</p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：价格是否有折扣优惠？</span></h4>
													<div>
														<p><span style="margin-top:1px;">A：七颗星电脑商城的电脑，都直接以进价出售，为全网最低，如有发现同款电脑存在更低价，将以差价还返</span>
														</p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：到实体店是否可以立刻拿到电脑？</span></h4>
													<div>
														<p><span style="margin-top:1px;">A：您好，七颗星的所有商品都是需要根据您选择的款式来购买。实体店仅提供款式体验及预订，与官网购买的定制时间是一致的，可于15-20个工作日内送到或自取。</span>
														</p>
													</div>
												</li>
												<li>
													<h4><span style="margin-top:8px;">Q：哪些平台可以访问到七颗星电脑商城？</span>
</h4>
													<div>
														<p></p>
														<p>
															<span style="margin-top:8px;"></span></p>
														<p>&nbsp;
														</p>
														<p>
															<span style="margin-top:8px;"><a href="https://3c.tmall.com/?spm=875.7931836/B.category2016015.3.661442656Xdv0a&go=digt&acm=lb-zebra-148799-667863.1003.4.708026&scm=1003.4.lb-zebra-148799-667863.OTHER_14561662186585_708026"><img width="201" height="85" src="images/20150707101641f9d958efff.jpg" alt=""></a>&nbsp;<a href="https://www.jd.com/"><img width="201" height="85" src="images/2015070710170180545692fd.jpg" alt=""></a>&nbsp;<a href="https://www.yhd.com/"><img width="201" height="85" src="images/20150707101711e7690bde7f.jpg" alt=""></a>&nbsp;<a href="http://www.amazon.cn/"><img width="201" height="85" src="images/20150707101722a3e63ffc72.jpg" alt=""></a></span></p>
														<p></p>
													</div>
												</li>
											</ul>
										</div>
										<!--常见问题end-->
									</div>
									<!--右边end-->
								</div>
								<!--中间内容end-->
							</div>
							<!--主要内容end-->
						</div>
						<!--内容end-->
					</div>
					<!--中间end-->

				</div>

				<!--底部-->
				<div class="footer">
					<!--错误-->
					<!--提示-->
					<div class="loverit_word2">Darry Ring严格规定男士凭身份证一生仅能定制一枚，象征男人一生真爱的最高承诺。输入身份证号码即可查询购买记录。</div>
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
							<a href="javascript:NTKF.im_openInPageChat()">
								<img width="75" height="37" src="images/zx.jpg"></a>
						</div>

					</div>
					<div class="fkf_bottom">
						<img width="92" height="82" alt="Darry Ring 官方微信" src="images/to_erwei.jpg">
						<a href="#">
							<img width="92" height="26" src="images/db.jpg"></a>
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
						<img src="images/ew.jpg">
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
					<img width="19" height="103" src="images/server_03.jpg"></div>
				<div class="news_tc">
					<div class="newtc_left">
					</div>
					<div class="newtc_right">
						<span style="cursor: pointer" class="sszs">稍后再说</span> <span class="xzzx"><a onClick="showxiaon()" style="cursor: pointer" id="chatnow">
            现在咨询</a></span>
						<div style="cursor: pointer" class="tocclose">
						</div>
					</div>
				</div>

				<div class="mask" id="masks">
				</div>
				<div style="display:none;" class="modelsever" id="modelsever">
					<div class="cs_top">
						<div class="cs_topcenter">
							<div style="width:300px; height:40px; line-height:40px; float:left; display:inline-block; ">顾客常见疑问</div>
							<div style="width:385px; height:20px; float:left; text-align:right; padding-top:20px;">
								<img width="55" height="9" style="cursor: pointer;" onClick="CloseMaskser()" src="images/popup_window_btn_close.gif">
							</div>

						</div>
					</div>
					<div class="cs_content clear">
						<?php
							include("consulting.php");
						?>
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
							<div id="content_title3_1" class="content_txt"> </div>
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
							<div id="content_title7_1" class="content_txt"> </div>
							<div onClick="contenttxt(7,2)" id="content_title_72" class="content_title"></div>
							<div id="content_title7_2" class="content_txt">
							</div>
							<div onClick="contenttxt(7,3)" id="content_title_73" class="content_title"></div>
							<div id="content_title7_3" class="content_txt">
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
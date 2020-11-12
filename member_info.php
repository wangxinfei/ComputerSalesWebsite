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
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">

	<head>
		<title>个人中心 - 修改资料</title>
		<meta charset="utf-8" />
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
		<link href="css/member.css?v=1.3.6.0" type="text/css" rel="stylesheet" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
		<script src="js/year_month_day.js" type="text/javascript"></script>
		<script type="text/javascript" language="javascript">
			//市数据加载事件
			var CityDataLoadEvent = function() {};
			var DistrictDataLoadEvent = function() {};
			$(function() {

				$("#nicname").focus(function() {
					$("#shrid").hide();
					$("#shry").hide();
				});
				$("#telephone").focus(function() {
					$("#zjid").hide();
					$("#zjy").hide();
				});
				$("#mobile").focus(function() {
					$("#sjid").hide();
					$("#sjy").hide();
				});
				$("#postcode").focus(function() {
					$("#postid").hide();
					$("#posty").hide();
				});
				$("#realName").focus(function() {
					$("#realId").hide();
					$("#realy").hide();
				});
				$("#street").focus(function() {
					$("#streid").hide();
					$("#strey").hide();
				});

				var temail = $("#sp_email").html();
				if (temail == "") {
					$("#div_email").show();
				} else {
					$("#div_email").hide();
				}


				$("#nicname").blur(function() {
					var nickname = $("#nicname").val();
					if (nickname == "") {
						$("#shrwrong").text("请输入昵称！");
						$("#shrid").show();
						return false;
					} else {
						$("#shry").show();

					}
				});

				function isEmail(strEmail) {
					if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
						return true;
					else {
						return false;
					}
				}

				$("#mobile").blur(function() {
					var tel = $("#mobile").val();
					if (tel == "") {
						$("#sjwrong").text("请输入手机号！");
						$("#sjid").show();
						return false;
					} else {
						if (!checkTel(tel)) {
							$("#sjwrong").text("手机号格式不正确！");
							$("#sjid").show();
						} else {
							$("#sjy").show();
						}

					}
				});
				$("#postcode").blur(function() {
					var post = $("#postcode").val();
					if (!checkcode(post)) {
						$("#postwrong").text("请输入正确的邮编！");
						$("#postid").show();
						return false;
					} else {
						$("#posty").show();

					}
				});
				$("#street").blur(function() {
					var stree = $("#street").val();
					if (stree == "") {
						$("#strewrong").text("请输入内容！");
						$("#streid").show();
						$("#strey").hide();
						return false;
					}
					if (stree.length > 250) {
						$("#strewrong").text("输入内容过长！");
						$("#streid").show();
						$("#strey").hide();
					} else {
						$("#strey").show();
					}
				});
				$("#realName").blur(function() {
					var realName = $("#realName").val();
					if (realName == "") {
						$("#realwrong").text("请输入姓名！");
						$("#realId").show();
						return false;
					} else {
						$("#realy").show();

					}
				});
				$("#btnsave").click(function() {
					var email = $("#sp_email").html();
					var IsUpemail = "0";
					if (email == "") {
						email = $("#txtEmail").val();
						if (!isEmail($("#txtEmail").val())) {
							alert("邮箱不正确!");
							return false;
						}
						var IsUpemail = "1";
					}
					var realName = $("#realName").val();
					var gender = $("input:checked").val();
					var pro = $("#province option:selected").text();
					var city = $("#city option:selected").text();
					var district = $("#district option:selected").text();
					var address = $("#street").val();
					var post = $("#postcode").val();
					var tel = $("#mobile").val();
					var photo = $("#telephone").val();
					var nickname = $("#nicname").val();

					if (email == "") {
						$("#shrwrong1").text("请输入邮箱！");
						$("#shrid1").show();
						return false;
					} else {
						$("#shry1").show();
					}

					if (nickname == "") {
						$("#shrwrong").text("请输入昵称！");
						$("#shrid").show();
						return false;
					} else {
						$("#shry").show();

					}
					if (realName == "") {
						$("#realwrong").text("请输入姓名！");
						$("#realId").show();
						return false;
					} else {
						$("#realy").show();

					}
					if (!checkcode(post)) {
						$("#postwrong").text("请输入正确的邮编！");
						$("#postid").show();
						return false;
					} else {
						$("#postid").hide();
						$("#posty").show();

					}
					if (address == "") {
						$("#strewrong").text("请输入内容！");
						$("#streid").show();
						return false;
					}
					if (district == "请选择区县") {
						$("#strewrong").text("请选择区县！");
						$("#strey").hide();
						$("#streid").show();
						return false;
					}
					if (address.length > 250) {
						$("#strewrong").text("输入内容过长！");
						$("#streid").show();
						return false;
					} else {
						$("#strey").show();
					}
					if (tel == "") {
						$("#sjwrong").text("请输入手机号！");
						$("#sjid").show();
						return false;
					} else {
						if (!checkTel(tel)) {
							$("#sjwrong").text("手机号格式不正确！");
							$("#sjid").show();
						} else {
							$("#sjy").show();
						}
					}

					$.post("/API/MemberAPI.ashx", {
						action: 'update',
						email: email,
						IsUpemail: IsUpemail,
						nickname: nickname,
						realName: realName,
						gender: gender,
						year: year,
						month: month,
						day: day,
						pro: pro,
						city: city,
						dis: district,
						address: address,
						post: post,
						tel: tel,
						photo: photo
					}, function(data) {
						if (data == "ok") {
							alert("保存成功！");
							window.location.reload();
							return false;
						}
						if (data == "false") {
							alert("保存失败！");
							return false;
						}
						if (data == "repeat") {
							alert("手机号已注册过!");
							return false;
						}
						if (data == "erepeat") {
							alert("邮箱已注册过!");
							return false;
						}
					});
				});

			});

			function bindDdlData(cid, data) {
				$(cid).append($("<option value=\"" + data.code + "\">" + data.name + "</option>"));
			}
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

			$(function() {
				var selYear = window.document.getElementById("selYear");
				var selMonth = window.document.getElementById("selMonth");
				var selDay = window.document.getElementById("selDay");
				// 新建一个DateSelector类的实例，将三个select对象传进去
				var date = '';
				var year = '';
				var mon = '';
				var day = '';
				if (date != '') {
					var d = date.split("-");
					year = d[0];
					mon = d[1];
					day = d[2];
				} else {
					year = 2014;
					mon = 12;
					day = 12;
				}

				new DateSelector(selYear, selMonth, selDay, year, mon, day);
			});

			function setAddress(data) {

				$("#province option").each(function() {
					if (data.indexOf($(this).text()) != -1) {
						$("#province").val($(this).val());
						$("#province").change();
					}
				});
				CityDataLoadEvent = function() {
					$("#city option").each(function() {
						if (data.indexOf($(this).text()) != -1) {
							$("#city").val($(this).val());
							$("#city").change();
						}
					});
				};
				DistrictDataLoadEvent = function() {
					$("#district option").each(function() {
						if (data.indexOf($(this).text()) != -1) {
							$("#district").val($(this).val());
							var address = "";
							$("#street").val(address.substr(address.lastIndexOf($(this).text())).replace($(this).text(), ""));
						}
					});
				};
			}
			//
			function checkTel(tel) {
				var mobile = /^1[3-8]+\d{9}$/;
				return mobile.test(tel);
			}
			//
			function checkcode(zipcode) {
				var MyNumber = /^[0-9]{1}[0-9]{5}$/;
				return MyNumber.test(zipcode);

			}

			function checkphone(tel) {
				var mobile = /^(\d{3,4}-?)?\d{7,9}$/;
				return mobile.test(tel);
			}
		</script>
	</head>

	<body>
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
						<div class="cmain mb_back">
							<div class="zbk_top spalid">
								<span>您当前的位置：</span>
								<span id="ctl00_content_website_SiteMapPath1"><a href="#ctl00_content_website_SiteMapPath1_SkipLink"></a><span> <a target="_blank" href="index.html">七颗星</a> </span><span> <em>&gt;</em> </span><span> <a target="_blank" href="member_index.php">我的DR</a> </span><span> <em>&gt;</em> </span><span> <span>个人信息</span>								</span>
								<a id="ctl00_content_website_SiteMapPath1_SkipLink"></a>
								</span>
							</div>
							<!--中间内容-->
							<div class="member_cort">
								<!--左边树-->
								<div class="member_cort-left fl">
									<!--我的DR-->
									<div class="member_cortleft-tittle">
										<i class="mb_home"></i>
										<a rel="nofollow" href="member_index.php">我的</a>
									</div>
									<!--我的DR end-->
									<ul class="member_cort-ul">
										<li>
											<h3> -订单中心-</h3>
											<ul class="member_ul-dr">
												<li id="ctl00_content_treeId_order"><a rel="nofollow" href="member_order.php">订单记录</a></li>
												<li id="ctl00_content_treeId_cart"><a rel="nofollow" href="cart.php">我的购物车</a></li>

											</ul>
										</li>

										<li>
											<h3> -帐户管理-</h3>
											<ul class="member_ul-dr">
												<li class="speacil_color" id="ctl00_content_treeId_myinfo"><a rel="nofollow" href="member_info.php">个人信息</a></li>
												<li id="ctl00_content_treeId_password"><a rel="nofollow" href="member_pwd.php">修改密码</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<!--左边树end-->
								<!--右边的主要内容-->
								<div class="member_cort-right fr">
									<!--我的个人信息-->
									<div class="member_person">
										<div class="member_ask-tittle">
											<h4> 我的个人信息</h4>
											<p> 为了能给您提供个性化服务，请完善您的基本资料。</p>
										</div>
										<!--个人信息填写-->
										<div class="member_person-cort">
											<!--左边-->
											<div class="member_person-cort_left">
											<form action="member_info_change.php" method="post" enctype="multipart/form-data">
												<div class="person-cort_left-write">
													<span>昵&nbsp;&nbsp;&nbsp;称：</span>
													<input type="text" value="<?php echo $user['uickname'] ?>" class="write_text" id="nicname" name="uickname" />
												</div>
												<div class="person-cort_left-write">
													<span>真实姓名：</span>
													<input type="text" value="<?php echo $user['uiname'] ?>" class="write_text" id="realName" name="uiname" />
												</div>
												<div class="person-cort_left-write">
													<?php 
														if($user['uisex']=='') {
													?>
														<span>性&nbsp;&nbsp;别：</span>
														<input type="radio" checked="checked" id="ctl00_content_nan" name="uisex" value="男" />
														<label for="nan"> 男</label>
														<input type="radio" id="ctl00_content_nv" name="uisex" value="女" />
														<label for="nv"> 女</label>
													<?php 
														}
													?>
													<?php 
														if($user['uisex']=='男') {
													?>
														<span>性&nbsp;&nbsp;别：</span>
														<input type="radio" checked="checked" id="ctl00_content_nan" name="uisex" value="男" />
														<label for="nan"> 男</label>
														<input type="radio" id="ctl00_content_nv" name="uisex" value="女" />
														<label for="nv"> 女</label>
													<?php 
														}
													?>
													<?php 
														if($user['uisex']=='女') {
													?>
														<span>性&nbsp;&nbsp;别：</span>
														<input type="radio" id="ctl00_content_nan" name="uisex" value="男" />
														<label for="nan"> 男</label>
														<input type="radio" checked="checked" id="ctl00_content_nv" name="uisex" value="女" />
														<label for="nv"> 女</label>
													<?php 
														}
													?>
												</div>
												<div class="person-cort_left-write">
													<span class="write_vtop">详细地址：</span>
													<input type="textarea" id="street" name="uiadress" value="<?php echo $user['uiadress'] ?>" style="word-wrap:break-word;word-break:break-all;width:400px;height:25px;">
												</div>

												<div class="person-cort_left-write">
													<span class="fl">手&nbsp;&nbsp;机：</span>
													<input type="text" value="<?php echo $user['uiphone'] ?>" class="write_text fl" id="mobile" disabled="true" />
												</div>
												<div>
													<button type="submit" class="bt1 person-cort_left-button" >提交</button>
												</div>
											</form>
											</div>
										
											<!--左边end-->
											<!--右边-->
											<div class="member_person-cort_right">
												<a href="#"> <img width="90" height="90" src="/images/headportrait/<?php echo $user['uiheadportrait'] ?>" /> </a>
												<p> <a href="member_avatar.php">更换头像</a> </p>
											</div>
											<!--右边end-->
										</div>
										<!--个人信息填写end-->
									</div>
									<!--我的个人信息end-->
								</div>
								<!--右边的主要内容end-->
							</div>
							<!--中间内容end-->
						</div>
						<!--内容end-->
					</div>
					<!--中间end-->
				</div>
				<!--底部-->
				<div class="footer">
					<!--错误-->
					<!--提示-->
					<div class="loverit_word2" style="display: none;">
						Darry Ring严格规定男士凭身份证一生仅能定制一枚，象征男人一生真爱的最高承诺。输入身份证号码即可查询购买记录。
					</div>
					<!--提示end-->
					<div class="loverit_wrong2" style="display: none;">
						<p>信息填写不正确，请重新输入。</p>
					</div>
					<!--错误end-->
					<!--验证身份-->
					<div class="loveit_center">
						<div class="love_doit2" style="display: none;">
							<div class="loverit_center2">
								<div class="loverit_write2">
									<label>国家/区域:</label>
									<select id="txtArea" style="vertical-align: middle;height:22px;"> <option value="0">中国大陆</option> <option value="1">中国香港</option> <option value="2">中国澳门</option> <option value="3">中国台湾</option> </select>
									<label>先生姓名:</label>
									<input type="text" class="lit_txt" id="textName2" />
									<label>身份证号码:</label>
									<input type="text" class="lit_txt" id="textIDCard2" />
									<span id="btnsub2"></span>
								</div>
							</div>
						</div>
					</div>
					<!--验证身份end-->
					<?php include("bottom.php") ?>
				<div class="model" id="model">
					<div class="Prompt" id="Prompt">
					</div>
					<span id="log_uid" style="display:none"></span>
					<span id="log_uname" style="display:none"></span>
					<span id="log_orderid" style="display:none"></span>
					<span id="log_price" style="display:none"></span>
				</div>
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
<?php
include("dbconfig.php");

  $uiphone=$_SESSION['uiphone'];
  $sql="SELECT * FROM userinfo where uiphone = '$uiphone'";
  //接收返回值
  $mysqli_result=$db->query($sql);
  if($mysqli_result == false){
    echo "SQL错误";
    exit;
  }
  //用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
  $user;
  while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
    $user=$row;
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">
	<head>
		 <title>个人中心 - 修改密码</title>
        <meta charset="utf-8"/>
        <link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet"/>
          <link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet">
          <link href="css/member.css?v=1.3.6.0" type="text/css" rel="stylesheet">
          <script src="js/jquery.js" type="text/javascript"></script> 
					<script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
    			<script src="js/member.js" type="text/javascript"></script>
    <script>
        $(function () {
            $("#ctl00_content_pwd1").keypress(function () {
                var pwd1 = $("#ctl00_content_pwd1").val();
                if (pwd1.length >= 5 && pwd1.length < 9) {
                    $("#rou").addClass('mb_red-color');
                    $("#zhong").removeClass('mb_red-color');
                    $("#strong").removeClass('mb_red-color');
                }
                if (pwd1.length >= 9 && pwd1.length < 12) {
                    $("#rou").addClass('mb_red-color');
                    $("#zhong").addClass('mb_red-color');
                    $("#strong").removeClass('mb_red-color');

                }
                if (pwd1.length >= 12 && pwd1.length < 20) {
                    $("#rou").addClass('mb_red-color');
                    $("#zhong").addClass('mb_red-color');
                    $("#strong").addClass('mb_red-color');
                }
                
            });

            $("#ctl00_content_pwd1").blur(function () {
                var pwd1 = $("#ctl00_content_pwd1").val();
                if (pwd1.length < 5 || pwd1.length > 20) {
                    $("#txtshow").text("密码长度不正确！");
                    $("#rou").removeClass('mb_red-color');
                    $("#zhong").removeClass('mb_red-color');
                    $("#strong").removeClass('mb_red-color');
                    $("#ctl00_content_pwd1").val("");
                    $("#showr").show();
                    $("#show_wrong").show();
                    return false;
                } else {
                    $("#showr").hide();
                    $("#show_wrong").hide();
                }
            });
            $("#ctl00_content_pwd2").blur(function () {
                var pwd1 = $("#ctl00_content_pwd1").val();
                var pwd2 = $("#ctl00_content_pwd2").val();
                if (pwd1 != pwd2) {
                    $("#txtwrong").text("两次密码输入不一致！");
                    $("#ctl00_content_pwd2").val("");
                    $(".againpwd").show();
                    return false;
                } else {
                    $(".againpwd").hide();
                }
            });
        });

        function check() {
            var pwd = $("#ctl00_content_pwd").val();
            var pwd1 = $("#ctl00_content_pwd1").val();
            var pwd2 = $("#ctl00_content_pwd2").val();
            if (pwd=="") {
                alert("请输入原始密码！");
                return false;
            }
            if (pwd1 == "" || pwd2 == "") {
                $("#txtwrong").text("请输入密码！");
                $(".againpwd").show();
                return false;
            }
    
            if (pwd1 != pwd2) {

                $("#txtwrong").text("两次密码输入不一致！");
                $(".againpwd").show();
                return false;
            }
        }
    </script>
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

            $.get("/nAPI/QuitExit.ashx", function (data) {
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
                
        <div class="zbk_top spalid">
        <span>您当前的位置：</span>
        <span id="ctl00_content_website_SiteMapPath1"><a href="#ctl00_content_website_SiteMapPath1_SkipLink"></a><span>
                <a target="_blank" href="index.php">七颗星</a>
            </span><span>
            <em>></em>
            </span><span>
                <a target="_blank" href="member_index.php">我的</a>
            </span><span>
            <em>></em>
            </span><span>
            <span>修改密码</span>
            </span><a id="ctl00_content_website_SiteMapPath1_SkipLink"></a></span>
        </div>
            </div>
            <!--中间内容-->
            <div class="member_cort">
                <!--左边树-->
                
<div class="member_cort-left fl">
    <!--我的DR-->
    <div class="member_cortleft-tittle">
        <i class="mb_home"></i><a rel="nofollow" href="member_index.php">我的</a>
    </div>
    <!--我的DR end-->
    <ul class="member_cort-ul">
        <li>
            <h3>
                -订单中心-</h3>
            <ul class="member_ul-dr">
                <li id="ctl00_content_treeId_order"><a rel="nofollow" href="member_order.php">订单记录</a></li>
                <li id="ctl00_content_treeId_cart"><a rel="nofollow" href="cart.php" target="_blank">我的购物车</a></li>
                
            </ul>
        </li>
        
        <li>
            <h3>
                -帐户管理-</h3>
            <ul class="member_ul-dr">
                <li id="ctl00_content_treeId_myinfo"><a rel="nofollow" href="member_info.php">个人信息</a></li>
                <li class="speacil_color" id="ctl00_content_treeId_password"><a rel="nofollow" href="member_pwd.php">修改密码</a></li>
               
            </ul>
        </li>
    </ul>
</div>

                <!--左边树end-->
                <!--右边的主要内容-->
                <div class="member_cort-right fr">
                    <!--找回密码-->
                    <div class="member_password">
                        <div class="member_ask-tittle">
                            <h4>
                                修改密码</h4>
                            <p>
                                为保障账户安全，建议避免使用与其他网站相同密码。</p>
                        </div>

                        <!--找回密码-->
                    <form action="member_pwd_change.php" method="POST">
         
                        <div class="member_password-find">
                            <div class="person-cort_left-write">
                                <span>原始密码：</span>
                                <input type="password" class="write_text" id="ctl00_content_pwd" name="current_pwd">
                            </div>
                            <div style="float: left" class="person-cort_left-write person-cort_left-password">
                                <span>新密码：</span>
                                <input type="password" class="write_text" id="ctl00_content_pwd1" name="newpwd">
                                <em id="rou">弱</em> <em id="zhong">中</em> <em id="strong">强</em> 
                               
                            </div>
                            <div style="display: none;" id="showr" class="person-cort_left-write">
                                <i id="pwdwrong" class="writer_wrong pwd"></i><em class="pwd" id="txtshow"></em>
                            </div>
                            <div style="clear: both" class="person-cort_left-write">
                                <span>确认新密码：</span>
                                <input type="password" class="write_text" id="ctl00_content_pwd2" name="newpwd2">
                                <i id="wrong" style="display: none" class="writer_wrong againpwd"></i><em style="display: none" class="againpwd" id="txtwrong"></em>
                            </div>
                            
                        </div>

                        <div style="margin-left: 90px">
                                <input type="submit" style="border-style:None;" class="bt1 person-sp-button" id="btnsubmit" onClick="return check();" value="立即提交" name="ctl00$content$btnsubmit">
                         </div>
                    </form>
                        <!--找回密码end-->
                    </div>
                    <!--找回密码end-->
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
     <img width="92" height="82" alt="七颗星 官方微信" src="images/to_erwei.jpg" /> 
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
<!-----------------------定制咨询------------------------>
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
            }
            else {
                hidediv(i);
            }
        } 
    }
    function contenttxt(id, sid) {
        for (var i = 1; i <= 7; i++) {
            if (i == id) {
                showtxt(id, sid);
            }
            else {
                hidetxt(i, sid);
            }
        }


    }
    function showtxt(id, sid) {
        var objtitle = $("#content_title" + id + "_" + sid);

        if (objtitle.css("display") == "none") {
            objtitle.show("fast");
        }
        else {

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

        $("#li" + id).css({ "font-size": "14px", "color": "#7d7d7d" });
    }

    function showdiv(id) {
        if ($("#box" + id).css("display") == "none") {
            $("#box" + id).show("fast");
            $("#li" + id).css({ "font-size": "18px", "color": "#000000" });
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
<?php
include("dbconfig.php");
if(ensure_logged_in()){
  $uiphone=$_SESSION['uiphone'];

  $sql="SELECT * FROM morder where ouiphone = '$uiphone'";
        //接收返回值
  $mysqli_result=$db->query($sql);
  if($mysqli_result == false){
    echo "SQL错误1";
    exit;
  }
        //用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
  while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
    $orders[]=$row;
  }

  $sql="SELECT * FROM userinfo where uiphone = '$uiphone'";
        //接收返回值
  $mysqli_result=$db->query($sql);
  if($mysqli_result == false){
    echo "SQL错误2";
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
  <meta charset="utf-8"/>
  <title>个人中心 - 订单中心</title>
  <link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet"/>
  <link href="css/member.css?v=1.3.6.0" type="text/css" rel="stylesheet"/>
  <script src="js/jquery.js" type="text/javascript"></script> 
  <script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script> 
  <script type="text/javascript" src="js/member.js"></script>
</head>
<body>
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

        window.location.href = "logoutuser.php";
      }
    }
  </script>

  <div class="cort">

   <div class="cort">
     <div class="tobuy cmain">
       <div class="cmain mb_back">

        <div class="zbk_top spalid">
          <span>您当前的位置：</span>
          <span id="ctl00_content_website_SiteMapPath1"><a href="#ctl00_content_website_SiteMapPath1_SkipLink"></a><a id="ctl00_content_website_SiteMapPath1_SkipLink"></a></span>
        </div>
        <div class="member_cort">

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
                  <li class="speacil_color" id="ctl00_content_ucmemberleft_order"><a rel="nofollow" href="member_order.php">订单记录</a></li>
                  <li id="ctl00_content_ucmemberleft_cart"><a rel="nofollow" href="cart.php" target="_blank">我的购物车</a></li>

                </ul>
              </li>

              <li>
                <h3>
                -帐户管理-</h3>
                <ul class="member_ul-dr">
                  <li id="ctl00_content_ucmemberleft_myinfo"><a rel="nofollow" href="member_info.php">个人信息</a></li>
                  <li id="ctl00_content_ucmemberleft_password"><a rel="nofollow" href="member_pwd.php">修改密码</a></li>

                </ul>
              </li>
            </ul>
          </div>


          <!--右边的主要内容-->
          <div class="member_cort-right fr">
           <!--我的订单-->
           <div class="member_myorder">
             <!--切换nav-->
             <div class="member_all-nav">
               <div class="member_all-nav-top">
                 <ul class="member_all-nav-ul fl">
                   <li class="member_all-nav-click">全部订单</li>

                 </ul>
                 <!--右边-->
                 <div class="member_all-nav-right fr">
                   <i class="member_tz"></i>
                   <span>订单如需加急处理，请及时联系</span>
                   <a target="_blank" style="cursor: pointer" onClick="javascript:showxiaon();">
                    在线客服>></a>
                  </div>
                  <!--右边end-->
                </div>
                <!--黄色线-->
                <div class="member_all-nav-line"></div>
                <!--黄色线end-->
              </div>
              <!--切换nav end-->
              <!--订单-->

              <div class="member_myorder-allorder">
                <div class="member_news-it">

                  <script src="js/orderlist.js" type="text/javascript"></script> 
                  <script type="text/javascript" language="javascript">
                    function deleteOrder(orderid) {
                      if (confirm("确定要删除订单吗?")) {
                       window.location.href = "member_order_delete.php?ocoid=orderid";    
                     }

                   }
                 </script>
                 <table cellspacing="0" cellpadding="0" border="0" class="member_title-table">
                   <tbody><tr class="member_myorder-table-first">
                     <td class="myorder-table_td1">订单商品</td>
                     <td class="myorder-table_td2">商品数量</td>

                     <td class="myorder-table_td2">付款金额</td>
                     <td class="myorder-table_td4">交易状态</td>
                     <td class="myorder-table_td5">交易日期</td>
                     <td class="myorder-table_td6">操作</td>
                   </tr>
                 </tbody></table>

                 <?php
                 if(isset($orders))
                    foreach ($orders as $morder) {
                 ?>
                  <table cellspacing="0" cellpadding="0" border="0" class="member_myorder-table">

                    <tbody><tr class="member_myorder-table-sec">
                      <td class="myorder-table-sec_td1" colspan="4">订单号：<?php echo $morder['ocoid']; ?></td>
                      <td class="myorder-table-sec_td2" colspan="2"></td>
                    </tr>
                    <tr class="member_myorder-table-third">
                      <td class="myorder-table_td1">

                        <div class="myorder-table-third-cp">
                          <div class="img_left fl">
                            <img width="75" height="75" src="/images/computers/<?php echo $morder['ocopic']?>">
                          </a>
                        </div>
                        <div class="img_right fr">
                          <p><?php echo $morder['oconame']; ?></p>
                        </sa>

                      </div>
                    </div>

                  </td>
                  <td class="myorder-table_td3">

                    <div style="height:55px;line-height:55px;font-family:微软雅黑;" class="myorder-table-third-cp">
                      <?php echo $morder['ocoamount']; ?></div>

                    </td>
                    <td style="font-family:微软雅黑;" class="myorder-table_td2">
                      ￥<?php echo $morder['omoney']; ?>  
                    </td>
                    <td class="myorder-table_td4">
                    	交易成功
                    </td>
                    <td class="myorder-table_td5">
                      <?php echo $morder['otime']; ?>
                    </td>
                    <td class="myorder-table_td6">
                      <p style="cursor:pointer">
                        <a href="member_order_delete.php?ocoid='<?php echo $morder['ocoid']; ?>'">删除订单</a>
                      </p>
                    </td>
                  </tr>


                </tbody></table>
                <?php
                   }
                ?>

            </div>

            <div style="display:none" class="member_news-it">

              <script src="js/orderlist.js" type="text/javascript"></script> 
              <script type="text/javascript" language="javascript">
                function deleteOrder(orderid) {
                  if (confirm("确定要删除订单吗?")) {
                    window.location.href = "member_order_delete.php?ocoid=orderid";    
                  }
                }
              </script>


              <table cellspacing="0" cellpadding="0" border="0" class="member_myorder-table">

              </table>


            </div>    
          </div>

        </div>     

      </div>
      <!--我的订单end-->
    </div>
    <!--右边的主要内容end-->
  </div>

</div>
</div>

</div>


<!--底部-->
<div class="footer"> 
  <!--错误--> 
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
  </body></html>
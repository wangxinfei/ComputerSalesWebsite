<?php
include("dbconfig.php");

  $ctype=$_GET['ctype'];
	$sql="SELECT * FROM computer where ctype = $ctype order by cpicture";
	//接收返回值
	$mysqli_result=$db->query($sql);
	if($mysqli_result == false){
		echo "SQL错误";
		exit;
	}
	//用数组储存信息,$mysqli_result->fetch_array(MYSQL_ASSOC)重复调用自动显示下一条数据，直至没有返回null,且该函数调用不可逆，只能用一次
	$rows=[];
	while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
		$rows[]=$row;
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" class="hb-loaded">
 <head>
  <title>商品列表</title>
  <link href="css/same.css?v=1.3.7.2" type="text/css" rel="stylesheet" />
  <link href="css/dr.css?v=1.3.5.0" type="text/css" rel="stylesheet" /> 
  <script src="js/jquery.js" type="text/javascript"></script> 
  <script src="js/index.js?virsion=1.3.7.2" type="text/javascript"></script>
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
    <script>
        var cns = document.getElementById("nt4").getElementsByTagName("li");

        for(var i = 0;i<cns.length;i++)
        {
            cns[i].addEventListener('click',function () {

                for(var i = 0;i<cns.length;i++){
                    cns[i].className = "";
                }
                this.className = "lis";
            });
        }
  	</script>
   <!--钻戒页面中间--> 
   <div class="cort"> 
    <div class="cmain sp_cort fix"> 
     <!--背景图--> 
     <div class="zj_bk"> 
      <div class="zbk_top spalid"> 
       <span>您当前的位置：</span> 
       <span id="website_SiteMapPath1"><a href="#website_SiteMapPath1_SkipLink"></a><span> <a target="_blank" href="index.html">七颗星</a> </span><span> <em>&gt;</em> </span><span> <span>商品列表</span> </span><a id="website_SiteMapPath1_SkipLink"></a></span> 
      </div> 
      <!--banner中间内容--> 
      <div class="zbk_center"> 
       <!--banner左边--> 
       <div class="zbkc-left"> 
        <h2> 七颗星电脑商城</h2> 
        <h3> 您值得信赖的商城</h3> 
        <h4> 七颗星，七人创建，一人代表着一颗星<br>象征着冉冉升起的新星，势不可挡</h4> 
        <div class="button"> 
         <div id="dzck" class="bt1"> 
          <a target="_blank" href="javascript:void(0)">购买流程说明</a> 
         </div> 
        </div> 
       </div> 
       <!--banner右边的背景图--> 
       <div class="zbkc-right"> 
        <img width="458" height="260" alt="公司简介" src="images/background/bg1.PNG" /> 
       </div> 
      </div> 
     </div> 
     <!--背景图end--> 
     <!--流程图--> 
	<style>
		.buy_routine{
			font-size: 16px;
			color: #FF5733;
		}
		.drchoose_ul  .lis{
	        background: red;
	        color: #fff;
 		}
	</style>
     <div class="the_lct"> 
      	<p class="buy_routine">购买流程：1.会员登录 > 2.挑选类型 > 3.挑选电脑 > 4.提交订单 > 5.支付 > 6.完成</p>
     </div> 
     <!--流程图end--> 
     <!--小导航--> 
     <div class="allchose_nav"> 
      <!--购买选项--> 
      <div class="dr_choose"> 
       <!--选项nav--> 
       <div class="drcho_top"> 
        <ul class="drchoose_ul"> 
         <li id="ucser_all"><span>所有商品</span> </li>
         <li class="<?php if($ctype == "'轻薄本'") echo "choose_hover";else echo "123";?>" id="ucser_forever"><span>轻薄本系列</span> </li> 
         <li class="<?php if($ctype == "'游戏本'") echo "choose_hover";else echo "123";?>" id="ucser_myheart"><span>游戏本系列</span> </li> 
         <li class="<?php if($ctype == "'商用本'") echo "choose_hover";else echo "123";?>" id="ucser_swear"><span>商用本系列</span> </li> 
         <li class="<?php if($ctype == "'二合一'") echo "choose_hover";else echo "123";?>" id="ucser_justyou"><span>二合一系列</span> </li>  
         <li class="<?php if($ctype == "'超极本'") echo "choose_hover";else echo "123";?>" style="background-image:none" id="ucser_truelove"><span>超极本系列</span> </li> 
        </ul> 
       </div> 
       <div class="drcho_bto"></div> 
      </div> 
      <!--购买选项end--> 
      <script type="text/javascript" language="javascript">
    $(function () {
       $("#ucser_all").click(function () {
            window.location.href = "lists.php";
        });
        $("#ucser_forever").click(function () {
            window.location.href = "type.php?ctype='轻薄本'";
        });
        $("#ucser_myheart").click(function () {
            window.location.href = "type.php?ctype='游戏本'";
        });
        $("#ucser_swear").click(function () {
            window.location.href = "type.php?ctype='商用本'";
        });
        $("#ucser_justyou").click(function () {
            window.location.href = "type.php?ctype='二合一'";
        });
        $("#ucser_truelove").click(function () {
            window.location.href = "type.php?ctype='超极本'";
        });
    });
</script> 
      <!--参数选项--> 
      <div class="select_choose"> 
       <div class="thefirst_it"> 
        <div class="search2 search_other fr"> 
         <input type="text" placeholder="产品名称/关键字" class="txt2" id="txtTitle" name="txtTitle" /> 
         <div id="prosearch" class="icon toser2"></div> 
        </div> 
        <div style="display:none" id="btncz" class="choose_cz fl"> 
         <span>重 置</span> 
        </div> 
        <div class="choose_serach fl" style="display:none"> 
         <a target="_blank" href="/diydr/"><span>高级搜索</span></a> 
        </div> 
        <span style="display:none" id="spanclick"></span> 
        <div style="display:none" class="choose-ks fr"> 
         <span id="xp"><i>新品</i> <em></em></span>
         <span id="xl"> <i>销量</i> <em></em></span>
         <span id="jg"><i>价格</i> <em></em></span> 
        </div> 
       </div> 
       <div class="thesec_it"> 
        <div class="thesec_word-left fl"> 
         <span>排序：</span> 
         <b> <i id="i_xl">按销量</i> <i id="i_jg">按价格</i> </b> 
        </div> 
       </div> 
      </div> 
      <!--参数选项end--> 
     </div> 
     <!--小导航end--> 
     <!--高级搜索--> 
     <!--高级搜索end--> 
     <!--购买的款式--> 
     <div class="cmain"> 
      <ul class="buyit"> 
       <!--每一个款式--> 
       <?php
		  	foreach ($rows as $row ) {
		  ?>
	       <li> 
	        <div class="by_top"> 
	         <a target="_blank" href="detail.php?cid='<?php echo $row['cid'] ?>'"></a> 
	         <div class="bything-one"> 
	          <img width="236px" height="236" alt="DR钻戒 Forever系列 经典款&nbsp;50分&nbsp;H色" src = "/images/computers/<?php echo $row['cpicture']?>" /> 
	         </div> 
	         <!-- <div class="bything-two"> 
	          <img width="236px" height="236" src="images/201409011935072849fe802f.jpg" /> 
	         </div>  -->
	        </div> 
	        <div class="by_center"> 
	        </div> 
	        <div class="by_bottom"> 
	         <p> <a target="_blank" href="/darry_ring/78.html"><?php echo $row['ctype']." ".$row['cbrand'].' '.$row['cname'] ?></a></p> 
	         <p> <span><?php echo '￥'.$row['cprice'] ?></span><i>库存：<?php echo $row['camount'] ?></i></p> 
	        </div> </li> 
      <?php
      	}
      ?>
      </ul> 
      <!--购买的款式end--> 
     </div> 
    
     <!-- <div class="paging_all" id="pageing_pagingDiv"> 
      <div class="paging_all-cort"> 
       <ul class="paging fl"> 
        <li class="pli pag_gray">&lt;&lt;上一页</li>
        <li class="pag_gray">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li class="pli2">下一页&gt;&gt;</li>
       </ul> 
       <p class="pag_p fl"> <span>共5页，到第</span> <input type="text" class="pag_txt" id="pageing_pag_txt" name="pageing$pag_txt" />页 <input type="button" class="pag_bt" onClick="__CurrentPaging.PageIndexChaned($('#pageing_pag_txt').val());$('#pageing_pag_txt').val('');" value="确定" /> </p> 
      </div> 
     </div>  -->
     <!--分页end--> 
     <!--分页end--> 
    </div> 
   </div> 
   <!--底部--> 
   <div class="footer"> 
    <!--错误--> 
    <div class="loverit_wrong2">
     <p>信息填写不正确，请重新输入。</p>
    </div> 
    <!--错误end--> 
   
    <div style="clear:both"></div> 
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
   <div class="comeback" style="display: none;"></div> 
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
      <!--<div class="content_title"  onclick="contenttxt(2,4)">4、Q：LES可以购买吗？</div>
<div class="content_txt" id="content_title2_4">A：真爱不分性别，只要确定了对方就是您这辈子的真爱，同时您愿意为此绑定自己的身份证信息，那
么DR不会限制您追求真爱的自由，您同样是可以购买到Darry Ring的真爱女戒。

</div>--> 
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
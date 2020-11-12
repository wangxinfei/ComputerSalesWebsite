<?php
include("dbconfig.php");
	if(ensure_logged_in_manager()){
		$manager=$_SESSION['manager'];
		$sql="SELECT * FROM manager where madmin = '$manager'";
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
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>添加商品</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		
		<script src="assets/js/ace-extra.min.js"></script>
	</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="javascript:void(0);" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							七颗星 Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Admin</small>
									<?php echo $user['mname']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="logoutuser.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<!---商品-->
					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-diamond"></i>
							<span class="menu-text"> 商品 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="goods.php">
									<i class="menu-icon fa fa-caret-right"></i>
									查看商品
								</a>

								<b class="arrow"></b>
							</li>

							<li class="active">
								<a href="goods_add.php">
									<i class="menu-icon fa fa-caret-right"></i>
									添加商品
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<!---商品end-->
					<!--- 订单-->
					<li class="active open"><a href="#" class="dropdown-toggle"> <em class="menu-icon fa fa-pencil-square-o"></em> <span class="menu-text"> 订单 </span> <strong class="arrow fa fa-angle-down"></strong> </a> <strong class="arrow"></strong>
					  <ul class="submenu">
							<li class="">
								<a href="order.php">
									<i class="menu-icon fa fa-caret-right"></i>
									查看订单
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<!---订单end-->
					<li class="active open"><a href="#" class="dropdown-toggle"> <em class="menu-icon fa fa-pencil-square-o"></em> <span class="menu-text"> 会员 </span> <strong class="arrow fa fa-angle-down"></strong> </a> <strong class="arrow"></strong>
					  <ul class="submenu">
							<li class="">
								<a href="members.php">
									<i class="menu-icon fa fa-caret-right"></i>
									查看会员
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="javascript:void(0);">首页</a>
							</li>

							<li>
								<a href="javascript:void(0);">商品</a>
							</li>
							<li class="active"> &amp; goods</li>
						</ul>

					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								商品表&nbsp;&nbsp;<span style="font-size: 14px;color: red;">&amp;添加</span>
							</h1>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<form action="goods_adds.php" class="form-horizontal" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">商品系列</label>
										<div class="col-sm-9">
											<select name="ctype" class="form-control" style="max-width: 200px;">
												<option value="轻薄本系列">轻薄本系列</option>
												<option value="游戏本系列">游戏本系列</option>
												<option value="商用本系列">商用本系列</option>
												<option value="二合一系列">二合一系列</option>
												<option value="超极本系列">超极本系列</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">商品编号</label>

										<div class="col-sm-9">
											<input name="cid" type="text" placeholder="商品编号" class="col-xs-10 col-sm-5" style="max-width: 360px;"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">商品品牌</label>
										<div class="col-sm-9">
											<input name="cbrand" type="text" placeholder="商品品牌" class="col-xs-10 col-sm-5" style="max-width: 360px;"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" >商品名称</label>
										<div class="col-sm-9">
											<input name="cname" type="text" placeholder="商品名称" class="col-xs-10 col-sm-5" style="max-width: 360px;"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" >商品数量</label>

										<div class="col-sm-9">
											<input name="camount" type="number" placeholder="商品数量" class="col-xs-10 col-sm-5" min="1" value="1" style="max-width: 200px;"/>
										</div>
									</div>
									<div class="form-group">
										<label  class="col-sm-3 control-label no-padding-right" >商品价格</label>

										<div class="col-sm-9">
											<input name="cprice" type="number" placeholder="商品价格" class="col-xs-10 col-sm-5" min="0.00" step="0.01" style="max-width: 200px;"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" name="file">商品图片</label>

										<div class="col-sm-9" style="max-width: 360px;">
											<input name="file" type="file" id="file"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" >商品详情</label>

										<div class="col-sm-9">
											<textarea name="cdetail" class="form-control limited"  maxlength="50" style="width: 360px;height: 80px;"></textarea>
										</div>
									</div>
									<div class="form-group">

										<div class="col-sm-9 col-md-offset-2" >
											<div class="center">
												<button type="submit" class="btn btn-sm btn-success">
													提交
													<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">七颗星</span>
							,Chickdinner! &copy; 2019
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				
				$('#img-1 ,#img-2,#img-3,#img-4').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				/***************/
			})
		</script>
	</body>
</html>

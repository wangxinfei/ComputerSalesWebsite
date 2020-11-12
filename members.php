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

		$sql="SELECT * FROM userinfo order by uitime";
		$mysqli_result=$db->query($sql);
		$rows=[];
		while($row=$mysqli_result->fetch_array(MYSQL_ASSOC)){
			$rows[]=$row;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>七颗星后台首页</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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

							<li class="">
								<a href="goods_add.php">
									<i class="menu-icon fa fa-caret-right"></i>
									添加商品
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

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
					<li class="active open"><a href="#" class="dropdown-toggle"> <em class="menu-icon fa fa-diamond"></em> <span class="menu-text"> 会员 </span> <strong class="arrow fa fa-angle-down"></strong> </a> <strong class="arrow"></strong>
					  <ul class="submenu">
						  <li class="active">
								<a href="members.phps">
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

					<div class="page-content" style="min-height: 740px;">
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
								会员表&nbsp;&nbsp;<span style="font-size: 14px;color: red;">&amp;查看</span>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center col-md-1">会员账号</th>
													<th class="center col-md-1">会员昵称</th>
													<th class="center col-md-2">会员姓名</th>
													<th class="center col-md-1">会员性别</th>
													<th class="center col-md-3">会员地址</th>
													<th class="center col-md-1">注册时间</th>
													<th class="center col-md-1">功能</th>
												</tr>
											</thead>
<?php
	foreach ($rows as $row ) {
?>
											<tbody>
												<tr>
													<td class="center"> <?php echo $row['uiphone']; ?> </td>
													
													<td class="center"><?php echo $row['uickname']; ?></td>
													<td class="center"><?php echo $row['uiname']; ?></td>
													<td class="hidden-480 center"><?php echo $row['uisex']; ?></td>
													<td class="center"><?php echo $row['uiadress']; ?></td>
													<td class="hidden-480 center"> <?php echo $row['uitime']; ?> </td>
												
													<td class="center">
														<div class="hidden-sm hidden-xs">
															<button class="btn btn-xs btn-danger" onclick="window.location.href='delete.php?uiphone=<?php echo $row['uiphone'] ?>'">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
														</div>
														</div>
													</td>
												</tr>
											</tbody>

<?php
	}
?>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<!--page-->
			
			<!--page end-->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">七颗星</span>
							winner winner,Chickdinner! &copy; 2019
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
			
			<!-- /.modal-->
<!-- 			<div id="modal-table" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header no-padding">
							<div class="table-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									<span class="white">&times;</span>
								</button>
								修改商品数量
							</div>
						</div>

						<div class="modal-body no-padding">
							<form action="" class="form-horizontal">
								<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">商品编号</label>
			
										<div class="col-sm-9">
											<input type="text" value="   <?php echo $row['cid']; ?>" class="col-xs-10 col-sm-5" readonly/>
										</div>
									</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right">商品名称</label>
		
									<div class="col-sm-9">
										<input type="text" value="   钟爱一生" class="col-xs-10 col-sm-5" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right">修改数量</label>
		
									<div class="col-sm-9">
										<input type="number" value="   钟爱一生" class="col-xs-10 col-sm-5" min="1"/>
									</div>
								</div>
							</form>
						</div>

						<div class="modal-footer no-margin-top">
							<button class="btn btn-sm btn-success pull-right" >
								提交
							</button>
						</div>
					</div>
					
				</div>
			</div> -->
			<!-- /.modal-end -->
		<!-- </div> -->
		<!-- /.main-container -->

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
				/***************/
			})
		</script>
	</body>
</html>

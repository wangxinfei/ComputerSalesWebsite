<?php
	include("dbconfig.php");
	session_destroy();
	session_regenerate_id(true);
	session_start();
	redirect("index.php","退出登录成功！");
?>
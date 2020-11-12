<?php
header("charset=utf-8");
include("dbconfig.php");

    $ctype = $_POST['ctype'];
    $cid = $_POST['cid'];
    $cbrand = $_POST['cbrand'];
    $cname = $_POST['cname'];
    $camount = $_POST['camount'];
    $cprice = $_POST['cprice'];
    $cdetail = $_POST['cdetail'];
	$cprodata = date("Y-m-d");
	$cpicture;


	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	//echo $_FILES["file"]["size"];
	$extension = end($temp);     // 获取文件后缀名
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 2048000)   // 小于 2000 kb
	&& in_array($extension, $allowedExts))
	{
	    if ($_FILES["file"]["error"] > 0)
	    {
	        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	    }
	    else
	    {
	    	$cpicture = $_FILES["file"]["name"];
	        if (file_exists("images/computers/" . $_FILES["file"]["name"]))
	        {
	            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
	        }
	        else
	        {
	            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
	            move_uploaded_file($_FILES["file"]["tmp_name"], "images/computers/" . $_FILES["file"]["name"]);
	            //echo "文件存储在: " . "images/computers/" . $_FILES["file"]["name"];
	        }
	    }
	}
	else
	{
	    echo "非法的文件格式";
	}
	$sql = "SELECT cid FROM computer where cid = '$cid'";
	//mysqli_query($db, "set names 'utf8'");
	$res = mysqli_query($db, $sql);
	
	if (mysqli_num_rows($res) > 0) {
		$sqlAdd = "UPDATE computer set camount=camount+$camount where cid = '$cid'";
		$db->query($sqlAdd);
		echo "<script>alert('商品已存在，数量更新成功！'); location.href='goods_add.html';</script>";
	} else {
		//向数据库中插入数据
		//$courseId = mysqli_fetch_assoc($res)["id"];
		$sql = "INSERT INTO computer (cid, cbrand, cname, ctype, cprice, cpicture, cdetail, camount, cprodata) VALUES ('".$cid."', '" .$cbrand."', '" .$cname."', '" .$ctype."' , '" .$cprice."', '" .$cpicture."', '" .$cdetail."',  '" .$camount."', '" .$cprodata."')";
		$db->query($sql);
		echo "<script>alert('添加成功！'); location.href='goods_add.html';</script>";
	}
	mysqli_close($db);
?>
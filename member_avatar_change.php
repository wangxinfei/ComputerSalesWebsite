<?php
header("charset=utf-8");
include("dbconfig.php");
	if(ensure_logged_in()){
	
		$uiphone=$_SESSION['uiphone'];
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
		  //   	$sFileName = "sda.php";
				// $sOriginalFileName = $sFileName;
				// $sExtension = s str($sFileName, (strrpos($sFileName, '.') + 1));//找到扩展名
				// $sExtension = strtolower($sExtension);
				// $sFileName = date("YmdHis").rand(100, 200).".".$sExtension; //这样就是我们的新文件名了，全数字的不会有乱码了哦。
		    	 //iconv("GBK", "UTF-8", $content);
		    	$name = iconv("GBK", "UTF-8", $_FILES["file"]['name']);
		    	$cpicture = $name;
		        if (file_exists("images/headportrait/" . $_FILES["file"]["name"]))
		        {
		            $sql="UPDATE userinfo set uiheadportrait = '$cpicture' where uiphone = '$uiphone'";
		            $res=$db->query($sql);
					echo $sql;
					if($res){
						echo "<script>alert('更换头像成功！'); location.href='member_info.php';</script>";
					}else{
						echo "<script>alert('更换头像失败！'); location.href='member_info.php';</script>";
					}
		        }
		        else
		        {
		            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
		            move_uploaded_file($_FILES["file"]["tmp_name"], "images/headportrait/" . $_FILES["file"]["name"]);
		            //echo "文件存储在: " . "images/computers/" . $_FILES["file"]["name"];
		        }
		    }
		}
		else
		{
		    echo "非法的文件格式";
		}

		$sql="UPDATE userinfo set uiheadportrait = '$cpicture' where uiphone = '$uiphone'";
		$res=$db->query($sql);
		//echo $sql;
		if($res){
			echo "<script>alert('更换头像成功！'); location.href='member_info.php';</script>";
			//echo "236";
		}else{
			echo "<script>alert('更换头像失败！'); location.href='member_info.php';</script>";
		}
		
		mysqli_close($db);
	}
?>
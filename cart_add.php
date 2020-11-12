<?php
include("dbconfig.php");
	if(ensure_logged_in()){

		$uiphone=$_SESSION['uiphone'];
		$cacoid=$_GET['cacoid'];
		$caconame=$_GET['caconame'];
		$cacobrand=$_GET['cacobrand'];
		$cacotype=$_GET['cacotype'];
		$cacopic=$_GET['cacopic'];
		$cacoamount=$_GET['cacoamount'];
		$cacomoney=$_GET['cacomoney'];
		$camoney=$cacoamount*$cacomoney;

		$sql = "select * from cart where cauiphone = '$uiphone' and cacoid = '$cacoid'";
		$res = mysqli_query($db, $sql);
		$res = $db->query($sql);
		//echo $sql;
		//echo $res;
		if(mysqli_num_rows($res) > 0){
			$sql = "UPDATE cart
			        SET cacoamount=cacoamount+$cacoamount, camoney=camoney+$camoney
			        WHERE cauiphone = '$uiphone' and cacoid = '$cacoid'";
			$res = mysqli_query($db, $sql);
			echo "<script> if(confirm( '是否继续添加？ 是返回商品列表  否查看购物车 '))  location.href='lists.php';else location.href='cart.php'; </script>"; 
		}else{
			$sql = "INSERT INTO cart (cauiphone, cacoid, caconame, cacobrand, cacotype, cacopic, cacoamount, cacomoney, camoney) VALUES ('".$uiphone."', '" .$cacoid."', '" .$caconame."', '" .$cacobrand."' , '" .$cacotype."', '" .$cacopic."', '" .$cacoamount."',  '" .$cacomoney."',  '" .$camoney."')";
			$res = mysqli_query($db, $sql);
			echo "<script> if(confirm( '是否继续添加？ 是返回商品列表  否查看购物车 '))  location.href='lists.php';else location.href='cart.php'; </script>"; 
		}
	}
?>
<?php
	include('../config.php');
	$tenloaisp=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		$sql="INSERT INTO loaixe(TenLoai,thutu) VALUES ('$tenloaisp','$thutu')";
		mysqli_query($con,$sql);
		header('location:../../indexadmin.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
	}else
	{
		//xoa
	}
?>
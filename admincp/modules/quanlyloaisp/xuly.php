<?php
	include('../config.php');
	$TenLoai=$_POST['TenLoai'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		$sql="INSERT INTO `loaixe`(`TenLoai`, `thutu`) VALUES (TenLoai,thutu)";
		mysql_query($sql);
		header('location:../../indexadmin.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
	}else
	{
		//xoa
	}
?>
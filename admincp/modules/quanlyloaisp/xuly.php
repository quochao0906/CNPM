<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		$sql="INSERT INTO loaixe(TenLoai,thutu) VALUES ('$tenloaisp','$thutu')";
		mysqli_query($con,$sql);
		header('location:../../indexadmin.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		$sql = "update loaixe set TenLoai='$tenloaisp', thutu='$thutu' where id='$id'";	
		mysqli_query($con,$sql);
		header('location:../../indexadmin.php?quanly=quanlyloaisp&ac=sua&id='.$id);

	}else
	{
		$sql="delete from loaixe where id='$id'";
		mysqli_query($con,$sql);
		header('location:../../indexadmin.php?quanly=quanlyloaisp&ac=them');
	}
?>
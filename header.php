<?php
	include "connect_database.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Công Ty 3H</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">  
</head>
<body>
	<!-- <div class="container"> -->
	<div class="header">
		<div class="top-menu" style="display: inline-block;">
			<ul class="share" style="padding-left: 45px">
				<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
			</ul>
			<ul class="info">
				<li><input type="text" name="search" placeholder="Tìm Kiếm"></li>
				<li><a href="login.php" style="<?php if(isset($_SESSION['logged'])){ echo'display: none';}?>">Đăng nhập</a></li>
				<li><a href="register.php" style="<?php if(isset($_SESSION['logged'])){ echo'display: none';}?>">Đăng kí</a></li>
				<li><a href="#" style="<?php if(!isset($_SESSION['logged'])){ echo'display: none';}?>">Thành viên</a>
					<div class="sub-menu">
							<a href="#">Thông Tin</a>
							<a href="#">Đăng Xuât</a>
					</div>	
				</li>
				
			</ul>
		</div>
		<div class="menu">
			<img src="img/logo1.png" alt="logo">
			<ul>
				<li><a href="index.php">Trang Chủ</a>
				</li>
				<li><a href="contact.php">Giới thiệu</a></li>
				<li><a href="#">Lamborghini</a>
					<div class="sub-menu">
							<a href="#">Aventador</a>
							<a href="#">Huracan</a>
							<a href="#">Urus</a>										
					</div>	
				</li>
				<li><a href="#">Audi</a>
					<div class="sub-menu">
							<a href="#">A3</a>
							<a href="#">A4</a>
							<a href="#">A5</a>
							<a href="#">A6</a>
							<a href="#">A7</a>
							<a href="#">A8</a>
							<a href="#">Q2</a>
							<a href="#">Q3</a>
							<a href="#">Q5</a>
							<a href="#">Q7</a>
							<a href="#">TT</a>	
						
					</div>
				</li>
				<li><a href="tintuc.php">Tin Tức</a>
					<div class="sub-menu" >
							<a href="#">Công Nghệ</a>
							<a href="#">Thế Giới Xe</a>
							<a href="#">Sống Trẻ</a>
							<a href="#">Giáo Dục</a>
							<a href="#">Thể Thao</a>
						
					</div>
				</li>
				<li><a href="#">Khuyến Mãi</a></li>
				
			</ul>
		</div>
	</div>
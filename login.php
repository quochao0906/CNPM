
<?php
	include 'header.php';
	
?>
<?php
	$name= "admin";
	$pass= "admin";
	session_start();
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	if (isset($_POST['dangnhap'])) {
		if ($name == $_POST['username'] && $pass==$_POST['password']) {
			header("location:admincp/indexadmin.php");
		}else
		{
			echo "Đăng Nhập Thất Bại";
		}
	}
		
		
	
?>

<div class="login" >
	<form action="" method="post">
 			<table >
 				<tr >
 					<th colspan="2">ĐĂNG NHẬP</th>
 				</tr>
 				<tr >
 					<td>Tài khoản:</td>
 					<td><input type="text" name="username" placeholder="Tên Đăng Nhập" ></td>
 				</tr>

 				<tr >
 					<td>Mật khẩu:</td>
 					<td><input type="password" name="password" placeholder="Mật Khẩu" ></td>
 				</tr>
 				<tr >
 					<td><a href="#">Quên mật khẩu?</a></td>
 					<td style="padding-left: 162px">
 						<input type="submit" name="dangnhap" value="Đăng Nhập" style="width: 80px">
 					</td>
				</tr>
				<tr >
					<td><a href="register.html">Bạn chưa đăng kí tài khoản?</a></td>
				</tr>
 			</table></form>
 			
 	</div>
<?php
	include "footer.php";
?>
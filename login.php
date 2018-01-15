
<?php
	include 'header.php';

?>
<?php
	$name= "admin";
	$pass= "admin";
	
	if (isset($_POST['dangnhap'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($name == $username && $pass == $password)
		{
			header("location:admincp/indexadmin.php");
		}
		else
		{ 
			//if (!$name == $_POST['username'] && !$pass==$_POST['password']) {
			 $sql = "SELECT TenTk,MatKhau FROM taikhoan WHERE TenTk= '$username' and MatKhau='$password'";
			 $query =mysqli_query($conn,$sql);
			 $num_row=mysqli_num_rows($query);
			 if ($num_row==1) 
			 {
			 		$r= mysqli_fetch_assoc($num_row);
			 		$_SESSION['logged']=$username;
			 		header('location:index.php');
			 } 
			else
			{
					echo "đăng nhập thất bại";
			}
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
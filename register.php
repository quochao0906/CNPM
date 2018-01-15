<?php
	include "header.php";
?>
<?php
	
	if(isset($_POST['dangki']))
	{
		$fullname = $_POST['fullname'];
		$adress= $_POST['adress'];
		$numberphone = $_POST['numberphone'];
		$Email = $_POST['Email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$imported = $_POST['re-password'];
		// if ($password!=$imported) {
		// 	header('location:register.php');
		// }else{
		// 	header('location:login.php');
		// }

		$sql = "INSERT INTO taikhoan(TenHienThi,TenTk,MatKhau,DC,SDT,Email,PhanQuyen) VALUES('$fullname','$username','$password','$adress','$numberphone','$Email','')";
		// $sql = "INSERT INTO khachhang (TenKH,DCKH,SDT,Email) VALUES($fullname,$adress,$numberphone,$Email)";
		 mysqli_query($conn,$sql);
		// if ($run_query) {
		// 	header('location:index.php');

		// }else{
		// 	header('location:register.php');
		// }

	}
?>

<div class="register" >
	<form action="" method="post">
 			<table> 
 			

 				<tr >
 					<th colspan="2">ĐĂNG KÍ TÀI KHOẢN</th>
 				</tr>
 				<tr >
 					<td>Họ Tên:</td>
 					<td><input type="text" name="fullname" placeholder=" Họ Tên Của Bạn" ></td>
 				</tr>
 				<tr >
 					<td>Địa Chỉ:</td>
 					<td><input type="text" name="adress" placeholder="Nhập Địa Chỉ" ></td>
 				</tr>
 				<tr >
 					<td>Số Điện Thoại:</td>
 					<td><input type="text" name="numberphone" placeholder="Nhập Số Điện Thoại" ></td>
 				</tr>
 				<tr>
 					<td>Email:</td>
 					<td><input type="text" name="Email" placeholder="Nhập Email" ></td>
 				</tr>
 				<tr >
 					<td>Tên Tài Khoản:</td>
 					<td><input type="text" name="username" placeholder="Tên Đăng Nhập" ></td>
 				</tr>

 				<tr >
 					<td>Mật khẩu:</td>
 					<td><input type="password" name="password" placeholder="Mật Khẩu" ></td>
 				</tr>
 				<tr >
 					<td>Nhập Lại Mật Khẩu:</td>
 					<td><input type="password" name="re-password" placeholder="Nhập Lại Mật Khẩu" ></td>
 				</tr>
 				<tr >
 					<!-- <td><a href="index.html"><button type="button" style="margin-left: 90px"> Trở Về</button></a></td> -->
 					<!-- <td><button type="button"  >Đăng Kí </button></td> -->
 					<td style="padding-left: 312px" >
 						<input type="submit" name="dangki" value="Đăng Kí" style="width: 70px">
 					</td>
				</tr>
 			</table></form>
 			
 			
 </div>
 
<?php
	include "footer.php";
?>
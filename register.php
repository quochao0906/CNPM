<?php
	include "header.php";
	include 'connect_database.php';
	
	if(isset($_PORT['dangki'])){
		$fullname = $_PORT[fullname];
		$adress = $_PORT[adress];
		$email = $_PORT[Email];
		$numberphone = $_PORT[numberphone];
		$username = $_PORT[username];
		$password = $_PORT[password];
		$imported = $_PORT[re-password];
		//kiểm tra 2 mật khẩu có giống nhau không
		// if(password!=re-password){
		// 	header("localhost:register.php");	
		// 	setcookie("error","Đăng Kí Không Thành Công", time()+1,"","/",0);
		// }
		// else{
		// 	mysqli_query($conn,"insert ino")
		// 	header("localhost:register.php");
		// 	setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);

		// }
		$sql_dangki="insert into 'taikhoan' (TenHienThi,TenTk,MatKhau) values('$fullname','$uysername','$password')";
		$run_query = mysql_query($sql_dangki);
		if($run_query){
			header('location:index.php');
		}
		else{
			header('location:register.php');
		}

	}
?>
<div class="register" >
	<form action="" method="post">
 			<table >
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
 					<td><button type="button"  >Đăng Kí </button></td>
				</tr>
 			</table></form>
 			
 	</div>
<?php
	include "footer.php";
?>
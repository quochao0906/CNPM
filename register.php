<?php
	include "header.php";
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
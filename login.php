<?php
	
	include "header.php";
	
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
 					<td><button type="button" ><a href="index.html" style="text-decoration: none;color: black">Đăng Nhập</a> </button></td>
				</tr>
				<tr >
					<td><a href="register.html">Bạn chưa đăng kí tài khoản?</a></td>
				</tr>
 			</table></form>
 			
 	</div>
<?php
	include "footer.php";
?>
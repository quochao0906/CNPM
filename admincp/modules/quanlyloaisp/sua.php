<?php
	$sql="select * from loaixe where id=$_GET[id]";
	$run=mysqli_query($con,$sql);
	$dong=mysqli_fetch_array($run);
?>

<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Sửa loại SP</div></td>
		
	</tr>
	<tr>
		<td>Tên loại SP</td>
		<td><input type="text" name="tenloaisp" value="<?php echo $dong['TenLoai']?>"></td>
	</tr>
	<tr>
		<td>Thứ tự</td>
		<td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
	</tr>
</table>
</form>
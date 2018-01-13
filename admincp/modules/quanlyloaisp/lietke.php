<?php
	
	$sql="select * from loaixe order by id desc";
	$run=mysqli_query($con,$sql);
?>
<table width="100%" border="1">
	<tr>
		<td>ID</td>
		<td>Tên SP</td>
		<td>Thứ tự</td>
		<td colspan="2">Quản lý</td>
		
	</tr>
	<?php
	$i=0;	
	while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['TenLoai'] ?></td>
		<td><?php echo $dong['thutu'] ?></td>
		<td><a href="indexadmin.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id']?>">Sửa</a></td>
		<td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
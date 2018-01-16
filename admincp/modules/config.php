
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cnpm";
		
		$con = mysqli_connect($servername,$username,$password,$dbname);
		
		if(!$con){
			die('Ket Noi that bai:'.mysqli_connct_error());
		}
	
	 ?>
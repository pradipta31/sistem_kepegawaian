<?php
@ob_start();
@session_start();
$host='localhost';
$username='root';
$password='';
$database='sie_kepegawaian';
	$connect=mysqli_connect($host,$username,$password);
		
		if ($connect) {
			$panggildb=mysqli_select_db($connect,$database);
				if (!$panggildb) {
					die('database mati');
				}
		} else{
			die('server mati');
		}
?>
<?php 
	$connect= mysqli_connect('localhost','root','','test');

	if(!$connect){
		echo "kết nối không thành công";
	}
	else{
		mysqli_set_charset($connect,'utf8');
		
	}
?>
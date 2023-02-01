<?php 
	$conn = mysqli_connect("localhost","lh","aabbccdd","my_list");
	if(!$conn){
		echo "Connection Failed : ".mysqli_connect_error();
	}
 ?>
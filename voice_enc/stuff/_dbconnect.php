	
	<?php 
	$server="localhost";
	$user="root";
	$password="";
	$db="encrypt";
	$conn=mysqli_connect($server,$user,$password,$db);
	if($conn){
	//  echo "Connection successfull !!!"   ;.
	}
	else{
	    echo "error".mysqli_connect_error();
	}
	?>

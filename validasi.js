<?php  
	$user=$_POST['username'];
	$pass=$_POST['password'];

	if($user == "firda" && $pass == "123"){
		echo "Login Berhasil";
	}
	else{
		echo "Login Gagal";
	}

?>
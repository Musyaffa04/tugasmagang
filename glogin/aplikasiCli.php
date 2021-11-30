<?php 
	require_once "model.php";
	$model = new model();
	$ceklogin = $model->ceklogin();
	if(mysqli_num_rows($ceklogin) !=  0 ){
		echo "Yang Login : ";	
		// var_dump($ceklogin);
		foreach ($ceklogin as $item) {
			// echo "<br>";
			echo $item['nama_lengkap'];
			echo ", ";
		};
	}else{
		echo "Gak ada yang  login";
	}
?>
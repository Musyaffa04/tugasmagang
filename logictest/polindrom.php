<?php 	
	function polindrom($teks)
	{
		$teks = strtolower($teks);
		$hasil = strrev($teks);
		echo "Teks : ".$teks."</br>";
		echo "Hasil balik = ".$hasil;
		if($teks == $hasil){
			echo "<h5> polindrome </h5>";
		} else{
			echo "<h5> not polindrome </h5>";
		}
	}
	//cek
	polindrom("Ibu Ratna antar ubi")
?>
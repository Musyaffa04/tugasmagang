<?php 	
	function leapyear($awal, $akhir)
	{
		$leapyear = false;
		echo "Output : ";
		for ($i= $awal+1; $i <= $akhir ; $i++) { 
			if($i % 4 == 0){
				echo $i.", ";
				$leapyear = true;
			}
		}

		if (!$leapyear) {
			echo "Tidak ada leapyear";
		}
	}
	//cek
	leapyear(1900, 2020);
 ?>
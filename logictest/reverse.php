
<?php 
	function reverse($teks)
	{
		$teks_pecah = explode(" ",$teks);
		$teks_baru = "";

		foreach ($teks_pecah as $value) {
			$huruf = str_split($value);
			$value = strrev($value);
			if(ctype_upper($huruf[0])){
				$value = strtolower($value);
				$value = ucwords($value);
			}

			$teks_baru=$teks_baru." ".$value;
		}
		echo "Output : ".$teks_baru;
	}
	reverse("I am A Great human");
?>
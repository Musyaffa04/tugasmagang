<?php 	
	function fibonaci($angka)
	{
		$fibonaci = 0;
		$sebelum = 0;
		$sekarang = 1;
		for ($i=0; $i <= $angka ; $i++) { 
			$fibonaci = $sebelum + $sekarang;
			$sebelum = $sekarang;
			$sekarang = $fibonaci;		
		}
		return $fibonaci;
	};

	function nearfibo($arr){
		$jumlah = 0;
		foreach ($arr as $item) {
			$jumlah += $item;
		}
		for ($i=0; fibonaci($i) < $jumlah ; $i++) { 
			$indeks = $i;
		}

		//menghitung selisih perjumlahan array dengan angka fibonaci yang lebih besar dan lebih kecil
		//fibonaci yang lebih besar menggunakan parameter $indeks+1 karena berdasarkan perkondisian perulangan for diatas, indeks angka fibonaci yg lebih besar tidak tersimpan
		$a = abs(fibonaci($indeks) - $jumlah);
		$b = abs(fibonaci($indeks+1) - $jumlah);

		if($a < $b){
			return $a;
		}else{
			return $b;
		}
	}

	$array = [15,1,3];
	echo nearfibo($array);
?>
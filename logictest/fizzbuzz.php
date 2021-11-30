<?php 	
	function fizzbuzz($angka){
		for ($i=0; $i <$angka ; $i++) {

			$x = $i+1;
			if ($x % 15 == 0) {
				$arr[$i] = "FizzBuzz";
			} elseif ($x % 3 == 0) {
				$arr[$i] = "Fizz";
			} elseif ($x % 5 == 0) {
				$arr[$i] = "Buzz";
			} else {
				$arr[$i] = strval($x);
			}
		}
		return var_dump($arr);
	}
	// cek
	fizzbuzz(15);
?>
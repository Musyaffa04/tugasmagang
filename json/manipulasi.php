<?php 
	//ambil data json
	$data = file_get_contents('data.json');
	//menconvert json menjadi array
	$items = json_decode($data);

	// 1. Mencari item yang placementnya di Meeting Room
	$meetingRoom = [];
	foreach ($items as $item) {
		if ($item->placement->name == 'Meeting Room') {
			//Mencetak nama item yang sesuai
			// echo $item->name."</br>";

			//Menyimpan informasi item yang sesuai dalam variabel
			array_push($meetingRoom, $item);
		}
	}
	// var_dump($meetingRoom);


	// 2. Mencari item yang tipenya Electronic
	$electronic = [];
	foreach ($items as $item) {
		if ($item->type == 'electronic') {
			//Mencetak nama item yang sesuai
			// echo $item->name."</br>";

			//Menyimpan informasi item yang sesuai dalam variabel
			array_push($electronic, $item);
		}
	}
	// var_dump($electronic);


	// 3. Mencari item yang tipenya Furnitur
	$furniture = [];
	foreach ($items as $item) {
		if ($item->type == 'furniture') {
			//Mencetak nama item yang sesuai
			// echo $item->name."</br>";

			//Menyimpan informasi item yang sesuai dalam variabel
			array_push($furniture, $item);
		}
	}
	// var_dump($furniture);


	// 4. Membeli item yang dibeli tanggal 16 Januari
	$purch16jun = [];
	foreach ($items as $item) {
		//data dalam bentuk epoch jadi perlu di convert jadi date
		if (date("d F Y", substr($item->purchased_at, 0, 10)) == '16 January 2020') {
			//Mencetak nama item yang sesuai
			// echo $item->name."</br>";

			//Menyimpan informasi item yang sesuai dalam variabel
			array_push($purch16jun, $item);
		}
	}
	// var_dump($purch16jun);


	// 5. Mencari item yang memiliki warna coklat
	$brown = [];
	foreach ($items as $item) {
		//Mengecek item yang memiliki tag brown
		if (in_array('brown', $item->tags)) {
			//Mencetak nama item yang sesuai
			// echo $item->name."</br>";

			//Menyimpan informasi item yang sesuai dalam variabel
			array_push($brown, $item);
		}
	}
	// var_dump($brown);

?>
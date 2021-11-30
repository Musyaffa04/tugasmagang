<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		session_start();
		require_once 'model.php';
		$google_info = $_SESSION['google_info'];
		// var_dump($google_info);
		// die();
		$data = [];
		$data['email'] = $_SESSION['email'];
		$data['name'] = $_SESSION['name'];
		$data['nama_depan'] = $_SESSION['nama_depan'];

		if ($_POST) {
			$data['username'] = $_POST['username'];
			$model = new model();
			$model->input($data);
			header('Location: dashboard.php');
		}
	?>
	<h2>Buat Akun Baru</h2>
	<form action="" method="post">
		<label>
			<b>
			Nama
			</b>
			<?php echo $data['name'] ?>
		</label>
		<br>
		<label>
			<b>
			Email
			</b>
			<?php echo $data['email'] ?>
		</label>
		<br>
		<label for="username" >
			<b>
			Username
			</b>
		</label>
		<input type="text" name="username">
		<br>
		<button type="submit">
			Submit
		</button>
		
	</form>
</body>
</html>
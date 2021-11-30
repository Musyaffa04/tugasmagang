<?php 
session_start();
require_once 'model.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		$email = $_SESSION['email'];
		$model = new model();
		$model->login($email);
	?>
	<h2>Selamat Datang <?php echo $_SESSION['name'] ?></h2>
	<br>
	<br>
	<br>
	<a href="logout.php">logout</a>
</body>
</html>
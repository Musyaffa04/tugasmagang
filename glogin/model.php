<?php 
	/**
	 * 
	 */
	class model
	{
		protected $koneksi1;

		function __construct()
		{
			$this->koneksi1 = mysqli_connect('localhost', 'root', '', 'test');
		}

		function input($fields){			
			$this->koneksi1;
			$this->email=$fields['email'];
            $this->nama_lengkap=$fields['name'];
            $this->nama_depan=$fields['nama_depan'];
            $this->username = $fields['username'];
			$queryinput="INSERT INTO users
							VALUES('',
									'$this->email',
									'$this->nama_lengkap', 
									'$this->nama_depan', 
									'$this->username',
									''
								)";
			$result = mysqli_query($this->koneksi1, $queryinput);
			echo mysqli_error($this->koneksi1);
			if ($result==1) {
				echo "Data berhasil diinput";
			} else {
				echo "Data gagal diinput";
			}
			
			echo "</br>";
		}

		function cetakData(){
			$this->koneksi1;
			$queryoutput="SELECT * FROM users";
			return $result = mysqli_query($this->koneksi1, $queryoutput);
		}

		function cek($email){
			$querycek = "SELECT * FROM users WHERE email = '$email'";
			return $result = mysqli_query($this->koneksi1, $querycek);
		}
		function login($email){
			$update = "UPDATE `users` SET `login` = '1' WHERE `users`.`email` = '$email';";
			$result = mysqli_query($this->koneksi1, $update);
		}
		function logout($email){
			$update = "UPDATE `users` SET `login` = '0' WHERE `users`.`email` = '$email';";
			$result = mysqli_query($this->koneksi1, $update);
		}
		function cekLogin(){
			$cek = "SELECT * FROM users WHERE login = '1'";
			return $result = mysqli_query($this->koneksi1, $cek);
		}
}
	
?>
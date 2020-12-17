<?php
require 'function_regis.php';

if( isset($_POST["register"])){
	if(Registrasi($_POST) > 0){
		echo "<script>
			alert('user baru berhasil ditambahkan!');
		</script>";
	} else {
		echo mysqli_error($con);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

	<h1>Halaman Registrasi</h1>

	<form action="" method="post" >

		<ul>
			
			<li>
				<label for="username"> username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi password :</label>
				<input type="password" name="password2" id="password2">
			</li>

			<li>
				<button type="submit" name="register">Register</button>
			</li>
		</ul>
		
	</form>

</body>
</html>

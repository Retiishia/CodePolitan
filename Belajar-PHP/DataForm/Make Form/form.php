<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Making a Form</title>
	<style>
		input:hover {
			background-color: cyan;
			cursor: pointer;
		}

		input:nth-last-child(2) {
			background-color: red;
			color: white;
		}

		input:nth-child(1) {
			background-color: green;
		}

		input:nth-of-type(8) {
			background-color: blue;
			color: white;
		}
	</style>
</head>

<body>
	<form action="" method="post">
		Nama: <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Mu"><br><br>
		Alamat: <input type="text" name="alamat" rows="8" col="200" placeholder="Masukkan Alamat Mu"><br><br>
		Email: <input type="email" name="email" id="email" placeholder="Masukkan Email Mu"><br><br>
		Password: <input type="password" name="password" id="password" placeholder="Masukkan Password Mu"><br><br>
		Tanggal: <input type="date" name="date" id="date"><br><br>
		Pilih File: <input type="file" name="file" id="file"><br><br>
		<input type="reset" value="Reset">
		<input type="submit" value="Submit" color="white">
	</form>
</body>

</html>
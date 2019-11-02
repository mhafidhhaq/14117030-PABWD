<!DOCTYPE html>
<html>
<head>
	<title>Simpan Buku Tamu</title>
</head>
<body>
	<h1>Simpan Buku Tamu MySQL</h1>
	<?php
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$komentar = $_POST["komentar"];

		$conn = mysqli_connect("localhost", "root", "") or die ("koneksi gagal");
		mysqli_select_db($conn, "tamu");

		echo "Nama     : $nama <br>";
		echo "Email    : $email <br>";
		echo "Komentar : $komentar <br>";

		$sqlstr = "INSERT INTO bukutamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
		$hasil = mysqli_query($conn, $sqlstr);
		echo "Simpan buku tamu berhasil dilakukan";
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Biodata</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
</head>
<body>
	<h1 align="center">Form Biodata</h1>

	<form action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control" required>
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" class="form-control">
		</div>

		<label for="jk">Jenis Kelamin</label>
		<div class="radio">
			<label><input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki</label>
			<label> <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
		</div>

		<div class="form-group">
			<label for="goldar">Golongan Darah</label>
			<select name="goldar" class="form-control">
				<option value="">Pilih golongan darah Anda</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="AB">AB</option>
				<option value="O">O</option>
			</select>
		</div>

		<label for="hobi">Hobi</label>
		<div class="checkbox">
			<label><input type="checkbox" name="hobi[]" value="Olahraga">Olahraga</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" name="hobi[]" value="Musik">Musik</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" name="hobi[]" value="Membaca">Membaca</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" name="hobi[]" value="Programming">Programming</label>
		</div>

		<div class="form-group">
			<label for="alamat">Keterangan</label>
			<textarea name="ket" rows="4px" cols="6px" class="form-control"></textarea>
		</div>

		<button type="submit" name="kirim" class=" btn btn-primary">Kirim</button>
	</form>
	<!-- jQuery -->
	<script type="text/javascript" src="jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();
include("functions.php");
if (isset($_SESSION["user_id"])) {
	if (isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=1");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman User dan Admin</title>
</head>
<body>
	<?php
	$datauser = array(
				"0"=>array("user"=>"User 1"),
				"1"=>array("user"=>"User 2")
	);
	?>

	<?php
	if (isset($_SESSION["user_name"])) {
	?>
		<?php
		if ($_SESSION["user_name"] == "admin") {
		?>
			<h1 align="center">Admin Dashboard</h1>
			Selamat datang <?php echo $_SESSION["user_name"]; ?>.	
			<table border=2>	
				<thead>
					<tr>
						<th>Artikel</th>
						<th colspan="3">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($datauser as $value): ?>
						<tr>
							<td><?php echo $value["user"];?></td>
							<?php if($value["user"] == "User 1") {?>	
								<td>
									<a href="buatartikel1.php">Create</a>
									<a href="ubahartikel1.php">Edit</a>
									<a href="hapusartikel1.php">Delete</a>
								</td>
							<?php } ?>

							<?php if($value["user"] == "User 2") {?>	
								<td>
									<a href="buatartikel2.php">Create</a>
									<a href="ubahartikel2.php">Edit</a>
									<a href="hapusartikel2.php">Delete</a>
								</td>
							<?php } ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php } ?>

		<?php if($_SESSION["user_name"] == "user1") { ?>
			<h1 align="center">User Dashboard</h1>
			Selamat datang <?php echo $_SESSION["user_name"]; ?>.
			<table border="2">
				<thead>
					<tr>
						<th>Artikel</th>
						<th colspan="3">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<td>User 1</td>
					<td>
						<a href="buatartikel.php">Create</a>
						<a href="ubahartikel.php">Edit</a>
						<a href="hapusartikel.php">Delete</a>
					</td>
				</tbody>
			</table>
		<?php } ?>

		<?php if($_SESSION["user_name"] == "user2") { ?>
			<h1 align="center">User Dashboard</h1>
			Selamat datang <?php echo $_SESSION["user_name"]; ?>.
			<table border="2">
				<thead>
					<tr>
						<th>Artikel</th>
						<th colspan="3">Aksi</th>
					</tr>
				</thead>

				<tbody>
					<td>User 2</td>
					<td>
						<a href="buatartikel.php">Create</a>
						<a href="ubahartikel.php">Edit</a>
						<a href="hapusartikel.php">Delete</a>
					</td>
				</tbody>
			</table>
		<?php } ?>
	<?php } ?>
	Klik disini untuk <a href="logout.php" title="Logout">Logout.</a>
</body>
</html>
<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<form method="POST">
		<?php if ($message != "") { ?>
			<div class="message">
				<?php echo $message; ?>
			</div>
		<?php } ?>
		<table>
			<tr>
				<td align="center" colspan="2">Login</td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td>
					<input type="text" name="user_name">
				</td>
			</tr>
			<tr>
				<td align="right">Password</td>
				<td>
				<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Cookies</title>
</head>
<body>
	<?php
	if (count($_COOKIE) > 0) {
		echo "Cookies enabled.";
	}else {
		echo "Cookies disabled.";
	}
	?>
	<!-- Ketika membuka file tes_cookies.php dengan browser incognito yang dihasilkan adalah "Cookies disabled." karena pada browser incognito tidak menyimpan informasi ketika membuka file tersebut seperti cache, cookies, password, dan histori -->
</body>
</html>
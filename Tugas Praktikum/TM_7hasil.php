<?php
	function pencetakan_data($data){
		if($data){
			echo "<h2>"."Isi Biodata"."</h2>";

			echo "Nama : ".$_POST['nama']."<br/>";
			echo "Alamat : ".$_POST['alamat']."<br/>";
			echo "Jenis Kelamin : ".$_POST['jenis_kelamin']."<br/>";
			echo "Golongan Darah : ".$_POST['goldar']."<br/>";
			echo "Hobi :"."<br/>";
			foreach($_POST['hobi'] as $value) {
				echo "<li type='1'>";
				echo $value."<br/>";
				echo "</li>";
			}
			echo "Keterangan : ".$_POST['ket'];
		}
	}


	$biodata = isset($_POST['kirim']);
	pencetakan_data($biodata);
?>
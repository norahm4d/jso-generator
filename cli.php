<?php 
error_reporting(0);
if (isset($argv['1'])) {
	$up = $argv['1'];
	$isi = file_get_contents($up);
	if ($isi) {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://api-nor.000webhostapp.com/api-jso.php');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "submit=Create&output=97, 110, 106, 105, 114");

		$headers = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		// var_dump($result);
		echo "Loading";
		for ($i=0; $i < 4; $i++) { 
			echo ".";
			sleep(1);
		}
		echo "\n";
		echo $result;
	}else{
		echo "[x] File Tidak Ditemukan!";
	}
}else{
	echo 'Format : php cli.php "namafile.php"';
	echo "\n* File berisi script yang telah di ubah ke dalam char";
}
?>

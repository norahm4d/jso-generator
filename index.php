<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSO Generator</title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
	<script type="text/javascript">
		function copy_text() {
			document.getElementById("pilih").select();
			document.execCommand("copy");
			alert("Text Berhasil Di Copy");
		}
	</script>
	<style>
	body {
		background-color:#2C3A49;
		color:white;
		font-family: 'Fredoka One', cursive;
	}
	.head {
		font-family: 'Fredoka One', cursive;
		text-shadow: 4px 1px red;
	}
	.textarea {
		width: 200px;
		height: 100px;
		border-radius: 10px;
		border-style: unset;
	}
	.btn {
		border-radius: 3px;
		background-color: white;
		border-style: unset;
		font-family: 'Fredoka One', cursive;
	}
	.foot {
		font-family: 'Caveat', cursive;
		text-shadow: 4px 1px red;
	}
	.ress {
		font-size: 20px;
    	color: aqua;
		font-family: 'Fredoka One', cursive;
	}
	</style>
    <script>
		function runCharCodeAt() {
			input = document.charCodeAt.input.value;
			output = "";
			for(i=0; i<input.length; ++i) {
				if (output != "") output += ", ";
				output += input.charCodeAt(i);
			}
			document.charCodeAt.output.value = output;
		}
	</script>
</head>
<body>
<center>
<h1 class="head">Tools Jso Generator</h1>
<form name="charCodeAt" method="post">
		<textarea name="input" class="textarea" placeholder="Masukan Script Yang Mau Di Pake"></textarea><br><br>
		<input type="button" onclick="runCharCodeAt()" value="Convert" class="btn"><br><br>
		<textarea name="output" class="textarea"></textarea><br><br>
		<input type="submit" name="submit" value="Create" class="btn"><br><br>
</form>
<?php 

if (isset($_POST['submit'])) {
	if (empty($_POST['output'])) {
		echo "<script>alert('Convert Script Dulu!');</script>";
	}else{

	$isi = $_POST['output'];
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
	$ress = $result;
	echo "<h1 class='ress'>Result:</h1>";
	echo "<input type='text' value='$ress' id='pilih' readonly />";
	echo "<button type='button' onclick='copy_text()'>Copy</button>";
}}
echo "<h2 class='foot'>@2k19 Coded By Nor Ahmad</h2>";

?>

</body>
</html>

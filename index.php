<!DOCTYPE html>

<html class="i-ua_js_yes i-ua_css_standard i-ua_svg_yes i-ua_inlinesvg_yes utilityfocus" lang="ru">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src=""></script>
<title>Работа с GreenAPI</title>
</head>

<body>
<form method="GET">

<?php
        include('sendPictureByLink.php');
        include('sendPictureByUpload.php');
        include('getSettings.php');
        include('getStateInstance.php');
        include('sendTextMessage.php');
?>

<table border="0" cellpadding="1" cellspacing="1" style="width:900px">
	<tbody>
		<tr>
			<td rowspan="2">

        <p><input type="text" name="ApiTokenInstance" id="ApiTokenInstance" value="2d4de6194ce34a388b9e50afd055e47c78e72650ac7f403eb8"></p>
        <p><input type="text" name="idInstance" id="idInstance" value="1105588668"></p>
	<p><button onclick="addinstaI()">getSettings</button></p>
	<p><button onclick="addinstaS()">getStateInstance</button></p>

	<p><input type="text" name="Phone" id="Phone" value="79066906691@c.us"></p>

	<p><input type="text" name="sendMessage_text" id="sendMessage_text" value="Hello word!" /></p>
	<p><button onclick="addinstaM()">sendMessage</button></p>
	
	<p><input type="text" name="Phone1" id="Phone1" value="79066906691@c.us"></p>
	<p><input type="text" name="sendFileByUrl_path" id="sendFileByUrl_path" value="https://www.google.ru/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"></p>

	<p><button onclick="addinsta()">sendFileByUpload</button></p>
	<p><button onclick="addinstaL()">sendFileByLink</button></p>
			</td>
			<td rowspan="2" style="vertical-align:top">

			<p>Ответ:</p>
                        <p><textarea name="txtpost" rows="25" cols="63" id="txtpost"> "<?php echo $txtpost; ?>" </textarea></p>

			</td>
		</tr>
	</tbody>
</table>


<script>
var insta = <?= json_encode($json, JSON_UNESCAPED_UNICODE); ?>;
function addinsta() {
  document.getElementById("txtpost").innerHTML = insta;
  var instaX = insta;
}
</script>

<script>
var instaL = <?php echo json_encode($json1); ?>;
function addinstaL() {
  document.getElementById("txtpost").innerHTML = instaL;
}
</script>

<script>
var instaI = <?php echo json_encode($json2); ?>;
function addinstaI() {
  document.getElementById("txtpost").innerHTML = instaI;
}
</script>

<script>
var instaS = <?php echo json_encode($json3); ?>;
function addinstaS() {
  document.getElementById("txtpost").innerHTML = instaS;
}
</script>

<script>
var instaM = <?php echo json_encode($json4); ?>;
function addinstaM() {
  document.getElementById("txtpost").innerHTML = instaM;
}
</script>


</form>
</body>
</html>

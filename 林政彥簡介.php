<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>林政彥簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1text").innerText = "靜宜資管";
  			document.getElementById("h2text").innerText = "資管導論";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1text").innerText = "林政彥";
  			document.getElementById("h2text").innerText = "LIN,ZHENG-YAN";
		}
	</script>


</head>
<body>
	<?php echo date("Y-m-d")?>
	<table>
		<tr>
			<td>
				<img src="cliff.jpg" width="100%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>	
			</td>	
			<td>
				<h1 id="h1text">林政彥</h1>
				<h2 id="h2text">LIN,ZHENG-YAN</h2>
			</td>	
		</tr>
	</table>
	
<table width="70%" border="1">
	<tr>
		<td>
			靜宜資管系:<a href="https://csim.pu.edu.tw/">https://csim.pu.edu.tw/</a><br>
			FB：<a href="https://www.facebook.com/profile.php?id=100062816258972&locale=zh_TW"target="_blank">https://www.facebook.com/profile.php?id=100062816258972&locale=zh_TW</a><br>
			Tel:<a href="tel:0965609119">0965609119</a><br>
			E-Mail: <a href="mailto:garry240993@gmail.com">garry240993@gmail.com</a><br>
		</td>
		
		<td>大象席地而坐電影配樂<br>
			<audio controls>
			<source src="elephant.mp3" type="audio/mP3">
			</audio><br>
		</td>
	
		<td>
			不要去台灣<br>
			<iframe src="https://www.youtube.com/embed/pW88QFpHXa8"allowfullscreen></iframe>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td>
			web demo<br>
			<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/095d9a8b-87f0-48b6-9d86-97f40bb73458">
</iframe>
		</td>
	</tr>
</table>
</body>
</html>
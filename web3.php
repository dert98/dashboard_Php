<!DOCTYPE html>
<html>
<head>
	<title>web1</title>
</head>
<body>
	<div class="text-center">
		<?php
			$localIP = getHostByName(getHostName());
			echo "IP: ". $localIP;
			echo "<br>";
			echo "MAC: ".exec('getmac');
		?>
	</div>
</body>
</html>
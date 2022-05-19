<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dasboard Red</title>
    <link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://dert98.github.io/Porfolio/global.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="web.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
	<div class="container">
		<div>
			<p class="h1 text-danger text-center">Dasboard</p>
		</div>
		<div class="row col-md-12" style="height: 490px">
			<div class="col-md-2 bg-dark text-light">
				<label class="m-2">Sección</label>
				<?php
					$webs = array("General", "LANDiscover", "Ipconfig","casa","5");
					foreach ($webs as $web) {
						echo '<li> <a href="index.php?web='.$web.'">'.$web.'</a></li>';
					}
				?>
			</div>
			<div class="col-md-10 bg-info">
				<div class="">
					<?php
						if (!isset($_GET['web'])){
							$_GET['web'] = "Intro";
						}
						echo '<p class="text-center h3"><label>';
						echo $_GET['web'];
						echo '</label></p>';
						require($_GET['web'].".php");
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 text-center bg-info mt-2" id="section">
		<p>Created by: Dert Driver</p>Contact me !
		<a href='https://www.facebook.com/dert.driver' target='_blank'><i class='fa fa-facebook'></i></a>
		<a href='https://www.instagram.com/dert98/?hl=es-la' target='_blank'><i class='fa fa-instagram'></i></a>
		<a href='https://github.com/dert98' target='_blank'><i class='fa fa-github-square'></i></a>
		<a href='mailto:dertdriver@gmail.com' target='_blank'><i class='fa fa-envelope-square'></i></a>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$arr = [
		'/img/img1.jpg',
		'/img/img2.jpg',
		'/img/img3.jpg',
		'/img/img4.jpg',
		'/img/img5.jpg',
	];

	function getGallery($arr){
		for($i = 0; $i < count($arr); $i++){
			echo "<a href=\"{$arr[$i]}\" target=\"blank\"><img width=\"300\" src=\"{$arr[$i]}\"></a>";
		}
	}

	getGallery($arr);

	?>
</body>
</html>
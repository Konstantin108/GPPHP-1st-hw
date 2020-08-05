<?php
	$a = 5;
	$b = '05';
	$h1 = 'Заголовок из переменной';
	$title = 'Title из переменной';
	$text = 'Домашняя работа к первому уроку';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
</head>
<body>
    <?php
    	echo <<<php
    	<h1>{$h1}</h1>
    	<h1 style="color: red">{$text}</h1>
    	<p style="font-size: 22px">Разбор примеров из задания #3<br>объяснения закомментированы</p>
php;

		var_dump($a == $b); //true, потому что php интерпретирует число из строки как числовой тип и отбрасыает 0 перед целым числом
		var_dump((int)'012345'); //с точки зрения целых чисел число с 0 в начале и без него, это - одно и то же число
		var_dump((float)123.0 === (int)123.0); //false, так как разные типы данных
		var_dump((int)0 === (int)'hello, world'); //true, так как в строке 'hello, world' не нашлось числа, поэтому автоматически 0
	?>
	<p style="font-size: 22px">Разбор последнего задания</p>
	<?php

		$c = 1;
		$d = 2;

		$c+=+$d-$d=$c;

		var_dump($c);
		var_dump($d);

	?>
</body>
</html>
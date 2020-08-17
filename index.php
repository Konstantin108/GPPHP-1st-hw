<?php
	$title = 'Lesson 3 - HW';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
</head>
<body>
<p style="color: blue">Первое задание</p>
<!--------------------------------Первое задание-------------------------------->
<?php

	while($i <= 100){
		$i++;
		if($i % 3 == 0){
			echo $i . ' ';
		}
	}

?>
<p style="color: blue">Второе задание</p>
<!--------------------------------Второе задание-------------------------------->
<?php

	function test($j)
	{
		do{
		if($j == 0){
			echo $j . ' - ноль<br>';
		}else if($j % 2 == 0){
			echo $j . ' - чётное число<br>';
		}else{
			echo $j . ' - нечётное число<br>';
		}
		$j++;
		}while ($j <= 10);
	}

	test(0);

?>
<p style="color: blue">Третье задание</p>
<!--------------------------------Третье задание-------------------------------->
<?php

	$arr = [
		'Московская область' => [
			'Москва',
			'Зеленоград',
			'Клин'
		],
		'Ленинградская область' => [
			'Санкт-Петербург',
			'Всеволожск',
			'Павловск',
			'Кронштадт'
		],
		'Рязанская область' => [
			'Рязань',
			'Касимов',
			'Михайлов',
			'Сасово'
		],
		'Тамбовская область' => [
			'Тамбов',
			'Уварово',
			'Котовск',
			'Кирсанов'
		],
		'Курская область' => [
			'Курск',
			'Курчатов',
			'Железногорск',
			'Льгов'
		]
	];

	foreach ($arr as $field => $value) {
			echo $field . ':<br>';
			foreach ($value as $city) {
				if($city == end($value)){
					echo $city . '.';
				}else{
					echo $city . ', ';
				}
		}
		echo '<br>';
	}

?>
<p style="color: blue">Четвёртое задание</p>
<!--------------------------------Четвёртое задание-------------------------------->
<form method="post">
 <p>Введите фразу на русском языке: <input type="phrase" name="phrase" /></p>
 <p><input type="submit" value="Преобразовать текст" /></p>
</form>
<?php

	$lettersArr = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'yo',
		'ж' => 'zh',
		'з' => 'z',
		'и' => 'i',
		'й' => 'i\'',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'kh',
		'ц' => 'ts',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'sch',
		'ъ' => '\'',
		'ы' => 'i',
		'ь' => '\'',
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',
		' ' => ' ',
		',' => ',',
		'.' => '.',
		'!' => '!',
		'?' => '?'
	];

	$ruPhrase = $_POST['phrase'];
	$enPhrase = preg_split('//u', $ruPhrase, null, PREG_SPLIT_NO_EMPTY);

	function translit($keyArray, $lettersArray)
	{
		$keysInLettersArray = array_keys($lettersArray);
		for ($k = 0; $k < count($keyArray); $k++){
			for($l = 0; $l < count($keysInLettersArray); $l++){
				if($keyArray[$k] == $keysInLettersArray[$l]){
					$numLetter = $keysInLettersArray[$l];
					echo $lettersArray[$numLetter];
				}
			}
		}
	}

	translit($enPhrase, $lettersArr);

?>
<p style="color: blue">Пятое задание</p>
<!--------------------------------Пятое задание-------------------------------->
<form method="post">
 <p>Введите любую фразу: <input type="phraseWithSpace" name="phraseWithSpace" /></p>
 <p><input type="submit" value="get snake case" /></p>
</form>
<?php

	$phraseWithSpace = $_POST['phraseWithSpace'];
	$phraseWithSpace = str_ireplace(" ", "_", $phraseWithSpace);
	echo $phraseWithSpace;

?>
<p style="color: blue">Шестое задание</p>
<!--------------------------------Шестое задание-------------------------------->
<p style="color: green">Шестое задание находится по адресу gbphp/menu-site.php</p>
<p style="color: blue">Седьмое задание</p>
<!--------------------------------Седьмое задание-------------------------------->
<?php

	for($i = 0; $i <= 9; print($i++)){};

?>
<p style="color: blue">Восьмое задание</p>
<!--------------------------------Восьмое задание-------------------------------->
<p style="color: red">При попытке вывести первый символ строки или любой другой её символ,<br>выводится ромбик со знаком вопроса, поэтому воспользовался функцией preg_split</p>
<?php

	foreach ($arr as $field => $value) {
		$modifyfield = preg_split('//u', $field, null, PREG_SPLIT_NO_EMPTY);
		if($modifyfield[0] === "К"){
				echo $field . '<br>';
			}
			foreach ($value as $city){
				{
					$modifyCity = preg_split('//u', $city, null, PREG_SPLIT_NO_EMPTY);
					if($modifyCity[0] === "К"){
						echo $city . '<br>';
					}
				}
		}
	}

?>
<p style="color: blue">Девятое задание</p>
<!--------------------------------Девятое задание-------------------------------->
<form method="post">
 <p>Введите фразу на русском языке: <input type="phraseLastQuest" name="phraseLastQuest" /></p>
 <p><input type="submit" value="Преобразовать текст" /></p>
</form>
<?php

		$letters = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'yo',
		'ж' => 'zh',
		'з' => 'z',
		'и' => 'i',
		'й' => 'i\'',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'kh',
		'ц' => 'ts',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'sch',
		'ъ' => '\'',
		'ы' => 'i',
		'ь' => '\'',
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',
		' ' => '_',
		',' => ',',
		'.' => '.',
		'!' => '!',
		'?' => '?',
	];

	$defaultPhrase = $_POST['phraseLastQuest'];
	$modPhrase = preg_split('//u', $defaultPhrase, null, PREG_SPLIT_NO_EMPTY);

	function translitAndSnakeCase($keyArray, $lettersArray)
	{
		$keysInLettersArray = array_keys($lettersArray);
		for ($k = 0; $k < count($keyArray); $k++){
			for($l = 0; $l < count($keysInLettersArray); $l++){
				if($keyArray[$k] == $keysInLettersArray[$l]){
					$numLetter = $keysInLettersArray[$l];
					echo $lettersArray[$numLetter];
				}
			}
		}
	}

	translitAndSnakeCase($modPhrase, $letters);

?>

</body>
</html>

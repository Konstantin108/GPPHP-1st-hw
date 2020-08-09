<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p style="color: blue">Первое задание</p>
<!--------------------------------Первое задание-------------------------------->
<?php

	$a = random_int(-999, 999);
	$b = random_int(-999, 999);
	echo "Первая переменная: {$a} ";
	echo "Вторая переменная: {$b}<br>";

	function math($a, $b)
	{
		if($a >= 0 && $b >= 0){
			echo 'разность чисел: ';
			return $a - $b;
		}else if($a < 0 && $b < 0){
			echo 'произведение чисел: ';
			return $a * $b;
		}else if($a >= 0 && $b <0){
			echo 'сумма чисел: ';
			return $a + $b;
		}else if($b >= 0 && $a <0){
			echo 'сумма чисел: ';
			return $a + $b;
		}
	}

	echo math($a, $b);

?>
<p style="color: red">Я не до конца понял 2ое задание, поэтому сделал 2 варианта решения,<br>а еще сделал вариант с циклом</p>
<p style="color: blue">Второе задание(switch case - 1ый вариант)</p>
<!--------------------------Второе задание(switch case - 1ый вариант)-------------------------->
<?php

	$d = random_int(0, 15);
	echo "Случайная переменная: $d<br>";

	switch ($d) {
		case '0':
			echo '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
			break;
		case '1':
			echo '2 3 4 5 6 7 8 9 10 11 12 13 14 15';
			break;
		case '2':
			echo '3 4 5 6 7 8 9 10 11 12 13 14 15';
			break;
		case '3':
			echo '4 5 6 7 8 9 10 11 12 13 14 15';
			break;
		case '4':
			echo '5 6 7 8 9 10 11 12 13 14 15';
			break;
		case '5':
			echo '6 7 8 9 10 11 12 13 14 15';
			break;
		case '6':
			echo '7 8 9 10 11 12 13 14 15';
			break;
		case '7':
			echo '8 9 10 11 12 13 14 15';
			break;
		case '8':
			echo '9 10 11 12 13 14 15';
			break;
		case '9':
			echo '10 11 12 13 14 15';
			break;
		case '10':
			echo '11 12 13 14 15';
			break;
		case '11':
			echo '12 13 14 15';
			break;
		case '12':
			echo '13 14 15';
			break;
		case '13':
			echo '14 15';
			break;
		case '14':
			echo '15';
			break;
		case '15':
			echo '';
			break;
	}

?>
<p style="color: blue">Второе задание(switch case - 2ой вариант)</p>
<!--------------------------Второе задание(switch case - 2ой вариант)-------------------------->
<?php

	$e = random_int(0, 15);
	echo "Случайная переменная: $e<br>";

	switch ($e) {
		case '0':
			echo 15;
			break;
		case '1':
			echo 14;
			break;
		case '2':
			echo 13;
			break;
		case '3':
			echo 12;
			break;
		case '4':
			echo 11;
			break;
		case '5':
			echo 10;
			break;
		case '6':
			echo 9;
			break;
		case '7':
			echo 8;
			break;
		case '8':
			echo 7;
			break;
		case '9':
			echo 6;
			break;
		case '10':
			echo 5;
			break;
		case '11':
			echo 4;
			break;
		case '12':
			echo 3;
			break;
		case '13':
			echo 2;
			break;
		case '14':
			echo 1;
			break;
		case '15':
			echo 0;
			break;
	}

?>
<p style="color: blue">Второе задание(цикл)</p>
<!----------------------------------Второе задание(цикл)---------------------------------->
<?php

	$c = random_int(0, 15);
	echo "Случайная переменная: $c<br>";
	$total = 15;

	for($i = $c + 1; $i <= $total; $i++){
		echo "{$i} ";
	}

?>
<p style="color: blue">Третье задание</p>
<!--------------------------------Третье задание-------------------------------->
<?php

	function summ($a, $b)      //переменные те же, что и к 1му заданию
	{
		return $a + $b;
	}
	echo 'Сумма чисел: ' . summ($a, $b) . '<br>';

		function minus($a, $b)
	{
		return $a - $b;
	}
	echo 'Разность чисел: ' . minus($a, $b) . '<br>';

		function mult($a, $b)
	{
		return $a * $b;
	}
	echo 'Произведение чисел: ' . mult($a, $b) . '<br>';

		function div($a, $b)
	{
		return $a / $b;
	}
	echo 'Результат деления чисел: ' . div($a, $b);

?>
<p style="color: blue">Четвёртое задание</p>
<!--------------------------------Четвёртое задание-------------------------------->
<?php

	$arg1 = random_int(0, 100);
	$arg2 = random_int(0, 100);
	echo "Первая переменная: {$arg1} ";
	echo "Вторая переменная: {$arg2}<br>";

	function mathOperation($arg1, $arg2, $operation)
	{
		switch ($operation) {
			case 'сложение':
				echo "{$operation}<br>";
				return $arg1 + $arg2;
				break;
			case 'вычитание':
				echo "{$operation}<br>";
				return $arg1 - $arg2;
				break;
			case 'умножение':
				echo "{$operation}<br>";
				return $arg1 * $arg2;
				break;
			case 'деление':
				echo "{$operation}<br>";
				return $arg1 / $arg2;
				break;
		}
	}

	echo mathOperation($arg1, $arg2, 'умножение');  //----Здесь нужно написать название операции

?>
<p style="color: blue">Пятое задание</p>
<!--------------------------------Пятое задание-------------------------------->
<?php

$currentDate =  date('Y');

$content = file_get_contents('5.html');
$content = str_replace('{{CONTENT}}', $currentDate, $content);
echo $content;

?>
<p style="color: blue">Шестое задание</p>
<!--------------------------------Шестое задание-------------------------------->
<?php

function power($val, $pow) {
  if ($pow == 0) {
    return 1;
  }
  if ($pow < 0) {
    return power(1/$val, -$pow);
  }
  return $val * power($val, $pow-1);
}

echo power(2, 2);    //----------Здесь нужно передать число и степень----------

?>
<p style="color: blue">Седьмое задание</p>
<!--------------------------------Седьмое задание-------------------------------->
<?php

	$hour = date('H');
	$minute = date('i');


function getCurrentTime($hour, $minute, $minuteType, $hourType) {
    $textArr = array(
        'm' => array('минута', 'минуты', 'минут'),
        'h' => array('час', 'часа', 'часов'),
    );
    $hour = (int) $hour;
    $minute = (int) $minute;
    $hourResult = $hour . ' ';
    $minuteResult = $minute . ' ';
    if(isset($textArr[$hourType])) {
        switch ( ($hour >= 20) ? $hour % 10 : $hour )
        {
            case 1:
                $hourResult .= $textArr[$hourType][0];
                break;
            case 2:
            case 3:
            case 4:
                $hourResult .= $textArr[$hourType][1];
                break;
            default:
                $hourResult .= $textArr[$hourType][2];
        }
    }
    echo "{$hourResult} ";
    if(isset($textArr[$minuteType])) {
        switch ( ($minute >= 20) ? $minute % 10 : $minute )
        {
            case 1:
                $hourResult .= $textArr[$minuteType][0];
                break;
            case 2:
            case 3:
            case 4:
                $minuteResult .= $textArr[$minuteType][1];
                break;
            default:
                $minuteResult .= $textArr[$minuteType][2];
        }
    }
    echo $minuteResult;
}


getCurrentTime($hour, $minute, 'm', 'h');

?>
</body>
</html>
<style>
	input::-webkit-inner-spin-button {
  		display: none;
}
</style>
<h1>Задание №1 - калькулятор</h1>
<form method="post">
	<p>Введите первое число</p>
	<input type="number" name="num1" value="<?= $_POST['num1'] ?>">
	<p>Введите второе число</p>
	<input type="number" name="num2" value="<?= $_POST['num2'] ?>">
	<select name="chooseOperation" id="chooseOperation">
		<option value="nothing">Выберите операцию</option>
		<option value="summ">Сложение</option>
		<option value="minus">Вычитание</option>
		<option value="mult">Умножение</option>
		<option value="div">Деление</option>
	</select>
	<input type="submit">
</form>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num1 = ( int )$_POST['num1'];
		$num2 = ( int )$_POST['num2'];
		$operation = $_POST['chooseOperation'];


	function mathOperation($num1, $num2, $operation)
	{
		switch ($operation) {
			case 'summ':
				$result = $num1 + $num2;
				echo "<p style=\"color: green\">Результат сложения: {$result}</p>";
				break;
			case 'minus':
				$result = $num1 - $num2;
				echo "<p style=\"color: green\">Результат вычитания: {$result}</p>";
				break;
			case 'mult':
				$result = $num1 * $num2;
				echo "<p style=\"color: green\">Результат умножения: {$result}</p>";
				break;
			case 'div':
				if($num2 == 0){
					echo "<p style=\"color: red\">Деление на ноль невозможно</p>";
					break;
				}else{
					$result = $num1 / $num2;
					echo "<p style=\"color: green\">Результат деления: {$result}</p>";
					break;
				}
			case 'nothing':
				echo "<p style=\"color: red\">Выберете операцию из выпадающего меню</p>";
				break;
		}
	}

	mathOperation($num1, $num2, $operation);
}
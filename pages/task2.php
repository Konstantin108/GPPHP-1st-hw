<style>
	input::-webkit-inner-spin-button {
  		display: none;
}
	.btn{
		outline: none;
		border-radius: 50%;
		width: 66px;
		height: 66px;
		margin-right: 6px;
		cursor: pointer;
		color: black;
		font-size: 30px;
		background-color: #ffff72;
	}
</style>
<h1>Задание №2 - калькулятор</h1>
<form method="post">
	<p>Введите первое число</p>
	<input type="number" name="num1" value="<?= $_POST['num1'] ?>">
	<p>Введите второе число</p>
	<input type="number" name="num2" value="<?= $_POST['num2'] ?>"><br><br>
	<input class="btn" name="summ" type="submit" value="+">
	<input class="btn" name="minus" type="submit" value="-"><br><br>
	<input class="btn" name="mult" type="submit" value="x">
	<input class="btn" name="div" type="submit" value="/">
</form>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num1 = ( int )$_POST['num1'];
		$num2 = ( int )$_POST['num2'];
		$operation = '';
		if(isset($_POST['summ']))
		{
			$operation = 'summ';
		}
		if(isset($_POST['minus']))
		{
			$operation = 'minus';
		}
		if(isset($_POST['mult']))
		{
			$operation = 'mult';
		}
		if(isset($_POST['div']))
		{
			$operation = 'div';
		}

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

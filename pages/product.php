<style>
	.comment{
		width: 460px;
		height: 140px;
		margin-bottom: 4px;
		background-color: #67daff;
		border-radius: 19px;
		padding-top: 4px;
		padding-bottom: 4px;
		padding-left: 8px;
		padding-right: 8px;
	}

	.input_comment{
		width: 250px;
		height: 40px;
	}

	.characteristics{
		width: 460px;
	}
</style>
<?php

$sql = 'SELECT * FROM phones WHERE id = ' . getId();
$res = mysqli_query($link, $sql);

$html = '<h1>Страница товара</h1>';
$row = mysqli_fetch_assoc($res);
	$html .= <<<php
				<div>
					<img src="{$row['link']}" alt="{$row['id']}" width=400px>
						<h1>{$row['name']}</h1>
						<h2>{$row['price']}&#8381;</h2>
						<p class="characteristics">{$row['characteristics']}</p>
					<br>
				</div>
php;

$typeOfDb = $row['type_db'];
$goodId = $row['id'];

echo $html;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nameComment = $_POST['nameComment'];
		$comment = $_POST['comment'];
		$sqlAdd = "INSERT INTO {$typeOfDb} (id, user_name, good_id, comment) VALUES (NULL, '{$nameComment}', {$goodId}, '{$comment}');";
		if(!empty($nameComment) && !empty($comment)){
			mysqli_query($link, $sqlAdd);
			header('Location: ?page=5');
			exit;
		}
	}


if((int)$_GET['id'] < 4){

	echo <<<php
		<h2>Оставьте свой отзыв о товаре</h2>
		<form method="post">
			<input type="text" name="nameComment" placeholder="Ваше имя"><br><br>
			<input type="text" name="comment" placeholder="Ваш комментарий" class="input_comment">
			<input type="submit">
		</form>

php;

}

$sqlShowComment = "SELECT * FROM {$typeOfDb}";
$resComment = mysqli_query($link, $sqlShowComment);

$html = '<h1>Отзывы о товаре</h1>';
while($rowComment = mysqli_fetch_assoc($resComment)){
	$html .= <<<php
				<div class="comment">
					<h2 style="color: white">{$rowComment['user_name']}</2><br>
					<p style="color: black">{$rowComment['comment']}</p>
					<br>
				</div>
php;

}

echo $html;




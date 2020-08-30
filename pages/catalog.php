<style>
	.product{
		display: flex;
		flex-direction: column;
		width: 280px;
		height: 400px;
		float: left;
		margin-right: 20px;
	}

	.input_characteristics{
		width: 270px;
		height: 70px;
	}
</style>
<?php

$sql = 'SELECT * FROM phones';
$res = mysqli_query($link, $sql);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$typeOfDb = 'off_comments';
		$noImg = '/img/no_img.jpg';
		$characteristicsOfGood = $_POST['characteristics'];
		$sqlAddGood = "INSERT INTO phones (id, name, price, link, type_db, characteristics) VALUES (NULL, '{$name}', '{$price}', '{$noImg}', '{$typeOfDb}', '{$characteristicsOfGood}');";
		if(!empty($name) && !empty($price)){
			mysqli_query($link, $sqlAddGood);
			header('Location: ?page=6');
			exit;
		}
	}

?>

<h2>Оставьте свой отзыв о товаре</h2>
<form method="post">
	<input type="text" name="name" placeholder="Название товара"><br><br>
	<input type="text" name="price" placeholder="Цена товара" class="input_comment"><br><br>
	<input type="text" name="characteristics" placeholder="Описание товара" class="input_characteristics">
	<input type="submit" value="Добавить товар">
</form>

<?php

$html = '<h1>Каталог товаров</h1>';
while($row = mysqli_fetch_assoc($res)){
	$html .= <<<php
				<div class="product">
					<img src="{$row['link']}" alt="{$row['id']}" width=300px>
					<a href="?page=4&id={$row['id']}">
						{$row['name']}
						<h2>{$row['price']}&#8381;</h2>
					</a><br>
				</div>
php;
}

echo $html;

?>
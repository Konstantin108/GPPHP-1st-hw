<style>
	img{
		width: 400px;
	}
</style>
<?php

	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'images');

	$result = mysqli_query($link, "SELECT * FROM img");

	$tmp = '';

	while ($row = mysqli_fetch_assoc($result)){
	echo <<<php
		<a href="{$row['link_to_site']}" target="blank">
			<h1>{$row['id']}</h1>
			<h1>{$row['name']}</h1>
			<img src="{$row['link']}"></img>
			<h2>вес изображения: {$row['size']} кб</h2>
		</a>

php;

}
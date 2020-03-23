<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="table, item, board">
	<meta description="Добавление новой продукции в таблицу товаров">
	<meta name="googlebot" content="noindex"/>
	<title>Add item</title>
	<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<img src="karl.jpg" align="right" width="250"><br>
	<h1>А ОН МНЕ ГОВОРИТ "PHP ЛЕГКО, КАРЛ!"</h1>
	<h1>А Я ДЕНЬ УБИЛ НА ЭТУ ТАБЛИЦУ, КАРЛ!</h1>

	<div class="row"></div>
	<!--функционал добавления нового товара-->
	<form action="index.php" method="get">
	<input type="text" placeholder="Название">
	<input type="text" placeholder="Цена">
		<!--<form enctype="multipart/form-data" method="post">-->
		<input type="file">
		<!--</form>-->
	<!--Почему ширина и высота кнопки не менялась пока я не добавил value?-->
	<input class="add" type="submit" value="Добавить"><br><br>
	<input class="reset" type="reset" value="Удалить"><br><br><br><br>


	<!--таблица добавленых товаров-->
	<table border="0">
		<thead>
			<th>Название</th>
			<th>Фото</th>
			<th>Цена(грн)</th>
			<th>Описание</th>
		</thead>
		<tbody>
			<tr>
				<td>Iphone 5</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+5&sxsrf=ALeKk006hysWjVxYdH5D7RlonZQZXMSaxw:1584630408077&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjAj8uk6KboAhVnk4sKHSZTCMAQ_AUoAXoECAwQAw&biw=958&bih=426">Ссылка на фото</a></td>
				<td>7000</td>
				<td>такое</td>
			</tr>
			
			<tr>
				<td>Iphone 6</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+6&tbm=isch&ved=2ahUKEwjkkMem6KboAhVRwCoKHYcSBDIQ2-cCegQIABAA&oq=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+6&gs_l=img.3..35i39j0j0i30l8.120484.120484..120671...0.0..0.66.66.1......0....1..gws-wiz-img.hRKvOkGcPSA&ei=jIpzXuSaDNGAqwGHpZCQAw&bih=426&biw=958">Ссылка на фото</a></td>
				<td>8000</td>
				<td>норм</td>
			</tr>

			<tr>
				<td>Iphone 7</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+7&tbm=isch&ved=2ahUKEwjQwZSA6aboAhVLzyoKHZ-SADQQ2-cCegQIABAA&oq=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+7&gs_l=img.3..35i39j0j0i30l8.20272.20272..20532...0.0..0.76.76.1......0....1..gws-wiz-img.Lzqxz39cZOc&ei=SItzXtD9BsueqwGfpYKgAw&bih=426&biw=958">Ссылка на фото</a></td>
				<td>9000</td>
				<td>хороший</td>
			</tr>

			<tr>
				<td>Iphone 8</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+8&tbm=isch&ved=2ahUKEwiGysDo6KboAhWOCHcKHWq1AlMQ2-cCegQIABAA&oq=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+8&gs_l=img.3..0l2j0i30l8.11669.11669..11954...0.0..0.77.77.1......0....1..gws-wiz-img.CIyDXO6rUtU&ei=FotzXobnHo6R3APq6oqYBQ&bih=426&biw=958">Ссылка на фото</a></td>
				<td>10000</td>
				<td>классный</td>
			</tr>

			<tr>
				<td>Iphone 9</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+9&tbm=isch&ved=2ahUKEwiPgeHu6KboAhXWsSoKHQ5pDvUQ2-cCegQIABAA&oq=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+9&gs_l=img.3..0j0i30l9.22682.22682..22911...0.0..0.68.68.1......0....1..gws-wiz-img.RTvGF94mMDw&ei=I4tzXs_jJdbjqgGO0rmoDw&bih=426&biw=958">Ссылка на фото</a></td>
				<td>11000</td>
				<td>за тебя калым отдам</td>
			</tr>

			<tr>
				<td>Iphone 10</td>
				<td><a href="https://www.google.com/search?q=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+10&tbm=isch&ved=2ahUKEwjh0qL66KboAhVCxioKHQsUCu4Q2-cCegQIABAA&oq=%D0%B0%D0%B9%D1%84%D0%BE%D0%BD+10&gs_l=img.3..0j0i30l9.10998.11097..11307...0.0..0.72.143.2......0....1..gws-wiz-img.h1OOhBgMryk&ei=O4tzXqHJLsKMqwGLqKjwDg&bih=426&biw=958">Ссылка на фото</a></td>
				<td>12000</td>
				<td>душу дьяволу продам</td>
			</tr>



		</tbody>

		




	</table>

	</form>
</body>
</html>
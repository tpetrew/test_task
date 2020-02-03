<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/media-queries.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="wrapper">

<h1>Стоимость обучения</h1>

<div class="item_box_wrapper">
	<div class="item_box_wrapper--price_box">
		<div class="item_box_wrapper--price_box--mark_box">
			<div class="mark">
				<div class="mark__text">
					<h2>скидка</h2>
					<h1>40%</h1>
					<p>первым 20</p>
				</div>
			</div>
		</div>
		<div class="item_box_wrapper--price_box--content_box">
			<div class="price_box--content_box--small">
				<h2>Полная стоимость курса</h2>
				<h3>50 000 ₽</h3>
			</div>
			<div class="price_box--content_box--big">
				<h1>2 900 ₽</h1>
				<h2>Рассрочка без первого взноса</h2>
			</div>
			<div class="price_box--content_box--medium">
				<h1>29 000 ₽</h1>
				<h2>Для первых 20-ти</h2>
			</div>
		</div>
	</div>
<div class="item_box_wrapper--about_box--wrapper">
		<div class="item_box_wrapper--about_box">
			<h1>Запишитесь на курс</h1>
			<div class="about_data">
				<div>Старт курса: <span>7 сентября</span></div>
				<div>Осталось: <span>19 мест</span></div>
			</div>

			<form action="" name="form" onsubmit="return(validate());">
				<input type="text" name="name" placeholder="Имя" class="input"><br>
				<input type="phone" name="phone" placeholder="Телефон" class="input"><br>
				<input type="email" name="email" placeholder="Email" class="input"><br>
				<input type="submit" name="" class="button" value="ЗАПИСАТЬСЯ"><br>
				<label class="checkbox">
    				<input class="checkbox__default" type="checkbox" name="agree">
    				<div class="checkbox__new"></div>
    				<div class="checkbox__descr">Я согласен с условиями обработки </div> <span class="personal-data"><a href="#"> персональных данных</a></span>
				</label>
			</form>
		</div>
	</div>

</div>

</div>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
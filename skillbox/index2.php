<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/media-queries.css">
	<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script  src="https://code.jquery.com/jquery-1.11.2.js "></script>
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

<div class="preferences">
	<ul>
		<li><span>Телефон</span></li>
		<li><span>Телефон</span></li>
		<li><span>Телефон</span></li>
		<li><span>Телефон</span></li>
	</ul>
</div>

			<div class="about_data">
				<div>Старт курса: <span>7 сентября</span></div>
				<div>Осталось: <span>19 мест</span></div>
			</div>

			<form action="" name="form" onsubmit="return(validate());">
				<input type="text" name="name" placeholder="Имя" class="input"><br>
				<input type="text" name="phone" placeholder="Телефон" class="input" id="phone" onsubmit="return(ValidPhone());"><br>
				<input type="text" name="email" placeholder="Email" class="input" id="email" onsubmit="return(ValidMail());"><br>
				<input type="submit" name="" class="button" value="ЗАПИСАТЬСЯ"><br>
				<label class="checkbox">
    				<input class="checkbox__default" type="checkbox" name="agree" id="agree_checkbox">
    				<div class="checkbox__new"></div>
    				<div class="checkbox__descr">Я согласен с условиями обработки </div> <span class="personal-data"><a href="#"> персональных данных</a></span>
				</label>
			</form>
		</div>
	</div>
</div>

</div>

<div if="message"></div>

<script type="text/javascript">

	function validate() {
      
         if( document.form.name.value == "" ) {
            alert( "Укажите имя" );
            document.form.name.focus() ;
            return false;
         }     
         if( document.form.phone.value == "" ) {
            alert( "Укажите телефон" );
            document.form.phone.focus() ;
            return false;
         } else {
         	var re = /^\d[\d\(\)\ -]{4,14}\d$/;
    var myPhone = document.getElementById('phone').value;
    var valid = re.test(myPhone);
    if (valid) return( true );
    else {alert("Номер телефона введен неправильно!");
    document.form.email.focus() ;}
         }


         if( document.form.email.value == "" ) {
            alert( "Заполните Email" );
            document.form.email.focus() ;
            return false;
         } else {
         	var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    var myMail = document.getElementById('email').value;
    var valid = re.test(myMail);
    if (valid) return( true );
    else {alert("Адрес эл. почты введен неправильно!");
    document.form.email.focus() ;}
         }


         var agree_checkbox;
         agree_checkbox = document.getElementById('agree_checkbox');

         if( agree_checkbox.checked ) {
            return( true );
         } else {
         	alert( "Пожалуйста, поставьте галочку, если согласны с ползьзовательским соглашением" );
            return false;
        }

         
      }

     

function ValidPhone() {
    var re = /^\d[\d\(\)\ -]{4,14}\d$/;
    var myPhone = document.getElementById('phone').value;
    var valid = re.test(myPhone);
    if (valid) output = 'Номер телефона введен правильно!';
    else output = 'Номер телефона введен неправильно!';
    document.getElementById('message').innerHTML = document.getElementById('message').innerHTML+'<br />'+output;
    return valid;
}  
</script>
</body>
</html>
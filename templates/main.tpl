<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="%meta_key%">
	<meta name="description" content="%meta_desc%">
	<meta name="author" content="%author%">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/clear.css" rel="stylesheet" type="text/css">
	<title>
		<!--{$title}-->
	</title>
</head>
<body>
<div class="wrap">
	<div class="top">
		<div class="top_content">
			<div class="logo">
				<h1>filemoviek</h1>
				<p>Данный сайт поможет оставаться вам в центре новостей из киноиндустрии!</p>
			</div>
			<div class="search">
				<form action="form_controller.php" method="get">
				<p><input type="submit" name="send" value="" class="search_btn"></p>
				<p><input type="text" name="search_string" class="search_text"></p>
				</form>
			</div>
		</div>
	</div>
	<div class="main_content clearfix">
	<header>
		<div class="header_logo">
			<h1>all news</h1>
			<h2> at one place</h2>
			<h3>Узнайте все о кинематографе...</h3>
			<p>Первый шаг к кинематографу был сделан в XV-XVII веках, когда был разработан «волшебный фонарь» — 
			камера обскура (кроме того, были и более ранние события в других странах, такие как театр теней в Китае и 
			Японии, а принцип создания изображения посредством узкого отверстия был известен ещё в античности)</p>
		</div>
	</header>
	<menu>
		<ul>
			<!--{$menu}-->
		</ul>
	</menu>
	<div class="interlayer">
	</div>
	<content>	
	<div class="left">
		<!--{$form_auth}
		{$weather}-->
	</div>
		<div class ="right">
			preview
			{$middle_content}
			bottom
	</content>
	</div>
	<footer>
		<div class="footer_content">
			<h3>Техническая поддержка...</h3>
			<ul>
			<li>Телефон: +888-88-8888888</li>
			<li>Время приема звонков: 9:00-24:00</li>
			<li>Email: admin@gmail.com</li>
			<li>skype: admin</li>
			</ul>
		</div>
		<div class="copyright">Все права защищены &copy; Filmoviek 2016</div>
	</footer>
		</div>
</body>
</html>
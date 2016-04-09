<?php
/* Smarty version 3.1.28, created on 2016-04-09 10:35:50
  from "C:\Server\data\htdocs\filmoviek.net\templates\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5708b0d6b52cc9_31355942',
  'file_dependency' => 
  array (
    'de470c4c1f8e9a59fcfe0ff23ef32e55b2375151' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\main.tpl',
      1 => 1460184277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5708b0d6b52cc9_31355942 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_key']->value;?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_desc']->value;?>
">
	<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/clear.css" rel="stylesheet" type="text/css">
	<title>
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	</title>
</head>
<body>
<div class="wrap">
	<div class="top">
		<div class="top_content">
			<div class="logo">
				<h1>filmoviek</h1>
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
			<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

		</ul>
	</menu>
	<div class="interlayer">
	</div>
	<content>	
	<div class="left">
		<?php echo $_smarty_tpl->tpl_vars['form_auth']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['weather']->value;?>

	</div>
		<div class ="right">
			<?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['middle_content']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['bottom']->value;?>

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
</html><?php }
}

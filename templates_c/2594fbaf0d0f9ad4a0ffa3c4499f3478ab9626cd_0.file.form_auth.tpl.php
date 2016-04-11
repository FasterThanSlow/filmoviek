<?php
/* Smarty version 3.1.28, created on 2016-04-11 11:35:40
  from "C:\Server\data\htdocs\filmoviek.net\templates\form_auth.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570b61dcc0d337_77449226',
  'file_dependency' => 
  array (
    '2594fbaf0d0f9ad4a0ffa3c4499f3478ab9626cd' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\form_auth.tpl',
      1 => 1460363737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b61dcc0d337_77449226 ($_smarty_tpl) {
?>
<div class="block">
	<h3>Войти на сайт</h3>
	<form action="functions.php" method="post">
		<table>
			<tr>
				<td><input type="text" value="login" name="login" class="auth_input"></td>
			</tr>
			<tr>
				<td><input type="password" value="password" name="password" class="auth_input"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Войти" name="authorization" class="auth_btn"></td>
			</tr>
			<tr><td><a href="index.php?view=reg">Регистрация</a></td></tr>
		</table>
	</form>
</div>
<?php }
}

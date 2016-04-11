<?php
/* Smarty version 3.1.28, created on 2016-04-10 02:11:12
  from "C:\Server\data\htdocs\filmoviek.net\templates\form_reg.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57098c101edb68_23336424',
  'file_dependency' => 
  array (
    '04b99f63da9b639525aa1b113f1919c9b12a4957' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\form_reg.tpl',
      1 => 1459858060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57098c101edb68_23336424 ($_smarty_tpl) {
?>
<div class="regestration">
			<form action="form_controller.php" method="get">
			<table>
				<tr class="field">
					<td> Введите имя пользователя:</td>
					<td ><input type="text" name="login_reg"></td>
				</tr>
				<tr class="field">
					<td> Введите пароль:</td>
					<td><input type="password" name="login_reg"></td>
				</tr>
				<tr class="field">
					<td> Введите email:</td>
					<td><input type="text" name="login_reg"></td>
				</tr>
				<tr class="field" align="right">
					<td ><input type="submit" name="reg" value="Зарегестрироваться" class="auth_btn"></td>
				</tr>
			</table>
			</form>
			</div><?php }
}

<?php
/* Smarty version 3.1.28, created on 2016-04-11 11:34:22
  from "C:\Server\data\htdocs\filmoviek.net\templates\user_panel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570b618ebf5124_53144831',
  'file_dependency' => 
  array (
    '8b4a706f9a6b4fd90d5a4039501028f34df33195' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\user_panel.tpl',
      1 => 1460363452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b618ebf5124_53144831 ($_smarty_tpl) {
?>
<div class="block">
	<h3>Ваш профиль</h3>
	<p>
		Добро пожаловать <span class="user_info"><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
</span>
	</p>
	<p>Ваш login: <span class="user_info"><?php echo $_smarty_tpl->tpl_vars['user']->value->getLogin();?>
</span></p>
	<p>Ваш email: <span class="user_info"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
</span></p>
	<p>
		<a href="functions.php?logout=1">Выход</a>
	</p>
</div><?php }
}

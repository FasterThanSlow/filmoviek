<?php
/* Smarty version 3.1.28, created on 2016-04-07 17:49:01
  from "C:\Server\data\htdocs\filmoviek.net\templates\weather.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5706735da256d4_57867962',
  'file_dependency' => 
  array (
    '776e3763a7ad66b9461229163d56d2d4cb878e9a' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\weather.tpl',
      1 => 1460040540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5706735da256d4_57867962 ($_smarty_tpl) {
?>
<div class="block">
	<h3>Погода</h3>
	<p><?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['temperature']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['additional']->value;?>
</p>
</div><?php }
}

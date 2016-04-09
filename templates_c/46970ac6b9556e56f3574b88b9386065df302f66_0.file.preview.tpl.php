<?php
/* Smarty version 3.1.28, created on 2016-04-07 18:09:19
  from "C:\Server\data\htdocs\filmoviek.net\templates\preview.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5706781fa7e564_74804889',
  'file_dependency' => 
  array (
    '46970ac6b9556e56f3574b88b9386065df302f66' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\preview.tpl',
      1 => 1460041597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5706781fa7e564_74804889 ($_smarty_tpl) {
?>
<div class="preview">
	<h2><?php echo $_smarty_tpl->tpl_vars['section']->value->getTitle();?>
</h2>
	<?php echo $_smarty_tpl->tpl_vars['section']->value->getDescription();?>

</div><?php }
}

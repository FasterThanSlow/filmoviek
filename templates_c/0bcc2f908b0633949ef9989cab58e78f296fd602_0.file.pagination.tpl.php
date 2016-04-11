<?php
/* Smarty version 3.1.28, created on 2016-04-10 10:59:16
  from "C:\Server\data\htdocs\filmoviek.net\templates\pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_570a07d4c255c9_48730245',
  'file_dependency' => 
  array (
    '0bcc2f908b0633949ef9989cab58e78f296fd602' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\pagination.tpl',
      1 => 1460275154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570a07d4c255c9_48730245 ($_smarty_tpl) {
?>
<div class="pagination">
<?php
$_from = $_smarty_tpl->tpl_vars['pagination']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_number_0_saved_item = isset($_smarty_tpl->tpl_vars['number']) ? $_smarty_tpl->tpl_vars['number'] : false;
$_smarty_tpl->tpl_vars['number'] = new Smarty_Variable();
$__foreach_number_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_number_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['number']->value) {
$__foreach_number_0_saved_local_item = $_smarty_tpl->tpl_vars['number'];
?>
	<a href="?view=section&id=<?php echo $_smarty_tpl->tpl_vars['section']->value->getId();?>
&page=<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</a>
<?php
$_smarty_tpl->tpl_vars['number'] = $__foreach_number_0_saved_local_item;
}
}
if ($__foreach_number_0_saved_item) {
$_smarty_tpl->tpl_vars['number'] = $__foreach_number_0_saved_item;
}
?>
</div><?php }
}

<?php
/* Smarty version 3.1.28, created on 2016-04-09 10:35:10
  from "C:\Server\data\htdocs\filmoviek.net\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5708b0aee06e26_99863615',
  'file_dependency' => 
  array (
    'e2c3a795a13fedc61126a66e7ab3ea58247d33ff' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\menu.tpl',
      1 => 1460187064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5708b0aee06e26_99863615 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['menu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_item_0_saved_item = isset($_smarty_tpl->tpl_vars['menu_item']) ? $_smarty_tpl->tpl_vars['menu_item'] : false;
$_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable();
$__foreach_menu_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_menu_item_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->value) {
$__foreach_menu_item_0_saved_local_item = $_smarty_tpl->tpl_vars['menu_item'];
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value->getLink();?>
"><?php echo $_smarty_tpl->tpl_vars['menu_item']->value->getTitle();?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['menu_item'] = $__foreach_menu_item_0_saved_local_item;
}
}
if ($__foreach_menu_item_0_saved_item) {
$_smarty_tpl->tpl_vars['menu_item'] = $__foreach_menu_item_0_saved_item;
}
}
}

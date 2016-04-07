<?php
/* Smarty version 3.1.28, created on 2016-04-07 00:07:07
  from "C:\Server\data\htdocs\filmoviek.net\templates\article_promo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57057a7b6cf1c1_66797985',
  'file_dependency' => 
  array (
    '7db1aa347f1997aff885aeac4b75a9aa281cbd9d' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\article_promo.tpl',
      1 => 1459973258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57057a7b6cf1c1_66797985 ($_smarty_tpl) {
?>
<div class="article clearfix">
	<div class="main_text">
	<h2> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></h2>
	<p class="img"></p>
	<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

	</div>
	<div class="info">
		<p class="author"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</p>
		<p class="date"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</p>
	</div>			
</div><?php }
}

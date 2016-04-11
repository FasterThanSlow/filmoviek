<?php
/* Smarty version 3.1.28, created on 2016-04-10 02:05:49
  from "C:\Server\data\htdocs\filmoviek.net\templates\article.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57098acd58e833_87860908',
  'file_dependency' => 
  array (
    '361aabb56818201f4b0c87c936c552f8eb781887' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\article.tpl',
      1 => 1460243147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57098acd58e833_87860908 ($_smarty_tpl) {
?>
<div class="article">
	<div class="main_text">
		<div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value->getImg();?>
"></div>
		<?php echo $_smarty_tpl->tpl_vars['article']->value->getFullText();?>

		<p class="author"><?php echo $_smarty_tpl->tpl_vars['article']->value->getAuthorName();?>
</p>
		<p class="date"><?php echo $_smarty_tpl->tpl_vars['article']->value->getArticleDate();?>
</p>
	</div>
</div><?php }
}

<?php
/* Smarty version 3.1.28, created on 2016-04-10 01:58:27
  from "C:\Server\data\htdocs\filmoviek.net\templates\article_promo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57098913dcd7a6_47169508',
  'file_dependency' => 
  array (
    '7db1aa347f1997aff885aeac4b75a9aa281cbd9d' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\filmoviek.net\\templates\\article_promo.tpl',
      1 => 1460242696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57098913dcd7a6_47169508 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$__foreach_article_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_article_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
	<div class="article clearfix">
		<div class="main_text">
		<h2> <a href="?view=article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value->getTitle();?>
</a></h2>
		<p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value->getImg();?>
"></p>
		<?php echo $_smarty_tpl->tpl_vars['article']->value->getDescription();?>

		</div>
		<div class="info">
			<p class="author"><?php echo $_smarty_tpl->tpl_vars['article']->value->getAuthorName();?>
</p>
			<p class="date"><?php echo $_smarty_tpl->tpl_vars['article']->value->getArticleDate();?>
</p>
		</div>			
	</div>
<?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
}
}

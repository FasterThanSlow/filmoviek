{foreach from=$articles item=$article}
	<div class="article clearfix">
		<div class="main_text">
		<h2> <a href="?view=article&id={$article->getId()}">{$article->getTitle()}</a></h2>
		<p class="img"><img src="{$article->getImg()}"></p>
		{$article->getDescription()}
		</div>
		<div class="info">
			<p class="author">{$article->getAuthorName()}</p>
			<p class="date">{$article->getArticleDate()}</p>
		</div>			
	</div>
{/foreach}
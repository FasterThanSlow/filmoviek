{foreach from=$articles item=$article}
	<div class="article clearfix">
		<div class="main_text">
		<h2> <a href="$link">{$article->getTitle()}</a></h2>
		<p class="img"></p>
		{$article->getDescription()}
		</div>
		<div class="info">
			<p class="author">{$article->getAuthor()}</p>
			<p class="date">{$article->getArticleDate()}</p>
		</div>			
	</div>
{/foreach}
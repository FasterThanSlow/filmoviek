<div class="article">
	<div class="main_text">
		<div class="img"><img src="{$article->getImg()}"></div>
		{$article->getFullText()}
		<p class="author">{$article->getAuthorName()}</p>
		<p class="date">{$article->getArticleDate()}</p>
	</div>
</div>
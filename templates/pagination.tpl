<div class="pagination">
{foreach from=$pagination item=$number}
	<a href="?view=section&id={$section->getId()}&page={$number}">{$number}</a>
{/foreach}
</div>
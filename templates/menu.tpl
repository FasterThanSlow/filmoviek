{foreach from=$menu item=menu_item}
<li><a href="{$menu_item->getLink()}">{$menu_item->getTitle()}</a></li>
{/foreach}
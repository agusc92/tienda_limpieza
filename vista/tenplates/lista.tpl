<ol class="list-group list-group-numbered">
{foreach from=$dato item=$item }
    <a href="router.php?action={$item['nombre']}" class=" text-*"><li class="list-group-item list-group-item-action">{$item['nombre']} - {$item['marca']}</li></a>
{/foreach}
  
</ol>
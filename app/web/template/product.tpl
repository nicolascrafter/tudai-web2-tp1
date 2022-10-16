{include file="app/web/template/header.tpl" title="{$product->name}"}
<h2>{$product->name}</h2>
<div class="product">
    <p>{$product->description_table}</p>
    <aside>
        <p>{$product->price}</p>
        <p>{$product->stock}</p>
        <p><a href="categories/view/{$product->fk_category}">{$product->type} - {$product->brand}</a></p>
    </aside>
</div>
{include file="app/web/template/footer.tpl"}
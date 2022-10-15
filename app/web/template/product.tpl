{include file="app/web/template/header.tpl" title="{$product->name}"}
<h2>{$product->name}</h2>
<div class="product">
    <p>{$product->description}</p>
    <aside>
        <p>{$product->price}</p>
        <p>{$product->stock}</p>
        <p>{$product->type} - {$product->brand}</p>
    </aside>
</div>
{include file="app/web/template/footer.tpl"}
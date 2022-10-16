{include file="app/web/template/header.tpl" title="{$category->type} - {$category->brand}"}
{if Count($products) == 0}
    <h2>La categoria {$category->type} - {$category->brand} esta vacia</h2>
{else}
    <h2>Productos de la categoria {$category->type} - {$category->brand}</h2>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
        </thead>
        <tbody>
            {foreach $products as $product}
                <td><a href="products/view/{$product->id}">{$product->name}</a></td>
                <td>{$product->description_table}</td>
                <td>{$product->price}</td>
                <td>{$product->stock}</td>
            {/foreach}
        </tbody>
    </table>
{/if}
{include file="app/web/template/footer.tpl"}
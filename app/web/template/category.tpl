{include file="app/web/template/header.tpl" title="{$category->type} - {$category->brand}"}
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
            <td>{$product->name}</td>
            <td>{$product->description_table}</td>
            <td>{$product->price}</td>
            <td>{$product->stock}</td>
        {/foreach}
    </tbody>
</table>
{include file="app/web/template/footer.tpl"}
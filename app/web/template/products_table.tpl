<table>
    <thead>
        <tr>
        {if $show_id}
            <th>id</th>
        {/if}
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            {if $show_id}
                <th>fk: id categoria</td>
                <th>id categoria</td>
            {/if}
            <th>Tipo</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
    {if count($products) > 0}
        {foreach $products as $product}
            <tr>
            {if $show_id}
                <td>{$product->id}</td>
            {/if}
                <td>{$product->name}</td>
                <td>{$product->description}</td>
                <td>${$product->price}</td>
                <td>{$product->stock} unidades</td>
                {if $show_id}
                    <td>{$product->fk_category}</td>
                    <td>{$product->category_id}</td>
                {/if}
                <td>{$product->type}</td>
                <td>{$product->brand}</td>
            </tr>
        {/foreach}
    {/if}
    </tbody>
</table>
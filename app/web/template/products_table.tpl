<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Tipo</th>
            <th>Marca</th>
            {if $admin}
                <th>Acciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {if count($products) > 0}
            {foreach $products as $product}
                <tr>
                    <td>{$product->name}</td>
                    <td>{$product->description}</td>
                    <td>${$product->price}</td>
                    <td>{$product->stock} unidades</td>
                    <td>{$product->type}</td>
                    <td>{$product->brand}</td>
                    {if $admin}
                        <td>
                            <form action="admin/delete_product" method="post">
                                <input type="hidden" name="id" value="{$product->id}">
                                <input type="submit" value="Borrar Producto">
                            </form>
                        </td>
                    {/if}
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>
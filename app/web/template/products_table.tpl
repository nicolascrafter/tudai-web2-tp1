<table class="table table-striped">
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
                    <td>{$product->description_table}</td>
                    <td>${$product->price}</td>
                    <td>{$product->stock} unidades</td>
                    <td>{$product->type}</td>
                    <td>{$product->brand}</td>
                    {if $admin}
                        <td>
                            <form action="products/delete" method="post">
                                <input type="hidden" name="id" value="{$product->id}">
                                <input type="submit" value="Borrar Producto">
                            </form>
                            <button type="button" class="modify-button">Modificar Producto</button>
                            <dialog>
                                <form action="products/post" , method="post" class="form-product">
                                    <input type="hidden" name="id" value="{$product->id}">
                                    <label for="post_name" class="label-name">Nombre</label>
                                    <input type="text" id="post_name" class="input-name" maxlength="200" name="name" value="{$product->name}" required>
                                    <label for="post_description" class="label-description">Descripcion</label>
                                    <textarea name="description" id="post_description" class="input-description" maxlength="999999999" required>{$product->description}</textarea>
                                    <label for="post_price" class="label-price">Precio</label>
                                    <input type="number" name="price" id="post_price" class="input-price" min="0" max="99999999.99" step="0.01" value="{$product->price}" required>
                                    <label for="post_stock" class="label-stock">Stock (unidades)</label>
                                    <input type="number" name="stock" id="post_stock" class="input-stock" min="0" max="999999999" step="1" value="{$product->stock}" required>
                                    <label for="post_category" class="label-category">Categoria</label>
                                    <select name="category" id="post_category" class="input-category" required>
                                        {foreach $categories as $category}
                                            <option {if $category->id == $product->category_id}selected {/if}value="{$category->id}">{$category->type} - {$category->brand}</option>
                                        {/foreach}
                                    </select>
                                    <input type="submit" class="submit">
                                </form>
                            </dialog>
                        </td>
                    {/if}
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>
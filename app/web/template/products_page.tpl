{include file="app/web/template/header.tpl" title="Products List"}
{include file="app/web/template/products_table.tpl"}
<hr>
{if admin}
    <h2>Agregar Producto</h2>
    <form action="products/post" , method="post">
        <label for="name">Nombre</label>
        <input type="text" maxlength="200" name="name" required>
        <label for="description">Descripcion</label>
        <textarea name="description" maxlength="999999999" required></textarea>
        <label for="price">Precio</label>
        <input type="number" name="price" min="0" max="99999999.99" step="0.01" value="0" required>
        <label for="stock">Stock (unidades)</label>
        <input type="number" name="stock" min="0" max="999999999" step="1" value="0" required>
        <label for="category">Categoria</label>
        <select name="category" required>
            {foreach $categories as $category}
                <option value="{$category->id}">{$category->type} - {$category->brand}</option>
            {/foreach}
        </select>
        <input type="submit">
    </form>
{/if}
{include file="app/web/template/footer.tpl"}
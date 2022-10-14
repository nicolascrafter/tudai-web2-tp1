{include file="app/web/template/header.tpl" title="Products List"}
{include file="app/web/template/products_table.tpl"}
<hr>
{if admin}
    <h2>Agregar Producto</h2>
    <form action="products/post" , method="post" class="form-product">
        <label for="post_name" class="label-name">Nombre</label>
        <input type="text" id="post_name" class="input-name" maxlength="200" name="name" required>
        <label for="post_description" class="label-description">Descripcion</label>
        <textarea name="description" id="post_description" class="input-description" maxlength="999999999" required></textarea>
        <label for="post_price" class="label-price">Precio</label>
        <input type="number" name="price" id="post_price" class="input-price" min="0" max="99999999.99" step="0.01"
            value="0.00" required>
        <label for="post_stock" class="label-stock">Stock (unidades)</label>
        <input type="number" name="stock" id="post_stock" class="input-stock" min="0" max="999999999" step="1" value="0" required>
        <label for="post_category" class="label-category">Categoria</label>
        <select name="category" id="post_category" class="input-category" required>
            {foreach $categories as $category}
                <option value="{$category->id}">{$category->type} - {$category->brand}</option>
            {/foreach}
        </select>
        <input type="submit" class="submit">
    </form>
{/if}
{include file="app/web/template/footer.tpl"}
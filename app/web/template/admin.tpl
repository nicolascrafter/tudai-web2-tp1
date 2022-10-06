{include file="app/web/template/header.tpl"}
<h2>Agregar Producto</h2>
<form action="admin/post_product", method="post">
    <label for="name">Nombre</label>
    <input type="text" maxlength="200" name="name" required>
    <label for="description">Descripcion</label>
    <textarea name="description" maxlength="999999999" required></textarea>
    <label for="price">Precio</label>
    <input type="number" name="price" min="0" max="99999999.99" step="0.01" value="0" required>
    <label for="stock">Stock (unidades)</label>
    <input type="number" name="stock" min="0" max="2147483647" step="1" value="0" required>
    <label for="category">Categoria</label>
    <select name="category" required>
    {foreach $categories as $category}
        <option value="{$category->id}">{$category->type} - {$category->brand}</option>
    {/foreach}
    </select>
    {* <input type="number" name="category"> *}
    <input type="submit">
</form>
<hr>
{include file="app/web/template/categories_table.tpl" show_id=true}
<hr>
{include file="app/web/template/products_table.tpl" show_id=true}
<hr>
<h2>Agregar Categoria</h2>
<form action="admin/post_category" method="post">
    <label for="type">Tipo</label>
    <input type="text" name="type" maxlength="100" required>
    <label for="brand">Marca</label>
    <input type="text" name="brand" maxlength="100" required>
    <input type="submit">
</form>
{include file="app/web/template/footer.tpl"}
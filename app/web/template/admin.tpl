{debug}
{include file="app/web/template/header.tpl"}
<h2>Agregar Producto</h2>
<form action="admin/post_product", method="post">
    <label for="name">Nombre</label>
    <input type="text" maxlength="200" name="name">
    <label for="description">Descripcion</label>
    <textarea name="description"></textarea>
    <label for="price">Precio (en centavos)</label>
    <input type="number" name="price">
    <label for="stock">Stock (unidades)</label>
    <input type="number" name="stock">
    <label for="category">Categoria</label>
    <select name="category">
    {foreach $categories as $category}
        <option value="{$category->id}">{$category->type} - {$category->brand}</option>
    {/foreach}
    </select>
    {* <input type="number" name="category"> *}
    <input type="submit">
</form>
<hr>
{include file="app/web/template/categories_table.tpl"}
<hr>
<h2>Agregar Categoria</h2>
<form action="admin/post_category" method="post">
    <label for="type">Tipo</label>
    <input type="text" name="type">
    <label for="brand">Marca</label>
    <input type="text" name="brand">
    <input type="submit">
</form>
{include file="app/web/template/footer.tpl"}
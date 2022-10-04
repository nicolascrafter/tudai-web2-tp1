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
    <input type="number" name="category">
    <input type="submit">
</form>
{include file="app/web/template/footer.tpl"}
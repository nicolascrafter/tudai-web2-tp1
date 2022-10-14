{include file="app/web/template/header.tpl" title="Categories List"}
{include file="app/web/template/categories_table.tpl"}
{if admin}
    <hr>
    <h2>Agregar Categoria</h2>
    <form action="categories/post" method="post">
        <label for="post_type">Tipo</label>
        <input type="text" name="type" id="post_type" maxlength="100" required>
        <label for="post_brand">Marca</label>
        <input type="text" name="brand" id="post_brand" maxlength="100" required>
        <input type="submit">
    </form>
{/if}
{include file="app/web/template/footer.tpl"}
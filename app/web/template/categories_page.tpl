{include file="app/web/template/header.tpl" title="Categories List"}
{include file="app/web/template/categories_table.tpl"}
<hr>
{if admin}
    <h2>Agregar Categoria</h2>
    <form action="categories/post" method="post">
        <label for="type">Tipo</label>
        <input type="text" name="type" maxlength="100" required>
        <label for="brand">Marca</label>
        <input type="text" name="brand" maxlength="100" required>
        <input type="submit">
    </form>
{/if}
{include file="app/web/template/footer.tpl"}
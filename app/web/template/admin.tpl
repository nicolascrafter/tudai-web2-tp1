{include file="app/web/template/header.tpl"}
<h3>Productos</h3>
{include file="app/web/template/products_table.tpl" show_id=true}
<h3>Categorias</h3>
{include file="app/web/template/categories_table.tpl" show_id=true}
<h2>Agregar Producto</h2>
<form action="admin/post_product", method="post">
    <div class="row">
        <div class="col-9">
            <div class="form-control">
                <label for="name">Nombre</label>
                <input class="form-control" type="text" maxlength="200" name="name" required>
            </div>
            <div class="form-control">
                <label for="name">Descripcion</label>
                <input class="form-control" type="text" maxlength="200" name="descripcion" required>
            </div>
            <div class="form-control">
                <label for="price">Precio</label>
                <input class="form-control" type="number" name="price" min="0" max="99999999.99" step="0.01" value="0" required>
            </div>
            <div class="form-control">
                <label for="stock">Stock (unidades)</label>
                <input type="number" name="stock" min="0" max="999999999" step="1" value="0" required>
            </div>
            <div class="form-control">
                <label for="category">Categoria</label>
                <select class="form-select" name="category" required>
                    {foreach $categories as $category}
                        <option value="{$category->id}">{$category->type} - {$category->brand}</option>
                    {/foreach}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>
    </div>
</form>
<h2>Agregar Categoria</h2>
<form action="admin/post_category" method="post">
    <div class="row">
        <div class="col-9">
            <div class="form-control">
                <label for="type">Tipo</label>
                <input class="form-control" type="text" name="type" maxlength="100" required>
            </div>
            <div class="form-control">
                <label for="brand">Marca</label>
                <input class="form-control" type="text" name="brand" maxlength="100" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
        </div>
    </div>
</form>
{include file="app/web/template/footer.tpl"}
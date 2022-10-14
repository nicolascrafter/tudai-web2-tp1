<table class="table table-striped">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Marca</th>
            {if $admin}
                <th>Acciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {if count($categories) > 0}
            {foreach $categories as $category}
                <tr>
                    <td>{$category->type}</td>
                    <td>{$category->brand}</td>
                    {if $admin}
                        <td>
                            <form action="categories/delete" method="post">
                                <input type="hidden" name="id" value="{$category->id}">
                                <input type="submit" {if !$category->can_delete}disabled title="No se puede borrar una categoria que tenga al menos un producto"{/if}value="Borrar Categoria">
                            </form>
                            <button type="button" class="modify-button">Modificar Categoria</button>
                            <dialog>
                                    <form action="categories/modify" method="post">
                                        <input type="hidden" name="id" value="{$category->id}">
                                        <label for="modify_type">Tipo</label>
                                        <input type="text" name="type" id="modify_type" value="{$category->type}">
                                        <label for="modify_brand">Marca</label>
                                        <input type="text" name="brand" id="modify_brand" value="{$category->brand}">
                                        <input type="submit">
                                    </form>
                            </dialog>
                        </td>
                    {/if}
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>
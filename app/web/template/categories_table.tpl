<table>
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
                            <form action="admin/delete_product" method="post">
                                <input type="hidden" name="id" value="{$category->id}">
                                <input type="submit" disabled value="Borrar Categoria">
                            </form>
                        </td>
                    {/if}
                </tr>
            {/foreach}
        {/if}
    </tbody>
</table>
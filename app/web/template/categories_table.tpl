<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Tipo</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
    {if count($categories) > 0}
        {foreach $categories as $category}
            <tr>
                <td>{$category->id}</td>
                <td>{$category->type}</td>
                <td>{$category->brand}</td>
            </tr>
        {/foreach}
    {/if}
    </tbody>
</table>
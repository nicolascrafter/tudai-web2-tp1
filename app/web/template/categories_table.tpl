<table class="table table-striped">
    <thead>
        <tr>
    <!-- {if $show_id}
            <th>id</th>
        {/if} Arroja error en templates_c-->
            <th>Tipo</th>
            <th>Marca</th>
        </tr>
    </thead>
    <tbody>
    {if count($categories) > 0}
        {foreach $categories as $category}
            <tr>
            <!--{if $show_id}
                <td>{$category->id}</td>
            {/if} Arroja error en templates_c-->
                <td>{$category->type}</td>
                <td>{$category->brand}</td>
            </tr>
        {/foreach}
    {/if}
    </tbody>
</table>
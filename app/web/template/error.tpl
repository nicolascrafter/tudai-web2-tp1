{if $error_code == 400}
    {include file="app/web/template/header.tpl" title="400: Bad Request"}
    <h1>400: Bad Request</h1>
    <p>400: Peticion Invalida</p>
{elseif $error_code == 403}
    {include file="app/web/template/header.tpl" title="403: Forbidden"}
    <h1>403: Forbidden</h1>
    <p>403: No tiene permiso para acceder a {$error_params[0]}</p>
{elseif $error_code == 404}
    {include file="app/web/template/header.tpl" title="404: Not Found"}
    <h1>404: Not Found</h1>
    <p>404 - La pagina {$error_params[0]} no existe</p>
{else}
    {include file="app/web/template/header.tpl" title="Unknown Error"}
    <h1>Unknown Error</h1>
    <p>Error desconocido</p>
{/if}
{include file="app/web/template/footer.tpl"}
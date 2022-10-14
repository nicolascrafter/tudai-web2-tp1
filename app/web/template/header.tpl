<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{$BASE_URL}">
    <link rel="stylesheet" href="app/web/css/style.css">
    <script src="app/web/js/modal_dialogs.js"></script>
    <title>{$title}</title>
</head>

<body>
    <header>
        <nav>
            <a href="categories">Categorias</a>
            <a href="products">Productos</a>
            {if !$admin}
                <a href="login">Login</a>
            {else}
                <a href="logout">Logout</a>
            {/if}
        </nav>
            {if $admin}
                {if isset($smarty.session.USER_EMAIL)}
                    Bievenido {$smarty.session.USER_EMAIL}
                {/if}
            {/if}
</header>
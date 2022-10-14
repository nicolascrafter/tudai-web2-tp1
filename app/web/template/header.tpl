<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="app/web/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" >TUDAI Web 2 - TP1</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex">
                   <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index">Home</a>
                  </li>
                  {if !isset($smarty.session.USER_ID)}
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                  {else} 
                    <li class="nav-item ml-auto">
                         <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
                    </li>
                  {/if}
                </ul>
              </div>
            </div>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ejercicio8.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a4f65283d7.js" crossorigin="anonymous"></script>
    <title>Santos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tpe1/home">Santoral</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/tpe1/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tpe1/congregaciones">Congregaciones</a>
                    </li>
                    {if {$smarty.session.nombre} == 1}
                        <li class="nav-item">
                            <a class="nav-link">ADMIN</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href="/tpe1/login">Login</a>
                        </li>                        
                    {/if}
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <h1 class="text-center py-4">{$titulo}</h1>
<hr class="border border-dark border-2 opacity-50">
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

    <div class="container">
        <div class="row justify-content-center py-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <form action="verificarLogin" method="post">
                        <div class="mb-3">
                            <label for="InputEmail1" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" name="nombre" id="InputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                        </div>
                        <div class="text-center py-3">
                            <button type="submit" class="btn btn-primary">INGRESAR</button>
                        </div>
                    </form>
                </div>
                <div class="text-center pb-3">
                    <a href="/tpe1/registrarse" data-bs-toggle="modal" data-bs-target="#registroModal">
                        Registrarse
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="registrarse" method="post">
                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" name="nombre" id="InputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                            </div>
                            <div class="text-center py-3">
                                <button type="submit" class="btn btn-primary">REGISTRARSE</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

{include file="footer.tpl"}
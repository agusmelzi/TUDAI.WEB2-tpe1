{include file="header.tpl"}

<div class="row justify-content-center py-3">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <form action="/tpe1/verificarLogin" method="post">
                <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" name="nombre" id="InputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1"
                        aria-describedby="verifyPass">
                    <div id="verifyPass" class="form-text text-danger">{$message}</div>
                </div>
                <div class="text-center py-3">
                    <button type="submit" class="btn btn-primary">INGRESAR</button>
                </div>
            </form>
        </div>
        <div class="text-center pb-3">
            <a href="/tpe1/nuevoUsuario">
                Registrarse
            </a>
        </div>
    </div>
</div>
</div>

{include file="footer.tpl"}
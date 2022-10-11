{include file="header.tpl"}

<form action="/tpe1/registrarse" method="post">
    <div class="mb-3">
        <label for="InputEmail1" class="form-label">Nombre de usuario</label>
        <input type="text" class="form-control" name="nombre" id="InputEmail1" aria-describedby="verify">
        <div id="verify" class="form-text text-danger">{$message}</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
    </div>
    <div class="text-center py-3">
        <button type="submit" class="btn btn-primary">REGISTRARSE</button>
    </div>
</form>

{include file="footer.tpl"}
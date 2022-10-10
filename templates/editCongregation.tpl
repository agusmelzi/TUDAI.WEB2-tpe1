{include file="header.tpl"}

<div class="py-4">
    <a href="/tpe1/congregaciones">
        <button type="button" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-angle-left"></i> Volver
        </button>
    </a>
</div>

<div class="container py-4 px-5">

    <form action="/tpe1/updateCongregation" method="post">
        <div class="mb-3">
            <input type="hidden" name="id" value="{$congregacion['id']}" required>
        </div>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="nombre" value="{$congregacion['nombre']}"
                required>
        </div>
        <div class="mb-3">
            <label for="inputFundador" class="form-label">Fundador</label>
            <input type="text" class="form-control" id="inputFundador" name="fundador"
                value="{$congregacion['fundador']}" required>
        </div>
        <div class="mb-3">
            <label for="inputLema" class="form-label">Lema</label>
            <input type="text" class="form-control" id="inputLema" name="lema" value="{$congregacion['lema']}"
                required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">EDITAR</button>
        </div>
    </form>

</div>

{include file="footer.tpl"}
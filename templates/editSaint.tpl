{include file="header.tpl"}

<div class="py-4">
    <a href="/tpe1/home">
        <button type="button" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-angle-left"></i> Volver
        </button>
    </a>
</div>

<form action="/tpe1/update" method="post" enctype="multipart/form-data">
    <div class="mb-3 fs-5">
        <input type="hidden" name="id" value="{$santo['id']}">
    </div>
    <div class="mb-3 fs-5">
        <label for="inputNombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="inputNombre" name="nombre" value="{$santo['nombre']}" required>
    </div>
    <div class="mb-3 fs-5">
        <label for="inputPais" class="form-label">País</label>
        <input type="text" class="form-control" id="inputPais" name="pais" value="{$santo['pais']}" required>
    </div>
    <div class="mb-3 fs-5">
        <label for="inputNacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="inputNacimiento" name="fecha_nacimiento"
            value="{$santo['fecha_nacimiento']}" required>
    </div>
    <div class="mb-3 fs-5">
        <label for="inputMuerte" class="form-label">Fecha de muerte</label>
        <input type="date" class="form-control" id="inputMuerte" name="fecha_muerte" value="{$santo['fecha_muerte']}"
            required>
    </div>
    <div class="mb-3 fs-5">
        <label for="inputCanonizacion" class="form-label">Fecha de canonización</label>
        <input type="date" class="form-control" id="inputCanonizacion" name="fecha_canonizacion"
            value="{$santo['fecha_canonizacion']}" required>
    </div>
    <div class="mb-3 fs-5">
        <label for="inputCongregacion" class="form-label">Congregación</label>

        <select id="inputCongregacion" class="form-select" name="congregacion_fk">
            {foreach from=$congregaciones item=congregacion}
                <option value="{$congregacion['id']}">{$congregacion['nombre']}</option>
            {/foreach}
        </select>
    </div>
    <div class="input-group my-5">
        <label class="input-group-text fs-5 fw-bold" for="inputFoto">Foto</label>
        <input type="file" class="form-control" id="inputFoto" name="imagen">
    </div>
    <div class="text-center">
    <button type=" submit" class="btn btn-primary mb-5 fs-4">Editar</button>
    </div>
</form>


</div>

{include file="footer.tpl"}
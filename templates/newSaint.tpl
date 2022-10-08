{include file="header.tpl"}

<div class="container py-4 px-5">

    <form action="/tpe1/new" method="post">
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputNombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="inputPais" class="form-label">País</label>
            <input type="text" class="form-control" id="inputPais" name="pais" required>
        </div>
        <div class="mb-3">
            <label for="inputNacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="inputNacimiento" name="fecha_nacimiento" required>
        </div>
        <div class="mb-3">
            <label for="inputMuerte" class="form-label">Fecha de muerte</label>
            <input type="date" class="form-control" id="inputMuerte" name="fecha_muerte" required>
        </div>
        <div class="mb-3">
            <label for="inputCanonizacion" class="form-label">Fecha de canonización</label>
            <input type="date" class="form-control" id="inputCanonizacion" name="fecha_canonizacion" required>
        </div>
        <div class="mb-3">
            <label for="inputCongregacion" class="form-label">Congregación</label>

            <select id="inputCongregacion" class="form-select" name="congregacion_fk">
                {foreach from=$congregaciones item=congregacion}
                    <option value="{$congregacion['id']}">{$congregacion['nombre']}</option>
                {/foreach}

            </select>
        </div>

        <button type=" submit" class="btn btn-primary">Submit</button>
    </form>


</div>

{include file="footer.tpl"}
{include file="header.tpl"}

<table class="table table-hover mx-5 fs-3">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        {if !empty($santos)}
            {foreach from=$santos item=santo}
                <tr>
                    <td>
                        <a href="detalle/{$santo['id']}" class="link-dark">
                            {$santo['nombre']}
                        </a>
                    </td>

                    <td>
                        <a href="edit/{$santo['id']}">
                            <button type="button" class="btn btn-link btn-lg" data-bs-toggle="modal"
                                data-bs-target="#borrarCongregacion">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="borrar/{$santo['id']}">
                            <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal"
                                data-bs-target="#borrarCongregacion">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            {/foreach}
        {else}
            <tr>
                <td>
                    <p>{$message}</p>
                </td>
                <td>
                <a href="/tpe1">Mostrar todos</a>
                </td>
            </tr>
        {/if}

    </tbody>
</table>

<div class="text-center">
    <a href="/tpe1/agregar">
        <button type="button" class="btn btn-danger btn-lg">
            AGREGAR <i class="fa-solid fa-person-praying"></i>
        </button>
    </a>
</div>

<form action="/tpe1/santosXCategoria" method="post">
    <div class="mb-3">
        <label for="inputCongregacion" class="form-label">Buscar santo por congregacion</label>

        <select id="inputCongregacion" class="form-select" name="congregacion_fk">
            {foreach from=$congregaciones item=congregacion}
                <option value="{$congregacion['id']}">{$congregacion['nombre']}</option>
            {/foreach}
        </select>

        <div class="py-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
</div>

{include file="footer.tpl"}
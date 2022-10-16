{include file="header.tpl"}

<table class="table table-hover fs-4">
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
                    {if {$smarty.session.nombre} == 1}
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
                    {/if}
                </tr>
            {/foreach}
        {else}
            <tr>
                <td>
                    <p>{$message}</p>
                </td>
            </tr>
        {/if}
        <tr>
            <td class="text-center py-3">
                <a class="fs-5" href="/tpe1">Mostrar todos</a>
            </td>

        </tr>

    </tbody>
</table>
{if {$smarty.session.nombre} == 1}
    <div class="text-center">
        <a href="/tpe1/agregar">
            <button type="button" class="btn btn-danger btn-lg">
                AGREGAR <i class="fa-solid fa-person-praying"></i>
            </button>
        </a>
    </div>
{/if}
<div class="py-5">
    <form action="/tpe1/santosXCategoria" method="post">
        <div class="mb-3">
            <div class="text-center">
                <label for="inputCongregacion" class="form-label fs-4 fw-bold">Buscar santo por congregacion</label>
            </div>
            <select id="inputCongregacion" class="form-select fs-5" name="congregacion_fk">
                {foreach from=$congregaciones item=congregacion}
                    <option value="{$congregacion['id']}" class="text-center fs-5">{$congregacion['nombre']}</option>
                {/foreach}
            </select>

            <div class="py-3 text-center">
                <button type="submit" class="btn btn-primary fs-5">Buscar</button>
            </div>
        </div>
    </form>
</div>
</div>

{include file="footer.tpl"}
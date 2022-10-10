{include file="header.tpl"}

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">País</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Fecha de muerte</th>
            <th scope="col">Fecha de canonización</th>
            <th scope="col">Congregación</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$santos item=santo}
            <tr>
                <td>{$santo['nombre']}</td>
                <td>{$santo['pais']}</td>
                <td>{$santo['fecha_nacimiento']}</td>
                <td>{$santo['fecha_muerte']}</td>
                <td>{$santo['fecha_canonizacion']}</td>
                <td>{$santo['congregacion_fk']}</td>
                <td>
                    <a href="edit/{$santo['id']}">
                        <button type="button" class="btn btn-link" data-bs-toggle="modal"
                            data-bs-target="#borrarCongregacion">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <a href="borrar/{$santo['id']}">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#borrarCongregacion">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </a>
                </td>
            </tr>
        {/foreach}
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
        <label for="inputCategoria" class="form-label">Buscar santo por congregacion</label>
        <input type="number" class="form-control" id="inputCategoria" name="categoria">
        <div class="py-3">
        <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
</div>

{include file="footer.tpl"}
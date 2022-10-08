{include file="header.tpl"}

<div class="container py-4">
    <h1 class="text-center py-4">{$titulo}</h1>
    <hr class="border border-dark border-2 opacity-50">

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
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#borrarCongregacion">
                        <a href="edit/{$santo['id']}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#borrarCongregacion">
                        <a href="borrar/{$santo['id']}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </button>
                </td>
            </tr>
            {/foreach}
            </tbody>
    </table>
    <div class="text-center">
        <button type="button" class="btn btn-danger">
            <a href="/tpe1/agregar"> <!--cambio acá-->
                AGREGAR <i class="fa-solid fa-user-plus"></i>
            </a>
        </button>
    </div>

    <form action="/tpe1/santosXCategoria" method="post">
        <div class="mb-3">
            <label for="inputCategoria" class="form-label">Buscar santo por congregacion</label>
            <input type="number" class="form-control" id="inputCategoria" name="categoria">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}
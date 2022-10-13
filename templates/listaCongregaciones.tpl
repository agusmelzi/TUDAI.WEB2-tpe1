{include file="header.tpl"}

<div class="py-4">
    <a href="/tpe1/home">
        <button type="button" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-angle-left"></i> Volver
        </button>
    </a>
</div>

{if (empty($congregaciones))}
    <p>No hay congregaciones cargadas</p>

{else}
    <form>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fundador</th>
                    <th scope="col">Lema</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$congregaciones item=congregacion}
                    <tr>
                        <td>{$congregacion['nombre']}</td>
                        <td>{$congregacion['fundador']}</td>
                        <td>{$congregacion['lema']}</td>
                        {if {$smarty.session.nombre} == 1}
                            <td>
                                <a href="/tpe1/editarCongregacion/{$congregacion['id']}">
                                    <button type="button" class="btn btn-link">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#borrarCongregacion">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        {/if}
                    </tr>
                {/foreach}

                <div class="modal fade" id="borrarCongregacion" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{$borrarCongregacion}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                También se eliminarán los santos asociados a esta congregacion, ¿desea continuar?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <a href="borrarCongregacion/'.$congregacion['id'].'">
                                    <button type="button" class="btn btn-danger">Continuar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                {/if}
        </tbody>
    </table>
</form>
<div>
    {if {$smarty.session.nombre} == 1}
        <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#nuevaCongregacion">
                Agregar <i class="fa-solid fa-church"></i>
            </button>
        </div>
    {/if}
    <div class="modal fade" id="nuevaCongregacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{$tituloNew}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="agregarCongregacion" method="post">
                        <div class="mb-3">
                            <label for="inputNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputFundador" class="form-label">Fundador</label>
                            <input type="text" class="form-control" id="inputFundador" name="fundador" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputLema" class="form-label">Lema</label>
                            <input type="text" class="form-control" id="inputLema" name="lema" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

{include file="footer.tpl"}
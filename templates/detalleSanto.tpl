{include file="header.tpl"}

<div class="py-4">
    <a href="/tpe1/home">
        <button type="button" class="btn btn-secondary btn-sm">
            <i class="fa-solid fa-angle-left"></i> Volver
        </button>
    </a>
</div>

<div class="card" style="width: auto;">
    <div class="card-body">
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
                <tr>
                    <td>{$santo['nombre']}</td>
                    <td>{$santo['pais']}</td>
                    <td>{$santo['fecha_nacimiento']}</td>
                    <td>{$santo['fecha_muerte']}</td>
                    <td>{$santo['fecha_canonizacion']}</td>
                    <td>{$congregacion['nombre']}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
{if {$santo['foto']} != null}
    
    <div class="text-center my-4">
        
            <img src='../{$santo['foto']}' alt="{$santo['nombre']}" class="rounded mx-auto d-block" style="width: 42rem;"/>
        
    </div>
{/if}

</div>
{include file="footer.tpl"}
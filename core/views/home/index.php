<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">¡Bienvenido al Insurance Tech de Grupo Nobe!</h4>
    <p>Desde su panel de control podrá ver la infomación necesaria manejar sus pólizas y cotizaciones.</p>
</div>

<div class="card-deck">

    <div class="card">
        <div class="card-header text-white bg-primary">
            <h1><?= $resultado["total"] ?></h1>
            <br>
            <h5>Cotizaciones <br> Totales</h5>
        </div>
        <div class="card-body">
            <a href="<?= constant('buscar_cotizaciones') ?>" class="card-link">Ver más</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-white bg-success">
            <h1><?= $resultado["pendientes"] ?></h1>
            <br>
            <h5>Cotizaciones <br> al Mes</h5>
        </div>
        <div class="card-body">
            <a href="<?= constant('cotizaciones_pendientes') ?>" class="card-link">Ver más</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-white bg-info">
            <h1><?= $resultado["emisiones"] ?></h1>
            <br>
            <h5>Emisiones <br> al Mes</h5>
        </div>
        <div class="card-body">
            <a href="<?= constant('emisiones_mensuales') ?>" class="card-link">Ver más</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-white bg-warning">
            <h1><?= $resultado["vencimientos"] ?></h1>
            <br>
            <h5>Vencimientos <br> al Mes</h5>
        </div>
        <div class="card-body">
            <a href="<?= constant('vencimientos_mensuales') ?>" class="card-link">Ver más</a>
        </div>
    </div>

</div>

<br>

<div class="card">
    <h5 class="card-header">Póliza emitidas este mes</h5>
    <div class="card-body">
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th scope="col">Aseguradoras</th>
                    <th scope="col">Cantidad de Pólizas</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($aseguradoras)) : ?>

                    <?php foreach ($aseguradoras as $nombre => $cantidad_polizas) : ?>
                        <tr>
                            <th scope="row"><?= $nombre ?></th>
                            <td><?= $cantidad_polizas ?></td>
                        </tr>
                    <?php endforeach ?>

                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>
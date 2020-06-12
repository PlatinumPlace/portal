<h2 class="text-uppercase text-center">
    Reporte de cotizaciones
</h2>

<?php if (!empty($alerta)) : ?>
    <div class="alert alert-primary" role="alert">
        <?= $alerta ?>
    </div>
<?php endif ?>

<div class="card">
    <div class="card-body">
        <form method="POST" action="<?= constant("url") ?>cotizaciones/exportar">

            <h5>Reporte</h5>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Tipo</label>
                    <select name="tipo_reporte" class="form-control">
                        <option value="cotizaciones" selected>Cotizaciones</option>
                        <option value="emisiones">Emisiones</option>
                        <option value="comisiones">Comisiones</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Para</label>
                    <select name="tipo_cotizacion" class="form-control">
                        <option value="auto" selected>Auto</option>
                    </select>
                </div>
            </div>

            <br>

            <h5>Fecha</h5>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Desde</label>
                    <input type="date" class="form-control" name="desde" required>
                </div>

                <div class="form-group col-md-6">
                    <label class="font-weight-bold">Hasta</label>
                    <input type="date" class="form-control" name="hasta" required>
                </div>
            </div>

            <br>

            <h5>Aseguradora</h5>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select name="aseguradora_id" class="form-control">
                        <option value="" selected>Todas</option>
                        <?php
                        if (!empty($aseguradoras)) {
                            foreach ($aseguradoras as $id => $nombre) {
                                echo '<option value="' . $id . '">' . $nombre . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <br>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" name="csv" class="btn btn-primary">Exportar a CSV</button>
                    |
                    <button type="submit" name="pdf" class="btn btn-success">Exportar a PDF</button>
                </div>
            </div>

        </form>
    </div>
</div>
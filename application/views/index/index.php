<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("application/views/index/include/head.html"); ?>
        <title>Examen</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- panel izquiero -->
                <div class="row" >
                    <div class="well">
                        <?php include("application/views/index/include/panel_izq.html"); ?>
                    </div>
                </div>
                <!--fin panel izquierdo -->

                <!-- panel principal -->
                <div class="col-md-12">
                    <?php include("application/views/index/include/panel_central.html"); ?>
                </div>
                <!-- fin panel principal -->

                <!-- panel derecho -->
               
                <!-- fin panel derecho -->
            </div>
        </div>
        <!-- area descripciones -->
        <?php include("application/views/index/include/descripciones.html"); ?>
        <!-- fin area descripciones -->
    </body>
</html>
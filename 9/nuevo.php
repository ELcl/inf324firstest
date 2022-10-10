<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-4">
                            <label for="ci" class="form-label">CI</label>
                            <input type="number" id="ci" name="ci" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-8">
                            <label for="nombre_completo" class="form-label">Nombre Completo</label>
                            <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-8">
                            <label for="departamento" class="form-label">Departamento</label>
                            <!-- <input type="text" id="departamento" name="departamento" class="form-control" required> -->
                            <select class="form-control" name="departamento" required>
                                <option value="LP">La Paz</option>
                                <option value="SC">Santa Cruz</option>
                                <option value="CB">Cochabamba</option>
                                <option value="OR">Oruro</option>
                                <option value="PT">Potosi</option>
                                <option value="TJ">Tarija</option>
                                <option value="CH">Chuquisaca</option>
                                <option value="BN">Beni</option>
                                <option value="PD">Pando</option>
                            </select>
                        </div>


                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
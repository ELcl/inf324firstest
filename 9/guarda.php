<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    var_dump($_POST['ci']);
     $ci = $_POST['ci'];
    $departamento = $_POST['departamento'];
    $fecha_nac = $_POST['fecha_nac'];
    $nombre_completo = $_POST['nombre_completo'];
    /*$inventariable = isset($_POST['inventariable']) ? $_POST['inventariable'] : 0;*/

    /*if ($stock == '') {
        $stock = 0;
    }*/

    $query = $con->prepare("UPDATE persona SET ci=?, departamento=?, fecha_nac=?, nombre_completo=? WHERE ci=?");
    $resultado = $query->execute(array($ci, $departamento, $fecha_nac, $nombre_completo, $ci));

    if ($resultado) {
        $correcto = true;
    }
} else {
    //var_dump($_POST['ci']);
    $ci = $_POST['ci'];
    $departamento = $_POST['departamento'];
    $fecha_nac = $_POST['fecha_nac'];
    $nombre_completo = $_POST['nombre_completo'];
/*    $inventariable = isset($_POST['inventariable']) ? $_POST['inventariable'] : 0;
*/
    /*if ($stock == '') {
        $stock = 0;
    }*/

    $query = $con->prepare("INSERT INTO persona (ci, departamento, fecha_nac, nombre_completo) VALUES (:ci, :departamento, :fecha_nac, :nombre_completo)");
    $resultado = $query->execute(array('ci' => $ci, 'departamento' => $departamento, 'nombre_completo' => $nombre_completo, 'fecha_nac' => $fecha_nac));

    if ($resultado) {
        $correcto = true;
/*        echo $con->lastInsertId();
*/    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();
#var_dump($_GET['id']);
$id = $_GET['id'];

/*$activo = 1;
*/
$query = $con->prepare("SELECT ci, departamento, fecha_nac, nombre_completo FROM persona WHERE ci = :id");

/*$query = $con->prepare("INSERT INTO persona (ci, departamento, fecha_nac, nombre_completo) VALUES (:ci, :departamento, :fecha_nac, :nombre_completo)");*/
#$query->execute(['id' => $id, 'activo' => $activo]);
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Editar</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-4">
                            <label for="ci" class="form-label">CI</label>
                            <input type="number" id="ci" value="<?php echo $id; ?>" name="ci" class="form-control"  required autofocus>
                        </div>

                        <div class="col-md-8">
                            <label for="nombre_completo" class="form-label">Nombre Completo</label>
                            <input type="text" id="nombre_completo" value="<?php echo $row['nombre_completo']; ?>" name="nombre_completo" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required autofocus value="<?php echo $row['fecha_nac']; ?>">
                        </div>

                        <div class="col-md-8">
                            <label for="departamento" class="form-label">Departamento</label>
                            <?php 
                                $dp=$row['departamento'];
                             ?>
                            <select class="form-control" name="departamento" required>
                                <option value="LP"
                                    <?php 
                                        if ($dp == 'LP')
                                            echo("selected");            
                                    ?>
                                >    
                                La Paz</option>
                                <option value="SC"
                                    <?php 
                                        if ($dp == 'SC')
                                            echo("selected");            
                                    ?>
                                >Santa Cruz</option>
                                <option value="CB"
                                    <?php 
                                        if ($dp == 'CB')
                                            echo("selected");            
                                    ?>
                                >
                                Cochabamba</option>
                                <option value="OR"
                                    <?php 
                                        if ($dp == 'OR')
                                            echo("selected");            
                                    ?>
                                >
                                Oruro</option>
                                <option value="PT"
                                    <?php 
                                        if ($dp == 'PT')
                                            echo("selected");            
                                    ?>
                                >
                                Potosi</option>
                                <option value="TJ"
                                    <?php 
                                        if ($dp == 'TJ')
                                            echo("selected");            
                                    ?>
                                >
                                Tarija</option>
                                <option value="CH"
                                    <?php 
                                        if ($dp == 'CH')
                                            echo("selected");            
                                    ?>
                                >
                                Chuquisaca</option>
                                <option value="BN"
                                    <?php 
                                        if ($dp == 'BN')
                                            echo("selected");            
                                    ?>
                                >
                                Beni</option>
                                <option value="PD"
                                    <?php 
                                        if ($dp == 'PD')
                                            echo("selected");            
                                    ?>
                                >
                                Pando</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
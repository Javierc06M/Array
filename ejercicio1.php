<?php

    $empleado1 = ['nombre' => 'Pedro',
                  'h_trabajados' => 20];
    $empleado2 = ['nombre' => 'Carlos',
                  'h_trabajados' => 30];

    $precio_hora = 10;
    $empleados = [$empleado1, $empleado2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="h1 text-center">PAGOS DE EMPLEADOS</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Horas Trabajadas</th>
                    <th>Pago</th>
                </tr>
            </thead>
            <tbody> 
                <?php foreach($empleados as $empleado):?>
                    <tr>
                        <td><?php echo $empleado['nombre'];?></td>
                        <td><?php echo $empleado['h_trabajados'];?></td>
                        <td><?php echo $precio_hora * $empleado['h_trabajados'];?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js.map"></script>
</body>
</html>
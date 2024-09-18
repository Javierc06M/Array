<?php

    $clientes = [];
    $clientes1 = ['nombre' => 'Javier',
                  'apellido' => 'Garcia',
                  'telefono' => '1234567890'];
    $clientes2 = ['nombre' => 'Maria',
                  'apellido' => 'Lopez',
                  'telefono' => '9876543210'];

    $clientes = $clientes1;
    $clientes = $clientes2;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
        <?php foreach($clientes as $clientes):?>
            <tr>
                <td><?php echo $clientes['nombre'];?></td>
                <td><?php echo $clientes['apellido'];?></td>
                <td><?php echo $clientes['telefono'];?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <a href="ejercicio1.php">Volver al formulario</a>

</body>
</html>
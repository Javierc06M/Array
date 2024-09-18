<?php 

    $cliente1 = ['Nombre' => 'Javier',
                 'Apellido' => 'Garcia',
                 'Telefono' => '1234567890'];
    $cliente2 = ['Nombre' => 'Maria',
                 'Apellido' => 'Lopez',
                 'Telefono' => '9876543210'];
    $cliente3 = ['Nombre' => 'John',
                 'Apellido' => 'Doe',
                 'Telefono' => '0987654321'];

    $clientes = [$cliente1, $cliente2];

    $clientes[] = $cliente3;

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multi</title>
    <style>
        table {
            width: 50%;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {background-color: #ddd;}
        h1 {
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
        }
        th, td {
            font-size: 18px;
        }
        table {
            margin: 0 auto;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #fff;
        }
        tr:nth-child(even):hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>LISTA DE CLIENTES</h1>
    <table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clientes as $cliente):?>
        <tr>
            <td><?php echo $cliente['Nombre'];?></td>
            <td><?php echo $cliente['Apellido'];?></td>
            <td><?php echo $cliente['Telefono'];?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
    </table>
</body>
</html>
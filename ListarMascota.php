<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align: center; 
        }
    </style>
</head>
<body>
<div class="contenedor">    
        <nav>
            <ul>
                <li><a>HOME</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="agregarMascota.php">Agregar Mascota</a></li>
                <li><a href="#">Listar Mascotas</a></li>
            </ul>
        </nav>
    </div>
    <div class="Listar">
<table border="1" class= "table table-striped ">   
    <thead class="bg-primary text-white">
        <tr>
        <th>IdMascota</th>
        <th>Mascota</th>
        <th>Agregar</th>
        <th>Editar</th>
        </tr>
    </thead>
    <?php
        include_once "MascotaModel.php";
        $Mascota = new Mascota();
        $ListaMascota = $Mascota->ListarMascotas();
        while($Mascota = mysqli_fetch_assoc($ListaMascota))
        {?>
          <tr>
                <td>  <?php echo $Mascota['idMascota'] ?> </td>
                <td>  <?php echo $Mascota['nombreMascota'] ?> </td>
                <td><a href="AgregarVacuna.php?idMas=<?php echo $Mascota['idMascota'];?>"><img src="agregar.png"></a></td>
                <td><a href="EditarMascota.php?idMas=<?php echo $Mascota['idMascota'];?>"><img src="editar.png"></a></td>
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>
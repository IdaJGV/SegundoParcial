<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>VistaEditarEstudiante</title>
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
    <div class="editar">
    <form action="MascotaController.php" method="POST">
                        <?php
                            include_once "MascotaModel.php";
                            $nuevaMascota = new Mascota();
                            $resultado = $nuevaMascota->FiltrarMascota($_GET['idMas']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtidMascota"></label>
                                <input type="text" name="txtidMascota" 
                                value="<?php echo $resultadoFiltrado['idMascota']?>">
                                </p>

                                <p>
                                <label for="txtnombreMascota"></label>
                                <input type="text" name="txtnombreMascota" 
                                value="<?php echo $resultadoFiltrado['nombreMascota']?>">
                                </p>
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Editar " name="btnEditar">            
    </form>
    </div>
</body>
</html>
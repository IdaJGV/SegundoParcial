<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
    <div class="contenedor">    
        <nav>
            <ul>
                <li><a>HOME</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Agregar Mascota</a></li>
                <li><a href="ListarMascota.php">Listar Mascotas</a></li>
            </ul>
        </nav>
    </div>

    <div class="formulario">
        <form action="MascotaController.php" method="post" class="mt-3">
        
        <div class="row mb-4" >
            <label class="col-2 col-form-label" for="nombreMascota">Nombre de Mascota:</label> 
            <div class="col-10">
                <input type="text" name="nombreMascota" class="form-control">
            </div>       
         </div>
        
        <p>
            <input type="submit" value="Guardar Registro" name= "btnAceptar" class="btn btn-primary">
        </p>
    </form>
    </div>
</body>
</html>
<?php
include_once "conexion.php";


class Mascota
{
    private $nombreMascota;
    
 

    public function GuardarMascota($nomMascota)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into Mascotas (idMascota, nombreMascota) values (idMascota, '".$_POST['nombreMascota']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       header("Location: agregarMascota.php");
    }

    public function ListarMascotas()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Estudiantes...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarMascota($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from Mascotas where idMascota=$id");
      return $resultado;
    }

    public function EditarMascota($id, $nomMascota)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update Mascotas set nombreMascota="."'".$nomMascota."'"." where idMascota = $id");
    }

}
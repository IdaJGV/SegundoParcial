<?php
include "MascotaModel.php";
$nuevaMascota = new Mascota();

if(isset($_POST['btnAceptar']))
{
    $nuevaMascota->GuardarMascota($_POST['nombreMascota']);
    header('Location: agregarMascota.php');
}
else
if(isset($_POST['btnAgregarVacuna']))
{
    $nuevaMascota->AgregarVacuna($_POST['idMascota'], $_POST['Vacuna']); 
 header('Location: AgregarVacuna.php');
        
}
else
if(isset($_POST['btnEditar']))
{
    $nuevaMascota->EditarMascota($_POST['txtidMascota'],$_POST['txtnombreMascota']); 
 header('Location: ListarMascota.php');
        
}
<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bnalwpxkewof2k8znxdd-mysql.services.clever-cloud.com","utm1lcpnyv376lua","L5kok2PlDK43bAgqVhrI","bnalwpxkewof2k8znxdd");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }
<?php
session_start();
abstract class Conexion {
   //*****************************************************************************
   public function conectar(){
      $mysqli = new mysqli('localhost','root','','Cine',3306);
      
      if ($mysqli->connect_errno)
         header('Location: offline.html');

      $mysqli->set_charset('utf8');
      
      return $mysqli;
   }
   //*****************************************************************************
   public static function ruta() {
      return "http://localhost/cineri/";
   }
   //*****************************************************************************
}
?>
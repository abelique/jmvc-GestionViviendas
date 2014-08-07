<?php
 require 'app/controller/mvc.controller.php';

     //se instancia al controlador 
 $mvc = new mvc_controller();

 if( isset($_GET['action']) && ($_GET['action']) == 'buscar' ) //muestra el modulo del buscador
 {
   $mvc->buscador();
 }
 else if( isset($_GET['action']) && ($_GET['action']) == 'insertar' ) //muestra el modulo "historia de Bolivia"
 {
   $mvc->insertar();
 }
 else if( isset($_POST['cantidad']) )//muestra el buscador y los resultados
 {
   $mvc->buscar( $_POST['cantidad'] );
 }
 else if( isset($_POST['tipo_orden']) && isset($_POST['cantidad']) )
 {
 	$mvc->buscar($_POST['tipo_orden'], $_POST['cantidad']);
 	// $mvc->principal();
 }
 else //Si no existe GET o POST -> muestra la pagina principal
 {
  $mvc->principal();
 }
?>
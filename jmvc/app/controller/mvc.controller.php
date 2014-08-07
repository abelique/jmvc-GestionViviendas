<?php

require 'app/model/universitario.class.php';
require 'app/model/vivienda.class.php';

class mvc_controller {

 
function buscar($cantidad)
{
	$vivienda = new vivienda();
	$pagina = $this->load_template('_Resultado de busqueda_');
	$buscador = $this->load_page('app/views/default/modules/m.buscador.php');
	ob_start();
	$tsArray = $vivienda->viviendas($cantidad);
	if($tsArray != ''){
		$titulo = 'Resultado de la busqueda sin orden ninguno';
			include 'app/views/default/modules/m.table_vivi.php';
		$table = ob_get_clean();
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms',$buscador.$table, $pagina);
	}
	else 
	{		
	  $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $buscador.'<h1>No existen resultados</h1>' ,$pagina);
	}
	$this->view_page($pagina);
}
// METODO PARA ORDENAR POR TIPO O POR ZONA
function ordenar($tipo_orden, $cantidad)
{
	$vivienda = new vivienda();
	$pagina = $this->load_template('Resultados ordenados por' . $tipo_orden);
	$buscador = $this->load_page('app/views/default/modules/m.buscador.php');
	ob_start();
	$tsArray = $vivienda->viviendasOrdenadas($tipo_orden, $cantidad);
	if($tsArray != '')
	{
		$titulo = 'Resultado de la busqueda ordenado por ' . $tipo_orden;
		include 'app/views/default/modules/m.table_vivi.php';
		$table = ob_get_clean();
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$buscador.$table, $pagina);
	}
	else
	{
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms', $buscador.'<h1>No existen resultados</h1>', $pagina);	
	}
	$this->view_page($pagina);
}

 /* METODO QUE MUESTRA LA PAGINA PRINCIPAL CUANDO NO EXISTEN NUEVAS ORDENES
 OUTPUT
 HTML | codigo html de la pagina 
 */
   function principal()
   {
	  $pagina=$this->load_template('Pagina Principal MVC');
	  $html = $this->load_page('app/views/default/modules/m.principal.php');
	  $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
	  $this->view_page($pagina);
   }

 /* METODO QUE MUESTRA LA PAGINA INSERTAR NUEVA VIVIENDA, ES UNA PAGINA ESTATICA
 OUTPUT
 HTML | codigo html de la pagina 
 */
   function insertar()
   {
	  $pagina=$this->load_template('Inserción de vivienda');
	  $html = $this->load_page('app/views/default/modules/m.insertar.php');
	  $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
	  $this->view_page($pagina);
   }
   
 /* METODO QUE CARGA LAS PARTES PRINCIPALES DE LA PAGINA WEB
 INPUT
 $title | titulo en string del header
 OUTPIT
 $pagina | string que contiene toda el cocigo HTML de la plantilla 
 */
 function load_template($title='Sin Titulo'){
  $pagina = $this->load_page('app/views/default/page.php');
  $header = $this->load_page('app/views/default/sections/s.header.php');
  $pagina = $this->replace_content('/\#HEADER\#/ms' ,$header , $pagina);
  $pagina = $this->replace_content('/\#TITLE\#/ms' ,$title , $pagina);
  $menu_left = $this->load_page('app/views/default/sections/s.menuizquierda.php');
  $pagina = $this->replace_content('/\#MENULEFT\#/ms' ,$menu_left , $pagina);
  return $pagina;
 }

 /* METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE BUSQUEDA
 HTML | codigo html de la pagina con el buscador incluido
 */
 function buscador(){
  $pagina=$this->load_template('Busqueda de registros');
  $buscador = $this->load_page('app/views/default/modules/m.buscador.php');
  $pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$buscador , $pagina);
  $this->view_page($pagina);
 }

 /* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
 INPUT
 $page | direccion de la pagina 
 OUTPUT
 STRING | devuelve un string con el codigo html cargado
 */
 private function load_page($page)
 {
  return file_get_contents($page);
 }

 /* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
 INPUT
 $html | codigo html
 OUTPUT
 HTML | codigo html 
 */
 private function view_page($html)
 {
  echo $html;
 }

 /* PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
 INPUT
 $out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
 $pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
 OUTPUT
 HTML | cuando realiza el reemplazo devuelve el codigo completo de la pagina
 */
 private function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina)
 {
   return preg_replace($in, $out, $pagina);
 }

}
?>
<?php
/* Edificios Controller
 * 2017-10-30
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  
  //edificios
  //$data =ArrayAccess(array/edificiso=> obteneredificios('%'.))

  function run(){
$datospersonales = array(
  "nombre"=>"Ordes",
  "correo"=>"Ooo"
);
    addCssRef("public/css/home.css");
    renderizar("edificios/edificios",$datospersonales);
  }

// Desarrollar una pagina llamada New Product BackLog. prdBacklog, creer ruta, controlador
//
  run();
?>

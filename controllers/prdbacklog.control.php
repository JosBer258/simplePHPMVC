<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");

  function run(){
$datospersonales = array(
  "nombre"=>"Ordes",
  "correo"=>"Ooo"
);
    addCssRef("public/css/home.css");
    renderizar("prdbacklog",$datospersonales);
  }

// Desarrollar una pagina llamada New Product BackLog. prdBacklog, creer ruta, controlador 
//
  run();
?>

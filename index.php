<?php 
# Index.php:
# En el mostraremos la salida de las vistas al usuario y tambien a traves
# de él enviaremos las distintas acciones que el usuario envie al controlador
#

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();



    
<?php
namespace JWOBDN;
/*
Plugin Name: Plugin Customizador de Opciones Precor
Plugin URI: 
Description: Este plugin esta hecho con el fin de modificar ciertas opciones en precor
Version: 1.0.0
Author: Maximo Junior Apaza Chirhuana
Author URI:
Framework: Antonella Framework for WP
Framework URI: http://antonellaframework.com
License: GPL2+
Text Domain: Carlos Herrera
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( __('Lo siento por aqui no puedes pasar :)') );

/*
* Class Caller.
* cuando una clase es llamada hace un include
* al archivo con su mismo nombre
* se respeta mayusculas y minusculas
*
* @return null
*/
define('NELLA_URL',__FILE__);
$loader = require __DIR__ . '/vendor/autoload.php';
$antonella= new Start;


?>

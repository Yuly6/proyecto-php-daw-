<?php
/**
 * Script principal de ejecución del sitio web
 * 
 * Este archivo actúa como punto de entrada principal de la aplicación.
 * Configura el entorno, carga las dependencias necesarias e inicializa
 * el sistema de plantillas.
 *
 * @package  DEAW_Project
 * @author   [Yuly Caraballo] <vanehill@gmail.com>
 * @version  v3.1
 * @since    2025-11-03
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/includes/config.php';
require __DIR__ . '/includes/functions.php';

/**
 * Inicia la aplicación cargando la plantilla principal
 * 
 * @return void
 */
init();


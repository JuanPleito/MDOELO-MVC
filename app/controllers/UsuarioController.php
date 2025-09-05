<?php

require_once('app/models/Usuario.php');

class UsuarioController {

    private $bd;

    public function __construct($bd)
    {
     $this->bd=$bd;
        
    }

/**
 * El controlador es el nexo de union entre el modelo y l a vista. de tal manera que sera el encargado de invicoar al modelo para recuperar los datos de la base de datos y enviarselos a la vista para qe se encargue de su visualizacion.
 */


/**
 * Funcion del controlador que muestra el registro de usuario.
 *
 */

public function mostrar_registro(){
    $vista='app/views/usuarios/registro.php';
    require('app/views/layaout.php');
}





}


?>
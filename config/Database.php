<?php

define('HOST','localhost');
define('PORT', '3306');
define('DBNAME','tienda_web');
define ('USER','admin_tienda');
define('PASSWORD','123');



class Database{
    private static $instanciaDB=null;
    private $bd;

    private function __construct()
    {
        $this->bd=new PDO(
            'mysql:'.HOST.':'.PORT.';dbname='.DBNAME,USER,PASSWORD   /// mysql:localhost_3306;dbname=nombrebasededatos. esto es un array de conexion. CADENA DE CONEXION 
        );
    }


    public static function getInstancia(){
        if (self::$instanciaDB===null) {

            self::$instanciaDB = new Database();
            
        }
        return self::$instanciaDB->bd;
    }
}





?>


// EMPLEANDO UNA CADENA DE CONEXION CON CADENA DE CARACTERES PERMITE REULITZAR EL CODIGO SI SE FUERA A UTLIZAR EN OTRA BAS E DE DATOS. SIMPLEMENTE CAMBIANDO EN LA PARTE DE ARRIBA LAS CONSTANTES DIFERENTES QUE NOS INTERESEN. POR EJEMPLO UN AEROPUERTO. PUES DBNAME, AEROPUERTO, Y LUEGO, USER, ADMIN_AEROPUERTO. Y NO HABRIA QUE CAMBIAR NINGUNA LINEA DE CODIGO MAS.
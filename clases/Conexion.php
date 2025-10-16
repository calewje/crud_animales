<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_animales/vendor/autoload.php";
    #require_once __DIR__ . "/../vendor/autoload.php";

    class Conexion {
        public static function conectar() {
           try {
                $servidor = "localhost";
                $puerto = "27017";
                $usuario = "mongoadmin";
                $password = "123456";
                $BD = "animales";
                $cadenaConexion = "mongodb://" . 
                                    $usuario . ":" . 
                                    $password . "@". 
                                    $servidor .":". 
                                    $puerto ."/". 
                                    $BD;
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }

?>


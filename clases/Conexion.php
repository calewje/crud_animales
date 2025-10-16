<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/b221190048/crud_animales/vendor/autoload.php";

class Conexion {
    public static function conectar() {
        try {
            $servidor = "localhost";
            $puerto = "27017";
            $BD = "b221190048_crud2";
            $usuario = "backend";
            $password = "backend2025";
            $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD?authSource=admin";

            // Crear cliente y seleccionar base de datos
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($BD);

        } catch (\Throwable $th) {
            return "Error de conexión: " . $th->getMessage();
        }
    }
}
?>

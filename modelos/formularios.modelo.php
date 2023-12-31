<?php 
require_once "conexion.php";

class ModeloFormularios{
    /**
     *  Registro
    */
    static public function mdlRegistro($tabla, $datos){
        # statement: declaracion de una instruccion

        # prepare() Prepara una sentencia SQL para ser ejecutada por el metodo.
        # PDOStatement::execute(). La sentencia SQL puede contener cero o mas marcadores de
        # parametros con el nombre :name o signos de interrogacion (?) por los cuales los 
        # valore reales seran sustituidos cuando la sentencia se a ejecutada. Ayuda a prevenir # inyecciones SQL eliminando la necesidad de entrecomillar manualmente el parametro.

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");

        # bindParam() Vincula una variable de PHP a un parametro de sustitucion con nombre o
        # signo de interrogacion correspondiente de la sentencia SQL que fue usada para
        # preparar la sentencia.
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        if ($stmt->execute()){
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        //$stmt->close();
        $stmt = null;

    }
    /**
     * Seleccionar registros
    */
    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
        if ($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as fecha FROM $tabla ORDER BY id DESC");
            $stmt->execute();

            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");
            
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            
            $stmt->execute();

            return $stmt->fetch();

        }
        
        //$stmt->close();
        $stmt = null;
    }
    /**
     * Actualizar registros
    */
    static public function mdlActualizarRegistros($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id=:id");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()){
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        //$stmt->close();
        $stmt = null;
    }

    
}

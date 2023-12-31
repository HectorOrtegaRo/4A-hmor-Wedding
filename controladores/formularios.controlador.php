<?php 

class ControladorFormularios{
    /**
     * Registro
    */
    static public function ctrRegistro(){
        if (isset($_POST["registroNombre"])) {
            if (
                preg_match('/^[a-zA-ZáéíóúñÑ]+$/', $_POST["registroNombre"]) &&
                preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroNombre"])
            ) {
                $tabla = "registros";
                $datos = array(
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $_POST["registroPassword"]
                );


                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                return $respuesta;
            }
        }else {
            $respuesta = "error";
            return $respuesta;
        }
    }
    /**
     * Seleccionar resgistros de la tabla
    */
    static public function ctrSeleccionarRegistros($item, $valor){
        $tabla = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        return $respuesta;
    }    
    /**
     * Ingreso
    */
    public function ctrIngreso(){
        if (isset($_POST["ingresoEmail"])){
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            //echo "<pre>"; print_r($respuesta); echo "</pre>";

            if (is_array($respuesta)){ // $respuesta != null
                if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

                    $_SESSION["validarIngreso"] = "ok";

                    echo '<script>
                            if (window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = "index.php?pagina=inicio";
                        </script>';
                } else {
                    echo '<script>
                            if (window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>';
                    echo '<div class="alert alert-danger">!Error! al ingresar al sistema, el EMAIL o la CONTRASEÑA no coinciden</div>';
                }
            } else {
                echo '<script>
                            if (window.history.replaceState){
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>';
                echo '<div class="alert alert-danger">!Error! al ingresar al sistema, el EMAIL o la CONTRASEÑA no coinciden</div>';
            }

        }
    }
    /**
     * Actualizar resgistros de la tabla
    */
    static public function ctrActualizarRegistro(){
        if (isset($_POST["actualizarNombre"])){
            if ($_POST["actualizarPassword"] != ""){
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["passwordActual"];
            }
            $tabla = "registros";
            $datos = array("id" => $_POST["idUsuario"],
                           "nombre" => $_POST["actualizarNombre"],
                           "email" => $_POST["actualizarEmail"],
                           "password" => $password);
            $respuesta = ModeloFormularios::mdlActualizarRegistros($tabla, $datos);

            return $respuesta;
        }
    }

    

}

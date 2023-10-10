<?php 

class Conexion{

    static public function conectar(){
        $link = new PDO("mysql:host=127.0.0.1;dbname=web-4a", "soporte", "823757");
        
        $link->exec("set names utf8");

        return $link;
    }

}

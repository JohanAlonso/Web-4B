<?php 

class Conexion{

    static public function conectar(){
        $link = new PDO("mysql:host=127.0.0.1:3307;dbname=web-4b", "soporte3b", "soporte3b");

        $link->exec("set names utf8");

        return $link;
    }

}


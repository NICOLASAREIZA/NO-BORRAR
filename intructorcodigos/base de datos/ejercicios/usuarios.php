<?php

require_once ("autoload.php");

class usuario extends conexion {

    private $nombre;

    private $telefono;

    private $email;
    
    private $direccion;
    
    private $conexion;


    public function __construct()
    {
        $this -> conexion = new conexion();
        $this -> conexion = $this -> conexion -> conect() ;
    }


    public function insert (string $nombre, string $telefono, string $email, string $direccion){
        try {
            $this -> nombre = $nombre;
            $this -> telefono = $telefono;
            $this -> email = $email;
            $this -> direccion = $direccion;


            $sql= "INSERT INTO usuario (nombre,telefono,email,direccion)
            VALUES (:nom,:tel,:email,:dir)";
            //se puede escribir de una manera mas sensilla ":nom o :nombre" 
            $insert = $this -> conexion -> prepare($sql);
            $arrayData = array(
                ":nom" => $this -> nombre,
                ":tel" => $this -> telefono,
                ":email" => $this -> email,
                ":dir" => $this -> direccion
            );

            $resInsert = $insert ->execute ($arrayData);
            $idInsert = $this ->conexion ->lastInsertId();
            $insert -> closeCursor();
            return $idInsert;

        }catch (Exception $e){
            echo "Error wn la solicitud".$e -> getMessage();

        }
    }

}

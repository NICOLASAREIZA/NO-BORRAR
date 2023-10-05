<?php 



class conexion{
    private $host = "localhost";
    
    private $user = "root";

    private $password = "";

    private $db = "empresa";

    private $connect;


    //";charset=utf8": sirve para poder usar caracteres especiales
    public function __construct(){
        try {
            $connectString = "mysql:host=".$this->host.";dbname=".$this -> db.";charset=utf8";
           $this -> connect =new PDO ($connectString,$this ->user, 
           $this -> password);

           //Codigo de abajo: le decimos que nos analice si existe algun error o una exepcion de codigo.
            $this -> connect -> setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
            echo "Se conecto correctamente";
        } catch (PDOException $e){
            $this -> connect = "Error de conexión";
            echo "Error: ".$e -> getMessage();
            //Hasta aca va el codigo
        }
    } 
    public function conect(){
        return $this -> connect;
    }
}

$conexiondb = new conexion();
    var_dump($conexiondb);




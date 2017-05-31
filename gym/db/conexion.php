<?php
    
class DataBase{

    


    public function __CONSTRUCT(){

        die("no se pudo conectar");

    }
    public function Conectar(){
         $conn=null;
        $dbName = 'PruebaGym';
        $servidor = 'DESKTOP-FAE6SU1'; 
        $usuario= 'taller';
        $pass = 'udenar';

       
        
        try 
        {           
               // $conn =  new PDO( "sqlsrv:Server=".$servidor.";DataBase=".$dbName,$usuario,$pass); 
           $conn= new PDO("sqlsrv:server=DESKTOP-FAE6SU1;Database=qqq;ConnectionPooling=0", "taller", "udenar");
          
        } 
        catch (PDOException $e) {
                echo "no se pudo conectar, hay errores"; 
        }
      
        return $conn;

    }

    public function Desconectar(){

        $conn=null;

    }
}

?>

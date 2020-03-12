<?php
    $userDB = 'root';
    $passDB = '';
    $servDB = 'localhost';
    $NombDB = 'dbsimulacro';


    class ConnectToDB{
        var $Conecction;
        function ConnectToDB(){}

        function ConnectToMySql(){
           $this->Conecction = mysqli_connect($userDB, $passDB, $servDB, $NombDB);
           if(!$this->Conecction){
               echo "Error Al Conectarse a la base de datos";
           }
        }
    }
?>
<?php
    require 'ConnectionToDB.php';
    class ListarUsuarios extends ConnectToDB {
        $DataReader = "SELECT * FROM tb_user";
        $result = mysqli_query($this->Conecction, $DataReader);

        while($mostrar = mysqli_fetch_array($result)){
            
        }
    }

?>
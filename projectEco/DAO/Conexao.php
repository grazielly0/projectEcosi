<?php
 
namespace PHP\Modelo\DAO;

class Conexao{
    function conectar(){
        try{
        $conn = mysqli_connect('localhost', 'root', '', 'phpEco');
        if($conn){
            echo "<br>Conectado com sucesso!";
            return $conn;
        }
        echo "<br>Algo deu errado!";
    }catch(except $erro)
    {
        return "Algo deu errado!<br><br>".$erro;
    }
    }//fim do conectar 

}//fim da classe 
?>
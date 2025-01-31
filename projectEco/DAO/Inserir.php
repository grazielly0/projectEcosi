<?php

namespace PHP\Modelo\DAO;
require_once('Conexao.php');

use PHP\Modelo\DAO\Cnserir;
use PHP\Modelo\DAO\Conexao; 

class Inserir{

    function cadastrarProduto(Conexao $conexao,
                                    string $codigo,
                                    string $categoria,
                                    string $dataCadastro,
                                    float $peso
                                    ){
        
try{
    $conn = $conexao->conectar();//abrir o banco  
    $sql = "Insert into produto (codigo, categoria, dataCadastro, peso)
          values( '$codigo','$categoria','$dataCadastro','$peso')";
    $result = mysqli_query($conn,$sql);
    mysqli_close($conn);
    //verificar resultado 
    if ($result){
        return "<br><br>Inserido com sucesso!";

    }

    return "<br><br>Não Inserido!";
}                           
                                        
catch(Except $erro)
{

return "<br><br>Algo deu errado".$erro;

}

    }//fim do método 
}
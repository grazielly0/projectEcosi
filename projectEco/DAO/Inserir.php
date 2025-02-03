<?php

namespace PHP\Modelo\DAO;
require_once('Conexao.php');

use PHP\Modelo\DAO\Inserir;
use PHP\Modelo\DAO\Conexao; 

class Inserir{

    function cadastrarProduto(Conexao $conexao,
                                    string $codigo,
                                    string $categoria,
                                    string $dataCadastro,
                                    float $peso,
                                    string $localEnviado,
                                    string $entreguePor
                                    ){
        
try{
    $conn = $conexao->conectar();//abrir o banco  
    $sql = "Insert into Produto (codigo, categoria, dataCadastro, peso, localEnviado, entreguePor)
          values( '$codigo','$categoria','$dataCadastro','$peso', '$localEnviado', '$entreguePor')";
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
<?php

namespace PHP\Modelo\DAO;
require_once('conexao.php');
use PHP\Modelo\DAO\conexao;

class consultar{
    function consultarProdutoIndividual(
        conexao $conexao, 
        string $codigo
    )
    {
        try{
          $conn = $conexao->conectar();
          $sql =  "select * from produto where codigo = '$codigo'";
          $result = mysqli_query($conn, $sql);

          while ($dados = mysqli_fetch_Array($result)){
            if($dados['codigo'] == $codigo){
                echo "<br><br>Código:".$dados['codigo'].      
                    "<br><br>Categoria:".$dados['categoria'].
                    "<br><br>Data:".$dados['dataCadastro'].
                    "<br><br>Peso:".$dados['peso'].
                    "<br><br>Local Enviado:".$dados['localEnviado'].
                    "<br><br>Entregue Por:".$dados['entreguePor'];
            
            }
                       
            return "Código digitado inválido!";
          }

        }catch(Except $erro)
        {
            echo $erro; 
        }
        
        }//fim do consultar individual 
}// fim da classe 



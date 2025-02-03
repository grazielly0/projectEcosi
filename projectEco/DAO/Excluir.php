<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use  PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirProduto(
            Conexao $conexao,
            string $codigo )
        {
            $conn = $conexao->conectar();
            $sql = "Delete from Produto where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

        if ($result){
            echo "Deletado com sucesso!";

        }else{
            echo "Não Deletado!";
        }
        }
    }
?>
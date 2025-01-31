<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\estilo1.css">
</head>
<body>
<form class="form" method="POST">>
  <span class="input-span">
    <label for="email" class="label">Código</label>
    <input type="text" name="tCodigo" id="tCodigo"
  /></span>
  <button>
    Atualizar


        <?php
        $conexao = new Conexao();
        if(isset($_POST['tCodigo'])){
            $cpf = $_POST['tCodigo'];
            $excluir = new  Excluir();
            }
            ?>
    </button>
    </form>
    <?php
       
       if(isset($_POST['tCpf'])){
        echo $excluir->excluirProduto($conexao,$cpf);
           
       }else{
        echo   "Informe um CPF válido";
       }
    ?>

    </body>
</html>
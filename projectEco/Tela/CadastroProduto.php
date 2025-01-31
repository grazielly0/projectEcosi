<?php
    namespace PHP\Modelo\Tela;
    require_once ('..\Produto.php');
    require_once ('..\DAO\Conexao.php');
    require_once ('..\DAO\Inserir.php');
    use PHP\Modelo\Produto;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;


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
<!-- From Uiverse.io by bociKond --> 
<form class="form" method="POST">
  <span class="input-span">
    <label for="email" class="label">Código</label>
    <input type="text" name="tCodigo" id="tCodigo"
  /></span>
  <span class="input-span">
    <label for="password" class="label">Categoria</label>
    <input type="text" name="tCategoria" id="tCategoria"
  /></span>

  <span class="input-span">
    <label for="email" class="label">Data</label>
    <input type="date" name="tData" id="tData"
  /></span>

  <span class="input-span">
    <label for="email" class="label">Peso</label>
    <input type="text" name="tPeso" id="tPeso"><br>
  </span>


 
 


</div>

<!-- From Uiverse.io by lenfear23 --> 
<button>
   Cadastrar

    
        <?php
        $conexao = new conexao();
           if(isset($_POST['tCodigo'])){;
            $codigo = $_POST['tCodigo'];
            $categoria = $_POST['tCategoria'];
            $dataCadastro = $_POST['tData'];
            $peso = $_POST['tPeso'];
            //instanciar 
            $inserir = new inserir();
            echo $inserir->cadastrarProduto($conexao,
                                              $codigo,
                                              $categoria,
                                              $dataCadastro,
                                              $peso
                                              );
           }

        ?>

</button>
</form> 



</body>
</html>

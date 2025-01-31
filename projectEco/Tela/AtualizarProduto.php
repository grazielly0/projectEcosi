<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
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

        
             <label>Escolha o campo que deseja Atualizar: </label>
       <select name="tCampo">
        <option value="peso">Peso</option>
        <option value="data">Data</option>
        <option value="categoria">Categoria</option>
      


  <span class="input-span">
    <label for="password" class="label">Novo Dado </label>
    <input type="text" name="tNovoDado" id="tNovoDado"
  /></span>



<!-- From Uiverse.io by lenfear23 --> 
<button>
  Atualizar


        <?php
            if(isset($_POST['tCodigo'])){
            $conexao = new Conexao();
            $atualizar = new Atualizar();

            $codigo = $_POST['tCodigo'];
            $campo = $_POST['tCampo'];
            $novoDado = $_POST['tNovoDado'];
            }
            ?>


    <?php
       
       if(isset($_POST['tCodigo'])){
        echo $atualizar->atualizarProduto(
            $conexao,
            $campo,
            $novoDado,
            $codigo);
       }
    ?>
</button>
    </body>
</html>
























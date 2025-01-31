<?php
 namespace PHP\Modelo\Tela; 
 require_once('..\DAO\Conexao.php');
 require_once('..\DAO\Consultar.php');
 use PHP\Modelo\DAO\Conexao;
 use PHP\Modelo\DAO\Consultar;


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
    Consultar 
      <?php

        $conexao = new Conexao();
        if(isset($_POST['tCodigo'])){
            $cpf = $_POST['tCodigo'];
            $consultar = new Consultar();
        }
      ?>
  </button>
</form>
</form>
<?php
  if(isset($_POST['tCodigo'])){
    echo $consultar->consultarProdutoIndividual($conexao,$codigo);
  }else{
    echo "Preencha os campos";
  }
?>
    


</body>
</html>
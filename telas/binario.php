<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binário</title>
</head>
<body>
    <h1>Informe um número:</h1>
    <form method="POST">
        <label>Informe um número: </label>
        <input type="number" id="numero" name="numero"/>
        <br><br>

        <button type="submit">Mostrar em Binário
        <?php
            if(isset($_POST['numero'])){
                $decimal = $_POST['numero'];

                $resultado = $funcoes->decimalBinario($decimal);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numero'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
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
    <title>ValidarIdade</title>
</head>
<body>
    <h1>Informe sua idade: </h1>
    <form method="POST">
        <label>Informe a idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>

        <button type="submit">Verificar
        <?php
            if(isset($_POST['idade'])){
                $idade = $_POST['idade'];

                $resultado = $funcoes->validarIdade($idade);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['idade'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
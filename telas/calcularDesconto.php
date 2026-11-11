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
    <title>Calculando desconto de 10%</title>
</head>
<body>
    <h1>Informe um valor: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroValor" name="primeiroValor"/>
        <br><br>

        <button type="submit">Descontar
        <?php
            if(isset($_POST['primeiroValor'])){
                $num1 = $_POST['primeiroValor'];

                $resultado = $funcoes->calcularDesconto($num1);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroValor'])){
            echo "O valor descontado é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
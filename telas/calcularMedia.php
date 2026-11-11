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
    <title>CalcularMedia</title>
</head>
<body>
    <h1>Informe os valores para calcular a média: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o segundo número: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o terceiro número: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <label>Informe o quarto número: </label>
        <input type="number" id="quartoNumero" name="quartoNumero"/>
        <br><br>

        <label>Informe o quinto número: </label>
        <input type="number" id="quintoNumero" name="quintoNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
                $num4 = $_POST['quartoNumero'];
                $num5 = $_POST['quintoNumero'];

                $resultado = $funcoes->calcularMedia($num1,$num2,$num3,$num4,$num5);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O resultado da média é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
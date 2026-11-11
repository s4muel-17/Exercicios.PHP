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
    <title>Converter Celsius para Fahrenheit</title>
</head>
<body>
    <h1>Informe uma temperatura em celsius: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Converter
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];

                $resultado = $funcoes->celsiusForFahrenheit($num1);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O conversão é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
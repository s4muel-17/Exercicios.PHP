<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $quadrado = "";
    $cubo = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o Quadrado e o Cubo</title>
</head>
<body>
    <h1>Calculando o Quadrado e o Cubo </h1>
    <form method="POST">
        <label>Informe o primeiro número : </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                

                $quadrado = $funcoes->calcularQuadrado($num1);//Utilizando o método da classe Funcoes
                $cubo = $funcoes->calcularCubo($num1);
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O número ao quadrado é: ".$quadrado ."<br>";
            echo "O número ao cubo é:".$cubo;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
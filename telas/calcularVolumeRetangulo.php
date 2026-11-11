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
    <title>Calculando o Volume de um Retângulo</title>
</head>
<body>
    <h1>Calculando o Volume de um Retângulo </h1>
    <form method="POST">
        <label>Informe o comprimento: </label>
        <input type="number" id="comprimento" name="comprimento"/>
        <br><br>

        <label>Informe a largura: </label>
        <input type="number" id="largura" name="largura"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" id="altura" name="altura"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['comprimento'])){
                $comprimento = $_POST['comprimento'];
                $largura = $_POST['largura'];
                 $altura = $_POST['altura'];

                $resultado = $funcoes->calcularVolumeRetangulo($comprimento, $largura, $altura);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['comprimento'])){
            echo "O volume do retângulo é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
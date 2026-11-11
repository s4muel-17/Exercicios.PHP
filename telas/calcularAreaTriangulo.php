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
    <title>Calculando a Área de um Triângulo</title>
</head>
<body>
    <h1>Calculando a Área de um Triângulo </h1>
    <form method="POST">
        <label>Informe a base: </label>
        <input type="number" id="base" name="base"/>
        <br><br>

        <label>Informe a altura: </label>
        <input type="number" id="altura" name="altura"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['base'])){
                $base = $_POST['base'];
                 $altura = $_POST['altura'];

                $resultado = $funcoes->calcularAreaTriangulo($base, $altura);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['base'])){
            echo "A área do triângulo é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
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
    <title>Calculando a Idade em Meses</title>
</head>
<body>
    <h1>Calculando sua Idade em Meses: </h1>
    <form method="POST">
        <label>Informe sua idade: </label>
        <input type="number" id="idade" name="idade"/>
        <br><br>

        <button type="submit">Mostrar
        <?php
            if(isset($_POST['idade'])){
                $ano = $_POST['idade'];

                $resultado = $funcoes->calcularIdadeEmMeses($ano);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['idade'])){
            echo "Sua idade em meses é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
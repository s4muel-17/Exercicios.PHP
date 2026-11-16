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
    <title>VelocidadeMedia</title>
</head>
<body>
    <h1>Informe os valores para calcular a velocidade média: </h1>
    <form method="POST">
        <label>Informe uma distância em km: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe um tempo: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>


        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $distancia = $_POST['primeiroNumero'];
                $tempo = $_POST['segundoNumero'];
                

                $resultado = $funcoes->velocidadeMedia($distancia,$tempo);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "A velocidade média é: ".$resultado ."km/h";
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
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
    <title>MediaTemperatura</title>
</head>
<body>
    <h1>Verifique quantos dias ultrapassaram de 30°: </h1>
    <form method="POST">
        <label>Informe a primeira temperatura: </label>
        <input type="text" id="primeiraTemperatura" name="primeiraTemperatura"/>
        <br><br>

        <label>Informe a segunda temperatura: </label>
        <input type="text" id="segundaTemperatura" name="segundaTemperatura"/>
        <br><br>

        <label>Informe a terceira temperatura: </label>
        <input type="text" id="terceiraTemperatura" name="terceiraTemperatura"/>
        <br><br>

        <label>Informe a quarta temperatura: </label>
        <input type="text" id="quartaTemperatura" name="quartaTemperatura"/>
        <br><br>

        <label>Informe a quinta temperatura: </label>
        <input type="text" id="quintaTemperatura" name="quintaTemperatura"/>
        <br><br>

        <label>Informe a sexta temperatura: </label>
        <input type="text" id="sextaTemperatura" name="sextaTemperatura"/>
        <br><br>

        <label>Informe a sétima temperatura: </label>
        <input type="text" id="setimaTemperatura" name="setimaTemperatura"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiraTemperatura'])){
                $temperatura = (float) $_POST['primeiraTemperatura'];
                

                $resultado = $funcoes->mediaTemperatura($temperatura);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiraTemperatura'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
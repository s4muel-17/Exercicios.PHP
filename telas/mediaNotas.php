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
    <title>MediaNotas</title>
</head>
<body>
    <h1>Verifique sua média: </h1>
    <form method="POST">
        <label>Informe a primeira nota: </label>
        <input type="number" id="primeiraNota" name="primeiraNota"/>
        <br><br>

        <label>Informe a segunda nota: </label>
        <input type="number" id="segundaNota" name="segundaNota"/>
        <br><br>

        <label>Informe a terceira nota: </label>
        <input type="number" id="terceiraNota" name="terceiraNota"/>
        <br><br>

        <label>Informe a quarta nota: </label>
        <input type="number" id="quartaNota" name="quartaNota"/>
        <br><br>

        <label>Informe a quinta nota: </label>
        <input type="number" id="quintaNota" name="quintaNota"/>
        <br><br>

        <label>Informe a sexta nota: </label>
        <input type="number" id="sextaNota" name="sextaNota"/>
        <br><br>

        <label>Informe a sétima nota: </label>
        <input type="number" id="setimaNota" name="setimaNota"/>
        <br><br>

        <label>Informe a oitava nota: </label>
        <input type="number" id="oitavaNota" name="oitavaNota"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiraNota'])){
                $nota1 = $_POST['primeiraNota'];
                $nota2 = $_POST['segundaNota'];
                $nota3 = $_POST['terceiraNota'];
                $nota4 = $_POST['quartaNota'];
                $nota5 = $_POST['quintaNota'];
                $nota6 = $_POST['sextaNota'];
                $nota7 = $_POST['setimaNota'];
                $nota8 = $_POST['oitavaNota'];

                $resultado = $funcoes->mediaNotas($nota1, $nota2, $nota3, $nota4, $nota5, $nota6, $nota7, $nota8);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiraNota'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
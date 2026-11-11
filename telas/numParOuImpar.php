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
    <title>Lendo um número para ver se é Par ou Ímpar</title>
</head>
<body>
    <h1>Verifique se seu número é Par ou Ímpar: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Verificar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];

                $resultado = $funcoes->numeroParOuImpar($num1);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O seu número é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
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
    <title>Raiz Quadrada</title>
</head>
<body>
    <h1>Informe o valor que deseja descobrir a raiz: </h1>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Radiciar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];

                $resultado = $funcoes->raizQuadrada($num1);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "A raiz quadrada desse número é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
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
    <title>DobrarUmValor</title>
<head>
<body>
    <h1>Informe o número que deseja dobrar: </h1>
    <form method="POST">
       <label>Inicie com um número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>  

        <button type="submit">Dobrar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];

                $resultado = $funcoes->dobrarUmValor($num1);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O dobro desse número é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
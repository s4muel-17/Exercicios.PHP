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
    <title>IdadeRestante</title>
</head>
<body>
    <h1>Informe sua idade para saber seus dias restantes: </h1>
    <form method="POST">
        <label>Informe quantos anos vc tem: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $dtnascimento = $_POST['primeiroNumero'];

                $resultado = $funcoes->idadeRestante($dtnascimento);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "Você tem: ".$resultado ." restante";
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
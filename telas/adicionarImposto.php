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
    <title>Adicionando um imposto em cima de um Produto</title>
</head>
<body>
    <h1>Informe um valor para calcular o imposto: </h1>
    <form method="POST">
        <label>Informe um valor: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $preco = $_POST['primeiroNumero'];
                

                $resultado = $funcoes->adicionarImposto($preco);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O valor com imposto é: ".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
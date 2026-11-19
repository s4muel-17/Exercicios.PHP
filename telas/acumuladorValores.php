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
    <title>AcumuladorValores</title>
</head>
<body>
    <h1>Informe números para que ultrapasse 200 </h1>
    <form method="POST">
        <label>Informe o número: </label>
        <input type="number" id="numero1" name="numero1"/>
        <br><br>

        <label>Informe outro número: </label>
        <input type="number" id="numero2" name="numero2"/>
        <br><br>

        <button type="submit">Somar
        <?php
            if(isset($_POST['numero1'])){
                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];

                $resultado = $funcoes->acumuladorValores($num1, $num2);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numero1'])){
            echo $resultado;
        }else{
            echo "Preencha os Campos!";
        }
        
    ?>
</body>
</html>
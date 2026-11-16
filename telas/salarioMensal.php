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
    <title>SalárioMensal</title>
</head>
<body>
    <h1>Informe as informações para saber o salário mensal: </h1>
    <form method="POST">
        <label>Informe quanto vc ganha por hora: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe quantas horas vc trabalha ao dia: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe quantos dias vc trabalha no mês: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['primeiroNumero'])){
                $salarioPorHora = $_POST['primeiroNumero'];
                $horasTrabalhadas = $_POST['segundoNumero'];
                $diasTrabalhados = $_POST['terceiroNumero'];

                $resultado = $funcoes->salarioMensal($salarioPorHora, $horasTrabalhadas, $diasTrabalhados);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "Salário Mensal: R$".$resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
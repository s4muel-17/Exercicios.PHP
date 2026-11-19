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
    <title>VerificarSenha</title>
</head>
<body>
    <h1>É preciso informar a senha: </h1>
    <form method="POST">
        <label>Informe a senha: </label>
        <input type="number" id="senha" name="senha"/>
        <br><br>

        <button type="submit">Calcular
        <?php
            if(isset($_POST['senha'])){
                $senha = $_POST['senha'];

                $resultado = $funcoes->verificarSenha($senha);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['senha'])){
            echo $resultado;
        }else{
            echo "Preencha os campos!";
        }
    ?>
</body>
</html>
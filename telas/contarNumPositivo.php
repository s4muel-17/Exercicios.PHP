<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
    $contPositivo = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContarNúmerosPositivos</title>
</head>
<body>
    <h1>Informe números inteiros: </h1>
    <form method="POST">
    <label>Informe um número:</label>
    <input type="number" name="numero" required>
    <input type="hidden" name="contPositivo" value="<?php echo $contPositivo; ?>">
    <br></br>

    <button type="submit">Enviar</button>
    </form>

    <?php
        echo $resultado;
    ?>
        <?php
            if(isset($_POST['numero'])){
                $num = $_POST['numero'];
                $contPositivo = $_POST['contPositivo'];

            $contPositivo = $funcoes->contarNumPositivo($num, $contPositivo);

        if($num < 0){
            $resultado = "Quantidade de números positivos: " . $contPositivo;
        }
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['numero'])){
            echo $resultado;
        }else{
            echo "Preencha os Campos!";
        }
        
    ?>
</body>
</html>
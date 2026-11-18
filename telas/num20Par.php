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
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Informe os números para saber quantos são pares: </h1>
    <form method="POST">
        <label>Informe o 1° número: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <label>Informe o 2° número: </label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe o 3° número: </label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <label>Informe o 4° número: </label>
        <input type="number" id="quartoNumero" name="quartoNumero"/>
        <br><br>

        <label>Informe 5° número: </label>
        <input type="number" id="quintoNumero" name="quintoNumero"/>
        <br><br>

        <label>Informe o 6° número: </label>
        <input type="number" id="sextoNumero" name="sextoNumero"/>
        <br><br>

        <label>Informe 7° número: </label>
        <input type="number" id="setimoNumero" name="setimoNumero"/>
        <br><br>

        <label>Informe 8° número: </label>
        <input type="number" id="oitavoNumero" name="oitavoNumero"/>
        <br><br>

        <label>Informe o 9° número: </label>
        <input type="number" id="nonoNumero" name="nonoNumero"/>
        <br><br>

        <label>Informe o 10° número: </label>
        <input type="number" id="decimoNumero" name="decimoNumero"/>
        <br><br>

        <label>Informe o 11° número: </label>
        <input type="number" id="decimoPrimeiroNumero" name="decimoPrimeiroNumero"/>
        <br><br>
        
        <label>Informe o 12° número: </label>
        <input type="number" id="decimoSegundoNumero" name="decimoSegundoNumero"/>
        <br><br>

        <label>Informe o 13° número: </label>
        <input type="number" id="decimoTerceiroNumero" name="decimoTerceiroNumero"/>
        <br><br>

        <label>Informe o 14° número: </label>
        <input type="number" id="decimoQuartoNumero" name="decimoQuartoNumero"/>
        <br><br>

        <label>Informe o 15° número: </label>
        <input type="number" id="decimoQuintoNumero" name="decimoQuintoNumero"/>
        <br><br>

        <label>Informe o 16° número: </label>
        <input type="number" id="decimoSextoNumero" name="decimoSextoNumero"/>
        <br><br>

        <label>Informe o 17° número: </label>
        <input type="number" id="decimoSetimoNumero" name="decimoSetimoNumero"/>
        <br><br>

        <label>Informe o 18° número: </label>
        <input type="number" id="decimoOitavoNumero" name="decimoOitavoNumero"/>
        <br><br>

        <label>Informe o 19° número: </label>
        <input type="number" id="decimoNonoNumero" name="decimoNonoNumero"/>
        <br><br>

        <label>Informe o 20° número: </label>
        <input type="number" id="vigesimoNumero" name="vigesimoNumero"/>
        <br><br>

        

        <button type="submit">Contar
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
                $num4 = $_POST['quartoNumero'];
                $num5 = $_POST['quintoNumero'];
                $num6 = $_POST['sextoNumero'];
                $num7 = $_POST['setimoNumero'];
                $num8 = $_POST['oitavoNumero'];
                $num9 = $_POST['nonoNumero'];
                $num10 = $_POST['decimoNumero'];
                $num11 = $_POST['decimoPrimeiroNumero'];
                $num12 = $_POST['decimoSegundoNumero'];
                $num13 = $_POST['decimoTerceiroNumero'];
                $num14 = $_POST['decimoQuartoNumero'];
                $num15 = $_POST['decimoQuintoNumero'];
                $num16 = $_POST['decimoSextoNumero'];
                $num17 = $_POST['decimoSetimoNumero'];
                $num18 = $_POST['decimoOitavoNumero'];
                $num19 = $_POST['decimoNonoNumero'];
                $num20 = $_POST['vigesimoNumero'];

                $resultado = $funcoes->num20Par($num, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
    if(isset($_POST['primeiroNumero'])){
        echo "A quantidade de números pares é: ".$resultado;
    }else{
        echo "Preencha os campos!";
    }
    ?>
</body>
</html>

<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
        
        //Criando um construtor = Instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->num1      = 0;
            $this->num2      = 0;
            $this->resultado = 0;
        }//fim do construtor

        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2; 
            return $this->resultado;
        }//fim do método somar

        public function subtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método subtrair

        public function multiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método multiplicar

        public function dividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método dividir

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do delta

        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Impossível calcular X1 e X2, delta negativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método

        public function dobrarUmValor(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }//fim do método dobrarValor

        public function calcularMedia(float $num1, float $num2, float $num3, float $num4, float $num5){
            $this->resultado = $num1 + $num2 + $num3 + $num4 + $num5/5;
            return $this->resultado;
        }//fim do método calcularMédia

        public function raizQuadrada(float $num1){
            $this->resultado = sqrt($num1);
            return $this->resultado;
        }//fim do método raizQuadrada

        public function convertMforCM(float $num1){
            $this->resultado = $num1 * 100;
            return $this->resultado;
        }//fim do método converter metros para centímetros

        public function areaRaio(float $r){
            $this->resultado = M_PI * pow($r,2);
            return $this->resultado;
        }//fim do método Área do círculo

        public function celsiusForFahrenheit(float $num1){
            $this->resultado = $num1 * 1.8 + 32;
            return $this->resultado;
        }//fim do método Celsius para Fahrenheit

        public function calcularDesconto(float $num1){
            $this->resultado = $num1 * 0.10;
            return $this->resultado;
        }//fim do método Calcular Desconto de 10%

        public function calcularIdadeEmMeses(int $ano){
            $this->resultado = $ano * 12;
            return $this->resultado;
        }//fim do método Calcular Idade em Meses

        public function numeroParOuImpar(int $num1){
             if ($num1 % 2 === 0) {
                return "par!";
             }
            return "ímpar!";
        }//fim do método Número Par ou Ímpar

        public function calcularAreaTriangulo(float $base, float $altura){
            $this->resultado = ($base * $altura) / 2;
            return $this->resultado;
        }//fim do método Calcular Base e Altura de um Triângulo

        public function calcularVolumeRetangulo(float $comprimento, float $largura, float $altura){
            $this->resultado = $comprimento * $largura * $altura;
            return $this->resultado;
        }//fim do método Calcular Volume do Retângulo

        public function calcularQuadrado(int $num1){
            $this->resultado = pow($num1, 2);
            return $this->resultado;
        }//fim do método Calcular Quadrado

        public function calcularCubo(int $num1){
            $this->resultado = pow($num1,3);
            return $this->resultado;
        }//fim do Calcular Cubo

        public function adicionarImposto(float $preco){
            $this->resultado = $preco * 0.18;
            return $this->resultado;
        }//fim do adicionar imposto

        public function velocidadeMedia(float $distancia, float $tempo){
            $this->resultado = $distancia / $tempo;
            return $this->resultado;
        }//fim da velocidade média

        public function salarioMensal(int $salarioPorHora, int $horasTrabalhadas, int $diasTrabalhados){
            $salarioMensal = $salarioPorHora * $horasTrabalhadas;
            $this->resultado = $salarioMensal * $diasTrabalhados;
            return $this->resultado;
        }//fim do salario mensal

        public function idadeParaDias(int $dtnascimento){
            $this->resultado = $dtnascimento * 365;
            return $this->resultado;
        }//fim do idade para dias

        public function idadeRestante(int $dtnascimento){
            $this->resultado = 100 - $dtnascimento;
            return $this->resultado;
        }//fim do idade restante

        public function somaEMedia(float $num1, float $num2, float $num3){
             $soma = $num1 + $num2 + $num3;
             $media = $soma / 3;
            return "Soma: $soma <br> Média: $media";
        }//fim do soma e média

        public function verificarNum(float $num1){
            if($num1 > 0){
                return  "Positivo!";
            }
            if($num1 < 0){
                return "Negativo!";
            }
                return "Neutro";
        }//fim do método verificar num
    
         public function tabuada(float $num){
            $msg = "";
            for($i = 0;$i <= 10;$i++){
                $msg .= "<br>$num * $i = ".($num * $i);
            }//fim do for
            return $msg;
        }//fim do método tabuada

        public function contagemCrescente(int $num1){
            for($i = 0;$i <= $num1;$i++){
                echo $i . "<br>";
            }
        }//fim do método contagem crescente

        public function contagemRegressiva(int $num1){
            for($i = $num1;$i >= 0;$i--){
                echo $i . "<br>";
            }
        }//fim do método contagem regressiva

        public function numSomaInt(int $n){
            $soma = 0;

            for($i = 1; $i <= $n; $i++){
                $soma += $i;
        }
            return $soma;
        }//fim do método numSomaInt

        public function multiploDe7(int $num1){
            $resultado = "";
            for($i = 0; $i <= 100; $i++){
                if($i % $num1 == 0 ){
                    $resultado .= $i .", ";
                }
            }
            return $resultado;
        }//fim do método multiploDe7

        public function num20Par(int $num, int $num2, int $num3, int $num4, int $num5, int $num6, int $num7, int $num8, int $num9, int $num10, int $num11, int $num12, int $num13, int $num14, int $num15, int $num16, int $num17, int $num18, int $num19, int $num20){
            $contarPar = 0;

            for($i = 1; $i <= 20; $i++){

            switch($i){
                case 1: 
                    $valor = $num; 
                break;
                case 2: 
                    $valor = $num2; 
                break;
                case 3: 
                    $valor = $num3; 
                break;
                case 4: 
                    $valor = $num4; 
                break;
                case 5:
                     $valor = $num5; 
                break;
                case 6: 
                    $valor = $num6; 
                break;
                case 7: 
                    $valor = $num7; 
                break;
                case 8:
                     $valor = $num8; 
                break;
                case 9: 
                    $valor = $num9; 
                break;
                case 10: 
                    $valor = $num10; 
                break;
                case 11:
                     $valor = $num11; 
                break;
                case 12: 
                    $valor = $num12; 
                break;
                case 13: 
                    $valor = $num13; 
                break;
                case 14: 
                    $valor = $num14; 
                break;
                case 15:
                    $valor = $num15; 
                break;
                case 16: 
                    $valor = $num16;
                break;
                case 17: 
                    $valor = $num17; 
                break;
                case 18: 
                    $valor = $num18; 
                break;
                case 19: 
                    $valor = $num19; 
                break;
                case 20: 
                    $valor = $num20; 
                break;
            }
            if($valor % 2 == 0){
                $contarPar++;
            }
            }
        return $contarPar;
        }//fim do método num20Par

        public function mediaNotas(float $nota){
            $soma = 0;

            for($i = 1; $i <= 8; $i++){
                $soma += $nota;
            }
                $media = $soma / 8;

            if($media >= 7){
                return "Aprovado! Média: " . $media;
        }else{
            return "Reprovado! Média: " . $media;
            }
        }//fim do método mediaNotas

        public function mediaTemperatura(float $temperatura){
            $soma = 0;

            for($i = 1; $i <= 7; $i++){
                $soma += $temperatura;
            }
                $media = $soma / 7;

            if($media > 30){
                return "A média das temperaturas é: " . $media;
            }
                return "A média não ultrapassou 30 graus. Média: " . $media;
        }//fim do método médiaTemperatura

        public function decimalBinario(float $decimal){
        $resultado = "";
        while($decimal / 2 != 0){
            $resultado .= " ".($decimal % 2);//Coletando o resto
            $decimal = (int)$decimal/2;//Contribuir para o critério de parada
        }//fim do while
        return strrev($resultado);//Mostrando da direita para esquerda
        }//fim do Decimal Binário

        public function acumuladorValores(int $num1, int $num2){
        $soma = 0;

        while($soma <= 200){
            $soma = $num1 + $num2;

            if($soma <= 200){
            return "A soma ainda não é maior que 200!";
            }
        }

        return "A soma dos valores é: " . $soma;
        }//fim do método acumuladorValores

        public function decimalHexadecimal(float $decimal){
            $resto = 0;
            $resultado = "";
            while($decimal / 16 != 0){
                $resto = $decimal % 16;//Coletando o resto

                switch($resto){
                    case 10:
                    $resultado .= "A";
                    break;
                    case 11:
                    $resultado .= "B";
                    break;
                    case 12:
                    $resultado .= "C";
                    break;
                    case 13:
                    $resultado .= "D";
                    break;
                    case 14:
                    $resultado .= "E";
                    break;
                    case 15:
                    $resultado .= "F";
                    break;
                default:
                    $resultado .= $resto;
                }//fim do switch
                $decimal = (int)$decimal/16;

            }//fim do while
            return strrev($resultado);
        }//fim do Decimal Hexadecimal

        public function validarIdade(int $idade){
        while($idade < 0 or $idade > 120){
            return "Idade inválida! Informe novamente.";
        }

            return "Vc tem " .$idade ." anos";
        }//fim do método validarIdade

        public function contarNumPositivo(int $num, int $contPositivo){
           $contPositivo = 0;

        while($num >= 0){
            if($num > 0){
                $contPositivo++;
            }
            $num = $num2;
            $num2 = $num3;
            $num3 = $num4;
            $num4 = -1;
        }
        return "Quantidade de números positivos: " . $contPositivo;
        }//fim do método contarNumPositivo

        public function verificarSenha(string $senha){
            $senhaBD = "1234";
            $msg = "";
            do{
                if($senha != $senhaBD){
                    $msg = "Erro!";
                }else{
                    $msg = "Bem-Vindo!";
                }
            }while($senhaBD != $senha);
            return $msg;
        }//fim do método verificarSenha

    }//fim da classe
?>
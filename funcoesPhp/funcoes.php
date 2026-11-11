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

        public function calcularQuadradoECubo(float $num1){
            $quadrado = pow($num1, 2);
            $cubo = pow($num1, 3);

            $this->resultado = "Quadrado: {$quadrado} | Cubo: {$cubo}";
             return $this->resultado;
        }//fim do método Calcular Quadrado e o Cubo

    
        public function decimalBinario(float $decimal){
        $resultado = "";
        while($decimal / 2 != 0){
            $resultado .= " ".($decimal % 2);//Coletando o resto
            $decimal = (int)$decimal/2;//Contribuir para o critério de parada
        }//fim do while
        return strrev($resultado);//Mostrando da direita para esquerda
        }//fim do Decimal Binário

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
        }//fim do método

    }//fim da classe
?>
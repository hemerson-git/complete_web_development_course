<?php
    class Veiculo {
        private $placa = null;
        private $cor = null;
        
        function acelerar() {
            echo 'acelerando <br/>';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão <br/>';
        }
    }
    
    class Carro extends Veiculo {
        private $teto_solar = null;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Teto solar aberto <br/>';
        }

        function alterarPosicaoVolante(){
            echo 'Posição do volante alterada <br/>';
        }
    }

    class Moto extends Veiculo {
        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo  'empinando <br/>';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    $carro = new Carro('DEF1F23', 'Branco');
    $moto = new Moto('ABC1D23', 'Preto');
    $carro->acelerar();
    $carro->trocarMarcha();
    $moto->empinar();
    $moto->trocarMarcha();
?>
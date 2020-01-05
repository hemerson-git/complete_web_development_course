<?php
    class Veiculo {
        private $placa = null;
        private $cor = null;
        
        function acelerar() {
            echo 'acelerando <br/>';
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
    }

    $carro = new Carro('DEF1F23', 'Branco');
    $moto = new Moto('ABC1D23', 'Preto');
    $carro->acelerar();
    $moto->empinar();
?>
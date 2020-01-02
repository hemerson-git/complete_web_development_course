<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = 'null';
        public $telefone = 'null';
        public $numFilhos = 2;
         
        //métodos
        function resumirCadFunc() {
            $resume = "$this->nome possui $this->numFilhos filhos e seu número é $this->telefone <br/>";
            return $resume;
        }

        function modificarNumFilhos( $novoNumFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $novoNumFilhos; 
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
?>
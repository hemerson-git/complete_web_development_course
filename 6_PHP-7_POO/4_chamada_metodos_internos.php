<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
         
        //getter n setter (overloading)

        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
        
        //métodos
        function resumirCadFunc() {
            $resume = "$this->__get('nome') possui $this->__('numFilhos') filhos e seu número é $this->__get(telefone') <br/>";
            return $resume;
        }

        function modificarNumFilhos( $novoNumFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $novoNumFilhos; 
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 3);
    $y->__set('telefone', "77 99999 8888");

    echo $y->__get('nome') .' possui '. $y->__get('numFilhos') . ' filhos(as) <br/>'; 

    echo $y->resumirCadFunc();
?>
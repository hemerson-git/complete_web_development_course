<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
         
        //getter n setter

        function setNome($nome) {
            $this->nome = $nome;
        }
        
        function getNome() {
            return $this->nome;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

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
    $y->setNome('José');
    $y->setNumFilhos(3);
    $y->setTelefone("77 99999 8888");

    echo $y->getNome() .' possui '. $y->getNumFilhos() . ' filhos(as) <br/>'; 

    echo $y->resumirCadFunc();
?>
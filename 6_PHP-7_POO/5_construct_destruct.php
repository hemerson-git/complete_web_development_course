<?php
    class Pessoa {
        public $nome = null;

        function __construct($nome) {
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'O objeto foi destruído';
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        function correr() {
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Hemerson');
    echo $pessoa->correr();
    echo '<br/>Nome: ' . $pessoa->__get('nome');
?>
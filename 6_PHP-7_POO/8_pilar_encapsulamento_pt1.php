<?php

    class Pai {
        //public -> disponível para a aplicação
        //protected -> disponível para a classe e as subclasses
        //private -> disponível apenas para a classe
        
        private $nome = 'Hemerson';
        protected $sobrenome = 'Oliveira';
        public $humor = 'Triste';
    }

    $pai = new pai();
?>
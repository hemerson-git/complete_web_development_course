<?php
//-------------- Namespace A
    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface{
        public $nome = 'Hemerson';

        public function __construct() {
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '<pre/>';
        }
        
        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar () {
            echo 'salvo com sucesso';
            echo '<br/>';
        }

        public function remover () {
            echo 'removido';
        }
    }

    Interface CadastroInterface {
        public function salvar();
    }

    //-------------- Namespace B
    //--------------------------

    namespace B;
    class Cliente implements CadastroInterface{
        public $nome = 'Jorge';

        public function __construct() {
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '<pre/>';
        }
        
        public function __get($attr) {
            return $this->$attr;
        }

        public function remover() {
            echo 'removido com sucesso';
            echo '<br/>';
        }
    }

    Interface CadastroInterface {
        public function remover();
    }

    $c = new \A\Cliente();
    echo $c->__get('nome'); 
?>
<?php
    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático';
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1() {
            echo 'Eu sou um método estático';
        }

        public function metodo2 () {
            echo 'Eu sou um método normal';
        }
    }

    //Atrbutos estáticos não podem ser acessados pelo operador ->
    //Métodos estáticos não podem usar o $this

    echo Exemplo::$atributo1;
    echo '</br>';
    Exemplo::metodo1();
    echo '</br>';
    Exemplo::metodo2(); //Funciona mas deve ser evitado

    //em caso de namespaces de arquivos externos, nós utilizaremos o 
    //require para importar o arquivo 
    //use para usar um determinado namespace '$b = new B\Cliente()
    //Para apelidar namespace usamos o as -> use A\Cliente() as apelido
    
    //O 'use' importa apenas Classes e interfaces, não importa cosntantes e funções
?>
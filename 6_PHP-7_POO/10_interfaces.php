<?php
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar ();
    }
    
    class Geladeira implements EquipamentoEletronicoInterface { 
        public function abrirPorta (){
            echo 'Porta aberta';
        }

        public function ligar(){
            echo 'Geladeira ligada';
        }
        
        public function desligar () {
            echo 'Geladeira desligada';
        }
    }   
    
    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'canal trocado';
        }

        public function ligar(){
            echo 'TV ligada';
        }
    
        public function desligar () {
            echo 'TV desligada';
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

    $tv->trocarCanal();
    echo '<br/>';
    $tv->ligar();

    echo '<br/>';
    
    $geladeira->abrirPorta();
    echo '<br/>';
    $geladeira->ligar();
    
    echo '<hr/>';

    //---------------------------------------
    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements MamiferoInterface, TerrestreInterface {
        public function conversar() {
            echo 'conversar';
        }

        public function andar () {
            echo 'andar';
        }
        
        public function respirar () {
            echo 'respirar';
        }
    }
    
    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function esguichar() {
            echo 'esguichar';
        }
    
        public function nadar () {
            echo 'nadar';
        }
        
        public function respirar () {
            echo 'respirar';
        }
    }

    //---------------------------------------

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar () {
            echo 'voar';
        }

        public function comer () {
            echo 'comer';
        }
    }

    $papagaio = new Papagaio();
    $papagaio->voar(); 
    echo '<br/>';
    $papagaio->comer(); 
?>